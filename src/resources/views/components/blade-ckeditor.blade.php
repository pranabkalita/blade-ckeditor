@props(['initialContent' => null])

<div
    wire:ignore
    x-data="{
        editor: null,
        initialContent: @js($initialContent),

        async initializeCkeditor() {
            editor = await (await ClassicEditor.create($refs.editor))

            editor.model.document.on('change:data', () => {
                $dispatch('input', editor.getData())
            });

            this.initialContent != '' ? editor.setData(this.initialContent) : ''
        }
    }"
    x-init="initializeCkeditor"
    {{ $attributes }}
>
    <textarea x-ref="editor"></textarea>
</div>
