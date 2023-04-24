@extends('layouts.main')

@section('content')
    <div class="container">

        <form method="post" class="form-style-10">
            @csrf

            <div class="inner-wrap">
                <label>еmail
                    <input type="text" name="email" value="{{ old('email') }}">
                </label>
                @error('email')
                <small>{{$message}}</small>
                @enderror
            </div>

            <div class="inner-wrap">
                <label>Пароль
                    <input type="password" name="password" value="{{ old('password') }}">
                </label>
                @error('password')
                <small>{{$message}}</small>
                @enderror

            </div>

            <div>
                @error('error')
                <small>{{$message}}</small>
                @enderror
            </div>

            <div class="button-section">
                <input type="submit" value="Войти"/>
            </div>
            <br>
            <a href="/register" >Регистрация</a>
        </form>


    </div>
@endsection
