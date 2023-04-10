@extends('app')

@section('title', 'Регистрация')

@section('content')

<div class="container">
    <h1>Регистрация</h1>
    <form action="{{route('register.fun')}}" method="POST">
        @csrf
        @method('post')
        <div class="form-group">
            <label>Имя</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Почта</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" name="password_repeat" class="form-control">
        </div>
        <button class="btn btn-primary">Регистрация</button>
    </form>
</div>
    
@endsection
    