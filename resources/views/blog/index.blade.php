@extends('layouts.app')
@section('browser-title',config('app.name', 'Laravel').' (Мой блог)')
@section('page-title', 'Мой блог')
@section('content')
    <div class="container">
        <div class="d-flex justify-start">
            <article id="" class="artices-item col-md-6 col-sm-6 col-xs-12 col-lg-3 col-3">
                <h3>Название</h3>
                <div class="articles-thumb">
                    <img class="articles-img img-thumbnail" src="" alt="">
                </div>
                <div class="articles-excerpt">
                    <p>Описание</p>
                </div>
                <div class="articles-bottom">
                    <a class="btn btn-outline-primary btn-medium" href="">Читать подробнее</a>
                </div>
            </article>
        </div>
    </div>
@endsection
