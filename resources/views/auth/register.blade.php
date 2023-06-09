@extends('layouts.layout')
@section('title','Register')

@section('header')

    @vite(['resources/css/auth/auth.css'])

@endsection

@section('content')

    <main>
        <div class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center">
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="auth">--}}
{{--                                <div class="hero__caption">--}}
{{--                                    <h2>Inscription</h2>--}}
{{--                                </div>--}}
{{--                                <form method="POST" action="{{ route('register') }}">--}}
{{--                                    @csrf--}}

{{--                                    <!-- Last Name -->--}}
{{--                                    <div>--}}
{{--                                        <label for="lastname">{{ __('register.lastname') }}</label>--}}
{{--                                        <input id="lastname" class="block mt-1 w-full" type="text" name="lastname" value="{{ old('lastname') }}" required>--}}
{{--                                        @error('lastname')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <!-- First Name -->--}}
{{--                                    <div class="mt-4">--}}
{{--                                        <label for="firstname">{{ __('register.firstname') }}</label>--}}
{{--                                        <input id="firstname" class="block mt-1 w-full" type="text" name="firstname" value="{{ old('firstname') }}" required>--}}
{{--                                        @error('firstname')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <!-- Email Address -->--}}
{{--                                    <div class="mt-4">--}}
{{--                                        <label for="email">{{ __('register.email') }}</label>--}}
{{--                                        <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required>--}}
{{--                                        @error('email')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <!-- Phone -->--}}
{{--                                    <div class="mt-4">--}}
{{--                                        <label for="phone">{{ __('register.phone') }}</label>--}}
{{--                                        <input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ old('phone') }}" required>--}}
{{--                                        @error('phone')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <!-- Address -->--}}
{{--                                    <div class="mt-4">--}}
{{--                                        <label for="address">{{ __('register.address') }}</label>--}}
{{--                                        <input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ old('address') }}" required>--}}
{{--                                        @error('address')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <!-- Zip Code -->--}}
{{--                                    <div class="mt-4">--}}
{{--                                        <label for="zip_code">{{ __('register.zip_code') }}</label>--}}
{{--                                        <input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" value="{{ old('zip_code') }}" required>--}}
{{--                                        @error('zip_code')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <!-- Town -->--}}
{{--                                    <div class="mt-4">--}}
{{--                                        <label for="town">{{ __('register.town') }}</label>--}}
{{--                                        <input id="town" class="block mt-1 w-full" type="text" name="town" value="{{ old('town') }}" required>--}}
{{--                                        @error('town')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <!-- Password -->--}}
{{--                                    <div class="mt-4">--}}
{{--                                        <label for="password">{{ __('register.password') }}</label>--}}
{{--                                        <input id="password" class="block mt-1 w-full" type="password" name="password" required>--}}
{{--                                        @error('password')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <!-- Confirm Password -->--}}
{{--                                    <div class="mt-4">--}}
{{--                                        <label for="password_confirmation">{{ __('register.confirm_password') }}</label>--}}
{{--                                        <input id="password_confirmation" class=    "block mt-1 w-full" type="password" name="password_confirmation" required>--}}
{{--                                        @error('password_confirmation')--}}
{{--                                        <span class="error-message">{{ $message }}</span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <div class="flex items-center justify-end mt-4">--}}
{{--                                        <a class="underline text-sm text-white hover:text-orange-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                                            {{ __('register.already_registered') }}--}}
{{--                                        </a>--}}

{{--                                        <button class="ml-3 btn-register">--}}
{{--                                            {{ __('register.register') }}--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                    <div class="container">
                        <div class="row">
                            <div class="auth">
                                <div class="hero__caption">
                                    <h2>{{ __('register.title') }}</h2>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <!-- Last Name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">{{ __('register.lastname') }}</label>
                                                <input id="lastname" class="form-control" type="text" name="lastname" value="{{ old('lastname') }}" required>
                                                @error('lastname')
                                                <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- First Name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">{{ __('register.firstname') }}</label>
                                                <input id="firstname" class="form-control" type="text" name="firstname" value="{{ old('firstname') }}" required>
                                                @error('firstname')
                                                <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Email Address -->
                                        <div class="col-md-6">
                                            <div class="form-group mt-4">
                                                <label for="email">{{ __('register.email') }}</label>
                                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Phone -->
                                        <div class="col-md-6">
                                            <div class="form-group mt-4">
                                                <label for="phone">{{ __('register.phone') }}</label>
                                                <input id="phone" class="form-control" type="text" name="phone" value="{{ old('phone') }}" required>
                                                @error('phone')
                                                <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Address -->
                                        <div class="col-md-12">
                                            <div class="form-group mt-4">
                                                <label for="address">{{ __('register.address') }}</label>
                                                <input id="address" class="form-control" type="text" name="address" value="{{ old('address') }}" required>
                                                @error('address')
                                                <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <!-- Zip Code -->
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label for="zip_code">{{ __('register.zip_code') }}</label>
                                                    <input id="zip_code" class="form-control" type="text" name="zip_code" value="{{ old('zip_code') }}" required>
                                                    @error('zip_code')
                                                    <span class="error-message">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- Town -->
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label for="town">{{ __('register.town') }}</label>
                                                    <input id="town" class="form-control" type="text" name="town" value="{{ old('town') }}" required>
                                                    @error('town')
                                                    <span class="error-message">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Password -->
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label for="password">{{ __('register.password') }}</label>
                                                    <input id="password" class="form-control" type="password" name="password" required>
                                                    @error('password')
                                                    <span class="error-message">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- Confirm Password -->
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label for="password_confirmation">{{ __('register.confirm_password') }}</label>
                                                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                                                    @error('password_confirmation')
                                                    <span class="error-message">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end mt-4">
                                            <a class="underline text-sm text-white hover:text-orange-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                                {{ __('register.already_registered') }}
                                            </a>
                                            <button class="ml-3 btn-register">
                                                {{ __('register.register') }}
                                            </button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection

