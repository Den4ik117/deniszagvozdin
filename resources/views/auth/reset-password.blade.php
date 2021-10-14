{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('password.update') }}">--}}
{{--            @csrf--}}

{{--            <!-- Password Reset Token -->--}}
{{--            <input type="hidden" name="token" value="{{ $request->route('token') }}">--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                    type="password"--}}
{{--                                    name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-button>--}}
{{--                    {{ __('Reset Password') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}

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
        <p class="auth-subtitle mb-5">Введите новый пароль от аккаунта</p>

        @if($errors->any())
          <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
          </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
          @csrf

          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" name="email" placeholder="Почта" value="{{ old('email', $request->email) }}" autofocus>
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
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

          <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Обновить пароль</button>
        </form>

{{--        <div class="text-center mt-5 text-lg fs-4">--}}
{{--          <p class="text-gray-600">Ещё нет аккаунта? <a href="{{ route('register') }}" class="font-bold">Зарегистрироваться</a>.--}}
{{--          </p>--}}
{{--          <p><a class="font-bold" href="{{ route('password.request') }}">Забыли пароль?</a></p>--}}
{{--        </div>--}}
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <div id="auth-right">

      </div>
    </div>
  </div>
@endsection

