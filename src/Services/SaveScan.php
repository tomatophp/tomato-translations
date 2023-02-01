<?php

namespace TomatoPHP\TomatoTranslations\Services;

use Illuminate\Support\Facades\File;
use TomatoPHP\TomatoTranslations\Models\Translation;

class SaveScan
{
    private $paths;

    public function __construct()
    {
        $this->paths = config('tomato-translations.paths');
    }

    public function save()
    {
        $scanner = app(Scan::class);
        collect($this->paths)->each(function ($path) use ($scanner) {
            $scanner->addScannedPath($path);
        });

        list($trans, $__) = $scanner->getAllViewFilesWithTranslations();

        /** @var Collection $__ */

        $collectKeys = collect([]);
        $__->each(function ($default) use ($collectKeys) {
            if(!Translation::where('key', $default)->first() && ((!str_contains($default, '{{')) && (!str_contains($default, '}}')) && (!str_contains($default, '::'))  && (!str_contains($default, '.$')))){
                $collectKeys->put($default, $default);
            }
        });

        $jsonFolder = File::files(lang_path());
        foreach($jsonFolder as $getLangName){
            $fileContent = json_decode(File::get(lang_path($getLangName->getFilename())));
            $jsonCollection = collect($fileContent);
            $lastJson = array_merge($jsonCollection->toArray(), $collectKeys->toArray());
            File::put(lang_path($getLangName->getFilename()), json_encode($lastJson, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
        }
    }

    public function getKeys(): array
    {
        $langCollection = collect([]);
        $jsonFolder = File::files(lang_path());
        $counter = 1;
        $langNames = [];
        foreach($jsonFolder as $getLangName){
            $langNames[] = str_replace('.json', '', $getLangName->getFilename());
        }
        foreach($jsonFolder as $getLang){
            $fetchLang = json_decode(File::get(lang_path($getLang->getFilename())));
            $lang = str_replace('.json', '', $getLang->getFilename());
            foreach($fetchLang as $index=>$langItem){
                if((!$langCollection->where('id', $counter)->first())){
                    $catchByKey = $langCollection->where('key', $index)->first();
                    if($catchByKey){
                        $catchByKey->put($lang, $langItem);
                    }
                    else {
                        $initCollection = collect([]);
                        $initCollection->put("id", $counter);
                        $initCollection->put("key", $index);
                        foreach($langNames as $item){
                            $initCollection->put($item, $langItem);
                        }
                        $langCollection->push($initCollection);
                    }

                    $counter++;
                }
            }
        }

        return $langCollection->toArray();
    }
}
