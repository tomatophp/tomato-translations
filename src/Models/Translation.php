<?php

namespace TomatoPHP\TomatoTranslations\Models;

use TomatoPHP\TomatoTranslations\Services\SaveScan;
use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use Sushi;

    protected ?array $rows = [];

    public function getRows()
    {
        return (new SaveScan())->getKeys();
    }

    protected function sushiShouldCache()
    {
        return false;
    }
}
