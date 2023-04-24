@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Регистрация</h1>

        <form method="post" action="{{ route('register') }}" class="form-style-10">
            @csrf

            <div class="section"><span>Ваше имя</span> (желательно указать реальное имя)</div>
            <div class="inner-wrap">
                <input type="text" name="name" value="{{ old('name') }}" >
                @error('name')
                <small>{{$message}}</small>
                @enderror
            </div>

            <div class="section"><span>Почтовый адрес</span> (email)</div>
            <div class="inner-wrap">
                <input type="text" name="email" value="{{ old('email') }}" >
                @error('email')
                <small>{{$message}}</small>
                @enderror
            </div>
            <div class="section"><span>Пароль для входа</span> (придумайте сложный пароль)</div>
            <div class="inner-wrap">

                <label>Пароль<input type="password" name="password" value="{{ old('password') }}"></label>
                @error('password')
                <small>{{$message}}</small>
                @enderror
                <label>Подтвердите пароль<input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"></label>
                @error('password_confirmation')
                <small>{{$message}}</small>
                @enderror
            </div>

            <input type="submit" value="Регистрация"/>

        </form>
    </div>

@endsection
