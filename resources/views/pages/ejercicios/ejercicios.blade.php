@extends("layouts.app")
@section("style")
    <link href="{{ URL::asset('assets/scripts/pickle_tree/pickletree.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <x-breadcrumb.breadcrumb>
        <x-slot name='title'>Ejercicios y Practicas</x-slot>
        <x-slot name='item'>Gestión de Ejercicios y Practicas</x-slot>
        <x-slot name='pagetitle'>Registro y Gestión de Ejercicios y Practicas</x-slot>
    </x-breadcrumb.breadcrumb>
    @include("pages.ejercicios.inc.principal")
    @include("pages.ejercicios.inc.formulario")
    @include("pages.ejercicios.inc.ejerciciosmodal")
@endsection

@section('script')
    <script src="{{ URL::asset('assets/scripts/pickle_tree/pickletree.js')}}"></script>
    <script src="{{ URL::asset('assets/scripts/ejercicios/ejercicios.js')}}"></script>
@stop
