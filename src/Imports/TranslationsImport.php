<?php

namespace TomatoPHP\TomatoTranslations\Imports;

use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Concerns\ToCollection;
use TomatoPHP\TomatoTranslations\Models\Translation;
use Illuminate\Support\Collection;


class TranslationsImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        unset($rows[0]);
        $getLocals = config('translations.locals');

        foreach ($rows as $row) {
            $jsonFolder = File::files(lang_path());
            foreach($jsonFolder as $key=>$getLangName){
                $fileContent = json_decode(File::get(lang_path($getLangName->getFilename())));
                $fileContent->{$row[1]} = $row[$key+2];
                File::put(lang_path($getLangName->getFilename()), json_encode($fileContent, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
            }
        }
    }
}
