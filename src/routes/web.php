<?php

use Illuminate\Support\Facades\Route;

Route::get('/ckeditor-script', function () {
    $ckeditorScriptPath = base_path('packages/blade-ckeditor/src/resources/ckeditor/build/ckeditor.js');
    return response()->file($ckeditorScriptPath);
})->name('ckeditor-script');
