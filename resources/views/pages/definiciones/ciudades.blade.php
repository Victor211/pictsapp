@extends("layouts.app")
@section("style")
@endsection
@section('content')
    <x-breadcrumb.breadcrumb>
        <x-slot name='title'>Ciudades</x-slot>
        <x-slot name='item'>Definición de Ciudades</x-slot>
        <x-slot name='pagetitle'>Ciudades</x-slot>
    </x-breadcrumb.breadcrumb>
    @include("pages.definiciones.inc.principal-c")

@endsection
@section('script')
    <script src="{{ URL::asset('assets/scripts/def/ciudades.js')}}"></script>
@stop

