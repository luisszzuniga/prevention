@extends('layouts.layout')
@section('title','Home')

@section('header')
    @vite(['resources/js/home.js'])
@endsection

@section('content')

<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 title-home">
                            <div class="hero__caption">
                                <h1>Gestion du risque <span>Routier</span><br> en entreprise !</h1>
                            </div>
                        </div>
                        @if (!Auth::check())
                        <div class="col-xl-3 col-lg-3 form-login">
                            <div class="hero__caption">
                                <h2 class="login-title">Connexion</h2>
                            </div>
                            <div class="login-no-account">
                                <p>Pas encore de compte ?</p>
                                <a href="{{ route('register') }}">
                                    {{ __('Créer un compte !') }}
                                </a>
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
                                        <input id="remember_me" type="checkbox" class="hidden orange-checkbox" name="remember">
                                        <span class="custom-checkbox"></span>
                                        <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-orange-600 hover:text-orange-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password ?') }}
                                        </a>
                                    @endif

                                    <button class="ml-3 btn-login">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>

                </div>
                </div>
            </div>
        </div>

    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Nos services </span>
                        <h2>Ce que nous pouvons vous proposer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50" id="cat-1">
                        <div class="cat-icon">
                            <img src="{{ asset('img/home/services/computer.png') }}" class="services-logo" id="computer">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{ route('offers') }}">Digitalisation</a></h5>
                            <p>Faites gagner du temps à vos formateurs. Plus de saisie papier ou d'interminables fichier Excel à
                                remplir. Saisissez toutes les informations sur la tablette de formations. <br> <br> <br></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50" id="cat-2">
                        <div class="cat-icon">
                            <img src="{{ asset('img/home/services/database.png') }}" class="services-logo" id="database">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{ route('offers') }}">LRS</a></h5>
                            <p>Vos clients vous demandent d'avoir un suivi des formations digitales. Pas de soucis ! Le déroulé de
                                la formation est intégrée dans un LRS (Learning Record Store) qui peut se connecter au SIRH de
                                votre client. Le rapport à votre client est entièrement automatisé.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50" id="cat-3">
                        <div class="cat-icon">
                           <img src="{{ asset('img/home/services/dashcam.png') }}" class="services-logo" id="dashcam">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{ route('offers') }}">Dashcam</a></h5>
                            <p>Les études ont montré que de revoir ses erreurs de conduite permet d'améliorer sa conduite. Offrez
                                cette nouvelle prestation de formation à vos clients. <br> <br> <br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Area End -->



</main>

@endsection



