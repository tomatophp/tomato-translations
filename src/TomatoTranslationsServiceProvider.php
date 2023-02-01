<?php

namespace TomatoPHP\TomatoTranslations;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoPHP\Services\Menu\TomatoMenuRegister;
use TomatoPHP\TomatoRoles\Services\Permission;
use TomatoPHP\TomatoRoles\Services\TomatoRoles;
use TomatoPHP\TomatoTranslations\Menus\TranslationMenu;


class TomatoTranslationsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\TomatoTranslations\Console\TomatoTranslationsInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-translations.php', 'tomato-translations');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-translations.php' => config_path('tomato-translations.php'),
        ], 'config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-translations');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-translations'),
        ], 'views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-translations');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => resource_path('lang/vendor/tomato-translations'),
        ], 'lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        TomatoMenuRegister::registerMenu(TranslationMenu::class);

        $this->registerPermissions();

    }

    /**
     * @return void
     */
    private function registerPermissions(): void
    {
        TomatoRoles::register(Permission::make()
            ->name('admin.translations.index')
            ->guard('web')
            ->group('translations')
        );

        TomatoRoles::register(Permission::make()
            ->name('admin.translations.scan')
            ->guard('web')
            ->group('translations')
        );

        TomatoRoles::register(Permission::make()
            ->name('admin.translations.export')
            ->guard('web')
            ->group('translations')
        );

        TomatoRoles::register(Permission::make()
            ->name('admin.translations.importView')
            ->guard('web')
            ->group('translations')
        );

        TomatoRoles::register(Permission::make()
            ->name('admin.translations.import')
            ->guard('web')
            ->group('translations')
        );

        TomatoRoles::register(Permission::make()
            ->name('admin.translations.auto')
            ->guard('web')
            ->group('translations')
        );

        TomatoRoles::register(Permission::make()
            ->name('admin.translations.edit')
            ->guard('web')
            ->group('translations')
        );

        TomatoRoles::register(Permission::make()
            ->name('admin.translations.update')
            ->guard('web')
            ->group('translations')
        );

        TomatoRoles::register(Permission::make()
            ->name('admin.translations.destroy')
            ->guard('web')
            ->group('translations')
        );
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
