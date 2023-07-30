@extends('layouts.app')
@section('browser-title',config('app.name', 'Laravel').' (Главная)')
@section('page-title', config('app.name', 'Laravel'))
@section('content')
<div id="text"><img src="img/resume.png" alt="{{ config('app.name', 'Laravel') }} - My resume" title="Resume"></div>
    <div id="stripe"></div>
    <div class="d-flex py-1">
        @include('home.personal')
        @include('home.skill')
    </div>
@endsection
