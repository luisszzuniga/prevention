@extends('layouts.layout')

@section('title', 'offers')

@section('header')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    @vite(['resources/css/offers.css','resources/js/offers.js'])
@endsection

@section('content')

    <div class="pricing-container">
        <div class="box-center">
            <div class="title-offers">
                <h1 class="h1-offers">
                    Nos offres ACP disponible
                </h1>
            </div>
            <div class="gallery-nav">
                <button>
                    <span>Plus</span>
                </button>
                <button class="is-selected">
                    <span>Buisness</span>
                </button>
                <button>
                    <span>Entreprise</span>
                </button>
            </div>
            <section class="section-pricing">
                <div class="box-under-title" id="box-under-title">
                    <div class="column-first-offer" id="column-first-offer">
                        <div class="content-first-offer" id="first-offer">
                            <h2 class="h2-first-order">
                                Plus
                            </h2>
                            <p class="description-first-offer">
                                Saisie des données du stagiaire
                            </p>
                            <div class="price-detail-first-offer">
                                <div class="price-container-first-offer">
                               <span class="span-price-first-offer">
                                   4,99
                               </span>
                                    <span class="span-sign-first-offer">
                                   €
                               </span>
                                </div>
                                <div class="price-description-first-offer">
                                    <p class="p-price-description-first-offer">par stagiaire</p>
                                    <p class="p-price-other-information-first-offer">
                                        ********
                                    </p>
                                </div>
                            </div>
                            <div class="div-button-first-offer">
                                <button class="button-first-offer" type="button">Accéder à l'offre</button>
                            </div>
                        </div>
                        <div class="features-content-first-offer">
                            <div class="title-features-first-offer">
                                <h2 class="h2-title-features-first-offer">
                                    Caractéristiques :
                                </h2>
                            </div>
                            <div class="list-features-first-offer">
                                <ul>
                                    <li> Gérer les stagiaires</li>
                                    <li> Saisir les informations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column-second-offer" id="column-second-offer">
                        <div class="content-second-offer" id="second-offer">
                            <h2 class="h2-second-order">
                                Business
                            </h2>
                            <p class="description-second-offer">
                                Envoi automatique des données
                            </p>
                            <div class="price-detail-second-offer">
                                <div class="price-container-second-offer">
                               <span class="span-price-second-offer">
                                   9,99
                               </span>
                                    <span class="span-sign-second-offer">
                                   €
                               </span>
                                </div>
                                <div class="price-description-second-offer">
                                    <p class="p-price-description-second-offer">par stagiaire</p>
                                    <p class="p-price-other-information-second-offer">
                                        ********
                                    </p>
                                </div>
                            </div>
                            <div class="div-button-second-offer">
                                <button class="button-second-offer" type="button">Accéder à l'offre</button>
                            </div>
                        </div>
                        <div class="features-content-second-offer">
                            <div class="title-features-second-offer">
                                <h2 class="h2-title-features-second-offer">
                                    Caractéristiques :
                                </h2>
                            </div>
                            <div class="list-features-second-offer">
                                <ul>
                                    <li> Gérer les stagiaires</li>
                                    <li> Saisir les informations</li>
                                    <li> Données envoyées sur le LRS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column-third-offer" id="column-third-offer">
                        <div class="content-third-offer" id="third-offer">
                            <h2 class="h2-third-order">
                                Entreprise
                            </h2>
                            <p class="description-third-offer">
                                Suivre les formations des stagiaires dans leur SIRH
                            </p>
                            <div class="price-detail-third-offer">
                                <div class="price-container-third-offer">
                               <span class="span-price-third-offer">
                                   14,99
                               </span>
                                    <span class="span-sign-third-offer">
                                   €
                               </span>
                                </div>
                                <div class="price-description-third-offer">
                                    <p class="p-price-description-third-offer">par stagiaire</p>
                                    <p class="p-price-other-information-third-offer">
                                        ********
                                    </p>
                                </div>
                            </div>
                            <div class="div-button-third-offer">
                                <button class="button-third-offer" type="button">Accéder à l'offre</button>
                            </div>
                        </div>
                        <div class="features-content-third-offer">
                            <div class="title-features-third-offer">
                                <h2 class="h2-title-features-third-offer">
                                    Caractéristiques :
                                </h2>
                            </div>
                            <div class="list-features-third-offer">
                                <ul>
                                    <li> Gérer les stagiaires</li>
                                    <li> Saisir les informations</li>
                                    <li> Données envoyées sur le LRS</li>
                                    <li> Suivi des formations avvec interface</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
