@extends('layouts.login')

@section('content')
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
          <div class="loader-p"></div>
        </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('template') }}/assets/images/login/3.jpg" alt="looginpage"></div>
            <div class="col-xl-7 p-0">
              <div class="login-card">
                <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                  <h4>Login</h4>
                  <h6>Welcome back! Log in to your account.</h6>
                  <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                      <input class="form-control" type="email" name="email" :value="old('email')" required="" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    {{-- <button type="submit" class="btn btn-outline-primary float-right btn-inline">Login</button> --}}
                      <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- page-wrapper end-->
@endsection
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
