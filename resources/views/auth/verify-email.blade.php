{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <div class="mb-4 text-sm text-gray-600">--}}
{{--            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}--}}
{{--        </div>--}}

{{--        @if (session('status') == 'verification-link-sent')--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ __('A new verification link has been sent to the email address you provided during registration.') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <div class="mt-4 flex items-center justify-between">--}}
{{--            <form method="POST" action="{{ route('verification.send') }}">--}}
{{--                @csrf--}}

{{--                <div>--}}
{{--                    <x-button>--}}
{{--                        {{ __('Resend Verification Email') }}--}}
{{--                    </x-button>--}}
{{--                </div>--}}
{{--            </form>--}}

{{--            <form method="POST" action="{{ route('logout') }}">--}}
{{--                @csrf--}}

{{--                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">--}}
{{--                    {{ __('Log Out') }}--}}
{{--                </button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
@extends('layouts.auth')

@section('title', 'Подтверждение почты')

@section('content')
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="auth-logo">
          <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        </div>
        <h1 class="auth-title">Подтверждение почты</h1>
        <p class="auth-subtitle mb-5">Вам на почту отправлено подтверждение почты</p>

        @if($errors->any())
          <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
          </div>
        @endif

        @if(session('status'))
          <div class="alert alert-success" role="alert">
            Сообщение для подтверждения вашей почты успешно отправлено!
          </div>
        @endif

        <form action="{{ route('verification.send') }}" method="POST">
          @csrf

          <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Отправить ещё раз</button>
        </form>

        <div class="text-center mt-5 text-lg fs-4">
{{--          <p class="text-gray-600">Ещё нет аккаунта? <a href="{{ route('register') }}" class="font-bold">Зарегистрироваться</a>.--}}
{{--          </p>--}}
          <p><a class="font-bold" href="{{ route('logout') }}">Выйти из аккаунта</a></p>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <div id="auth-right">

      </div>
    </div>
  </div>
@endsection

