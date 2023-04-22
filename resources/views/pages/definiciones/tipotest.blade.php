@extends("layouts.app")
@section("style")
@endsection
@section('content')
    <x-breadcrumb.breadcrumb>
        <x-slot name='title'>Tipos de Test</x-slot>
        <x-slot name='item'>Definición de Tipos de Test</x-slot>
        <x-slot name='pagetitle'>Tipos de Test</x-slot>
    </x-breadcrumb.breadcrumb>
    @include("pages.definiciones.inc.principal-tt")

@endsection
@section('script')
    <script src="{{ URL::asset('assets/scripts/def/tipostest.js')}}"></script>
@stop

