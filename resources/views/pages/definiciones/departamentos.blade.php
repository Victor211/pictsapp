@extends("layouts.app")
@section("style")
@endsection
@section('content')
    <x-breadcrumb.breadcrumb>
        <x-slot name='title'>Departamentos</x-slot>
        <x-slot name='item'>Definición de Departamentos</x-slot>
        <x-slot name='pagetitle'>Departamentos</x-slot>
    </x-breadcrumb.breadcrumb>
    @include("pages.definiciones.inc.principal-d")

@endsection
@section('script')
    <script src="{{ URL::asset('assets/scripts/def/departamentos.js')}}"></script>
@stop

