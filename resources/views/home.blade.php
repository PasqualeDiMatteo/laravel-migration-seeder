@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <div class="container mt-5">
        @include('includes.trains.table')
    </div>
@endsection
