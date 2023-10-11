<?php


Route::middleware(['web', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/translations', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'index'])->name('translations.index');
    Route::get('admin/translations/scan', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'scan'])->name('translations.scan');
    Route::get('admin/translations/export', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'export'])->name('translations.export');
    Route::get('admin/translations/import', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'importView'])->name('translations.importView');
    Route::post('admin/translations/import', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'import'])->name('translations.import');
    Route::get('admin/translations/auto', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'auto'])->name('translations.auto');
    Route::get('admin/translations/{model}/edit', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'edit'])->name('translations.edit');
    Route::post('admin/translations/{model}', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'update'])->name('translations.update');
    Route::delete('admin/translations/{model}', [\TomatoPHP\TomatoTranslations\Http\Controllers\TranslationsController::class, 'destroy'])->name('translations.destroy');
});
