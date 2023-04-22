@extends("layouts.app")
@section("style")
@endsection
@section('content')
    <x-breadcrumb.breadcrumb>
        <x-slot name='title'>Pacientes y Tutores</x-slot>
        <x-slot name='item'>Gestión de Pacientes y Tutores</x-slot>
        <x-slot name='pagetitle'> Gestión de Pacientes y Tutores</x-slot>
    </x-breadcrumb.breadcrumb>
    @include("pages.pacientes.inc.principal")
    @include("pages.pacientes.inc.formulario")

@endsection
@section('script')
    <script type="module" src="{{ URL::asset('assets/scripts/lib/definiciones.js')}}"></script>
    <script type="module" src="{{ URL::asset('assets/scripts/pacientes/pacientes.js')}}"></script>
    <script src="{{ URL::asset('assets/scripts/pacientes/metodos.js')}}"></script>
@stop

