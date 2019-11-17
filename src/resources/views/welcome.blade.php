@php
    $title = 'Topページだよ'
@endphp
@extends('layouts.mylayout')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
    </div>
    @endsection