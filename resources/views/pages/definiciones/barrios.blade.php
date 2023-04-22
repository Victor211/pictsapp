@extends("layouts.app")
@section("style")
@endsection
@section('content')
    <x-breadcrumb.breadcrumb>
        <x-slot name='title'>Barrios</x-slot>
        <x-slot name='item'>Definición de Barrios</x-slot>
        <x-slot name='pagetitle'>Barrios</x-slot>
    </x-breadcrumb.breadcrumb>
    @include("pages.definiciones.inc.principal-b")

@endsection
@section('script')
    <script type="module" src="{{ URL::asset('assets/scripts/lib/definiciones.js')}}"></script>
    <script type="module" src="{{ URL::asset('assets/scripts/def/barrios.js')}}"></script>
@stop

