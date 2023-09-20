# Blade CKEditor
This is a Livewire component which allows to add basic CkEditor 5 integration to your Laravel app.

## Requirements

1. PHP >= 8.2
2. Laravel >= 9
3. Livewire >= 2
4. AlpineJs >= 2

## Steps

1. Install package: `composer require pranabkalita/blade-ckeditor`
2. Publish Assets: `php artisan vendor:publish --tag=blade-ckeditor`
3. Add the following directives in you layout file
   ```html
   <head>
   ...
   @ckeditorStyles
   </head>

   <body>
    ...
    @alpineJs // Not required for Livewire >= 3
    @ckeditorScripts
   </body>
   ```
4. In your blade file: `<x-blade-ckeditor wire:model="body" />`
5. For edit purpose you must provide the initialContent props like below
   ```html
   <x-ckeditor wire:model="body" :initialContent="$body" />
   ```

## Roadmaps

Since this is new package. No custom options are available yet. Will be working on it and pushing out regular updates with new features.

1. Get rid of :initialContent and make it work with `wire:mode` iteself.
2. Use the ability to select the editor version i.e `WYSIWYG` or `Markdown`.