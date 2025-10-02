<x-app-layout>
    
    <x-slot name="title">
        Posts
    </x-slot>

    <x-container width= "7xl">
        <x-alert class="mb-32" type="danger">
            <x-slot >
                Alert
            </x-slot>
            Error en su formulario
        </x-alert>
       
    </x-container>

    
</x-app-layout>
path: resources/views/components/app-layout.blade.php