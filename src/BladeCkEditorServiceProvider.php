<?php

namespace Pranabkalita\BladeCkeditor;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Pranabkalita\BladeCkeditor\View\Components\BladeCkeditor;

class BladeCkEditorServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings or services here
    }

    public function boot()
    {
        // Publish your CKEditor assets here if needed
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'blade-ckeditor');

        $this->publishes([
            __DIR__ . '/resources/ckeditor' => public_path('/pranabkalita/ckeditor'),
        ], 'blade-ckeditor');

        Blade::component('blade-ckeditor', \Pranabkalita\BladeCkeditor\View\Components\BladeCkeditor::class);

        Blade::directive('ckeditorStyles', function () {
            $url = asset('/pranabkalita/ckeditor/build/css/styles.css');
            return "<link rel='stylesheet' href='{$url}' />";
        });

        Blade::directive('ckeditorScripts', function () {
            $scriptPath = asset('/pranabkalita/ckeditor/build/ckeditor.js');
            return '<script src="' . $scriptPath . '"></script>';
        });

        Blade::directive('alpineJs', function () {
            $scriptPath = 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js';
            return '<script src="' . $scriptPath . '" defer></script>';
        });
    }
}
