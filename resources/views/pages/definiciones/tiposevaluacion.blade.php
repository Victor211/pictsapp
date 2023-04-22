
@extends("layouts.app")

@section("style")
    <link href="{{ URL::asset('assets/scripts/pickle_tree/pickletree.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section("content")
    <x-breadcrumb.breadcrumb>
        <x-slot name='title'>Tipos Evaluaciones</x-slot>
        <x-slot name='item'>Arbol Tipos Evaluaciones</x-slot>
        <x-slot name='pagetitle'>Tipos Evaluaciones</x-slot>
    </x-breadcrumb.breadcrumb>
    @include("pages.definiciones.inc.principal-te")
@endsection

@section("script")
    <script src="{{ URL::asset('assets/scripts/pickle_tree/pickletree.js')}}"></script>
    <script src="{{ URL::asset('assets/scripts/def/tiposevaluaciones.js')}}"></script>
@endsection