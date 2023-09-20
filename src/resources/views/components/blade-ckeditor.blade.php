<div
    wire:ignore
    x-data="{
        editor: null,

        async initializeCkeditor() {
            editor = await (await ClassicEditor.create($refs.editor))

            editor.model.document.on('change:data', () => {
                $dispatch('input', editor.getData())
            });
        }
    }"
    x-init="initializeCkeditor"
    {{ $attributes }}
>
    <textarea x-ref="editor"></textarea>
</div>
