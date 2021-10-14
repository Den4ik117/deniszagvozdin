@extends('layouts.auth')

@section('title', 'Регистрация')

@section('content')
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="auth-logo">
          <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Регистрация</h1>
        <p class="auth-subtitle mb-5">Зарегистрируйтесь, чтобы пользоваться панелью администратора</p>

        @if($errors->any())
          <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
          </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
          @csrf

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl" name="name" placeholder="Имя" autofocus>
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
          </div>

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl" name="surname" placeholder="Фамилия">
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
          </div>

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" name="email" placeholder="Почта">
            <div class="form-control-icon">
              <i class="bi bi-envelope"></i>
            </div>
          </div>

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" name="password" placeholder="Пароль" autocomplete="new-password">
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
          </div>

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" name="password_confirmation" placeholder="Повторите пароль">
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
          </div>

          <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Зарегистрироваться</button>
        </form>

        <div class="text-center mt-5 text-lg fs-4">
          <p class="text-gray-600">Уже есть аккаунт? <a href="{{ route('login') }}" class="font-bold">Авторизоваться</a>.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <div id="auth-right">

      </div>
    </div>
  </div>
@endsection
