@extends("layouts.app")
@section("style")
@endsection
@section('content')
    <x-breadcrumb.breadcrumb>
        <x-slot name='title'>Paises</x-slot>
        <x-slot name='item'>Definición de Paises</x-slot>
        <x-slot name='pagetitle'>Paises</x-slot>
    </x-breadcrumb.breadcrumb>
    @include("pages.definiciones.inc.principal-p")

@endsection
@section('script')
    <script src="{{ URL::asset('assets/scripts/def/paises.js')}}"></script>
@stop

