@extends('layouts.auth')

@section('title', 'Восстановление пароля')

@section('content')
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="auth-logo">
          <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Восстановление пароля</h1>
        <p class="auth-subtitle mb-5">Введите почту, указанную при регистрации, чтобы восстановить пароль</p>

        @if($errors->any())
          <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
          </div>
        @endif

        @if(session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
          @csrf

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" name="email" placeholder="Почта" required autofocus>
            <div class="form-control-icon">
              <i class="bi bi-envelope"></i>
            </div>
          </div>

          <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Отправить письмо</button>
        </form>

        <div class="text-center mt-5 text-lg fs-4">
          <p class="text-gray-600">
            <a href="{{ route('register') }}" class="font-bold">Зарегистрироваться</a>
            или
            <a class="font-bold" href="{{ route('login') }}">авторизоваться</a>.
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

