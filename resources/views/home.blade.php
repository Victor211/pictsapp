@extends('layouts.app')
@section("style")
@endsection
@section('content')
    @if (  Auth::user()->id === 1)
        @include("dashboards.home")
    @else
    @endif
@endsection
@section("script")

@endsection