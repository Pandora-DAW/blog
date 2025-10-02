@extends('layouts.app2')

@section('title', 'Coders Free')


@section('content') 

    <x-container width= "7xl">
        <x-alert class="mb-32" type="danger">
            <x-slot >
                Alert
            </x-slot>
            Error en su formulario
        </x-alert>
       
    </x-container>

@endsection
