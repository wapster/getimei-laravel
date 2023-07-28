@extends('layouts.main')

@section('title', 'Главная - GetIMEI.ru')
    

@section('content')
<!-- Page content-->
<div class="container">
    <div class="text-center mt-5">
        <h1>Welcome to GetIMEI.ru</h1>
        <p class="lead">...</p>
        <p>Bootstrap v5.2.3</p>
    </div>
</div>
@endsection

@section('guest-content')
<!-- Page content-->
<div class="container">
    <div class="text-center mt-5">
        <h1>...</h1>
        <p class="lead">Для работы на сайте необходимо</p>
        <p><a href="/login">Войти</a> или <a href="/register">Зарегистрироваться</a></p>
    </div>
</div>
@endsection