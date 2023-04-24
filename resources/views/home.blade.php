@extends('layouts.layout')
@section('title','Home')

@section('content')

<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1>Gestion du risque <span>Routier</span><br> en entreprise !</h1>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="hero__caption">
                                <h2>Connexion</h2>
                            </div>
                            <!--Hero form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" class="label"/>
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" class="label" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                  type="password"
                                                  name="password"
                                                  required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-white hover:text-orange-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <button class="ml-3 btn-login">
                                        {{ __('Log in') }}
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

@section('header')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        $(document).ready(function(){
            var images = ['road.jpg', 'truck.jpg'];
            var randomIndex = Math.floor(Math.random() * images.length);
            var imageUrl = '/img/home/' + images[randomIndex];
            $('.slider-height').css('background-image', 'linear-gradient(90deg, rgba(10,27,47,1) 0%, rgba(16,32,52,1) 25%, rgba(108,118,130,0.14329481792717091) 86%, rgba(255,255,255,0.04245448179271705) 100%), url(' + imageUrl + ')');
        });

    </script>

@endsection


