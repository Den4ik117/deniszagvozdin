@extends('layouts.auth')

@section('title', 'Авторизация')

@section('content')
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="auth-logo">
          <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Авторизация</h1>
        <p class="auth-subtitle mb-5">Авторизуйтесь, чтобы войти в панель администратора</p>

        @if($errors->any())
          <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
          </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
          @csrf

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" name="email" placeholder="Почта" autofocus>
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
          </div>

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" name="password" placeholder="Пароль">
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
          </div>

          <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" type="checkbox" id="flexCheckDefault" name="remember">
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
              Запомнить меня
            </label>
          </div>

          <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Войти</button>
        </form>

        <div class="text-center mt-5 text-lg fs-4">
          <p class="text-gray-600">Ещё нет аккаунта? <a href="{{ route('register') }}" class="font-bold">Зарегистрироваться</a>.
          </p>
          <p><a class="font-bold" href="{{ route('password.request') }}">Забыли пароль?</a></p>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <div id="auth-right">

      </div>
    </div>
  </div>
@endsection
