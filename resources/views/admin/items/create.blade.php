@extends('app')

@section('title', 'Авторизация')

@section('content')

<div class="container">
    <h1>Авторизация</h1>
    <form action="{{route('login.fun')}}" method="POST">
        @csrf
        @method('post')
        <div class="form-group">
            <label>Имя</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button class="btn btn-">Войти</button>
    </form>
</div>

@endsection
    