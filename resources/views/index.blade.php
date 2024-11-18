@extends('layouts.app')

@section('contenu')

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-2">
        <div class="container py-2">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">{{ __('messageTraduit.slogan') }}</h1>
                    <p class="animated slideInDown">{{ __('messageTraduit.slogandefinition') }}</p>
                    {{-- <a href="" class="btn btn-primary py-3 px-4 animated slideInDown">Explore More</a> --}}
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="{{ asset('storage/images/hero-1.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-2">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('storage/images/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">{{ __('messageTraduit.Aproposdenous') }}</h1>
                        <p>
                            {{ __('messageTraduit.AproposP1') }}
                        </p>
                        <ul>
                            <li>{{ __('messageTraduit.AproposLi1') }}</li>
                            <li>{{ __('messageTraduit.AproposLi2') }}</li>
                            <li>{{ __('messageTraduit.AproposLi3') }}</li>
                            <li>{{ __('messageTraduit.AproposLi4') }}</li>
                            <li>{{ __('messageTraduit.AproposLi5') }}</li>
                            <li>{{ __('messageTraduit.AproposLi6') }}</li>
                        </ul>
                        <p class="mb-4">
                            {{ __('messageTraduit.AproposP2') }}
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>{{ __('messageTraduit.AproposLi21') }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>{{ __('messageTraduit.AproposLi22') }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>{{ __('messageTraduit.AproposLi23') }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fa fa-check bg-light text-primary btn-sm-square rounded-circle me-3 fw-bold"></i>
                            <span>{{ __('messageTraduit.AproposLi24') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl bg-light py-2 my-2">
        <div class="container py-2">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Services</h1>
                <p class="text-primary fs-5 mb-5">{{ __('messageTraduit.ServiceDescription') }}</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('storage/images/website.png') }}" alt="">
                        <h5 class="mb-3"> {{ __('messageTraduit.ServiceC1Titre') }} </h5>
                        <p> {{ __('messageTraduit.ServiceC1P1') }}</p>
                        <h6> {{ __('messageTraduit.ServiceC1P2') }}</h6>
                        <p> {{ __('messageTraduit.ServiceC1P3') }}</p>
                        <p> {{ __('messageTraduit.ServiceC1P4') }}</p>
                        <ul class="pb-3">
                            <li> {{ __('messageTraduit.ServiceC1Li1') }} </li>
                            <li> {{ __('messageTraduit.ServiceC1Li2') }} </li>
                            <li> {{ __('messageTraduit.ServiceC1Li3') }} </li>
                            <li> {{ __('messageTraduit.ServiceC1Li4') }} </li>
                            <li> {{ __('messageTraduit.ServiceC1Li5') }} </li>
                        </ul>
                        {{-- <a href="">Lire plus <i class="fa fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('storage/images/webapp.png') }}" alt="">
                        <h5 class="mb-3">{{ __('messageTraduit.ServiceC2Titre') }}</h5>
                        <p> {{ __('messageTraduit.ServiceC2P1') }} </p>
                        <p> {{ __('messageTraduit.ServiceC2P2') }} </p>
                        <p> {{ __('messageTraduit.ServiceC2P3') }} </p>
                        <p> {{ __('messageTraduit.ServiceC2P4') }}</p>
                        <ul class="pb-1">
                            <li> {{ __('messageTraduit.ServiceC2Li1') }} </li>
                            <li> {{ __('messageTraduit.ServiceC2Li2') }} </li>
                            <li> {{ __('messageTraduit.ServiceC2Li3') }} </li>
                            <li> {{ __('messageTraduit.ServiceC2Li4') }} </li>
                            <li> {{ __('messageTraduit.ServiceC1Li5') }} </li>
                        </ul>
                        {{-- <a href="">Lire plus<i class="fa fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="{{ asset('storage/images/mobileapp.png') }}" alt="">
                        <h5 class="mb-3">{{ __('messageTraduit.ServiceC3Titre') }}</h5>
                        <p class = "text-justify"> {{ __('messageTraduit.ServiceC3P1') }} </p>
                        <p class = "text-justify">{{ __('messageTraduit.ServiceC3P2') }}</p>
                        <ul>
                            <li> {{ __('messageTraduit.ServiceC3Li1') }} </li>
                            <li> {{ __('messageTraduit.ServiceC3Li2') }} </li>
                            <li> {{ __('messageTraduit.ServiceC3Li3') }} </li>
                        </ul>
                        <p>{{ __('messageTraduit.ServiceC3P3') }}</p>
                        {{-- <a href="">Lire plus <i class="fa fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Address -->
    <div class="container-fluid footer mt-2 pt-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="logo mb-4"><img class="img-fluid me-2" src="{{ asset('storage/images/icon-1.png') }}" alt=""
                            style="width: 45px;">Flovicam</h1>
                    <span>{{ __('messageTraduit.slogandefinition') }}</span>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-4">{{ __('messageTraduit.FooterEmailTitre') }}</h5>
                    <p>{{ __('messageTraduit.FooterEmailDescription') }}</p>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="position-relative">
                            <input name="email" type="email" value="{{ old('email') }}" class="form-control bg-transparent w-100 py-3 ps-4 pe-5" placeholder="{{ __('messageTraduit.FooterEmailPlaceholder') }}">
                            <button type="submit" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">{{ __('messageTraduit.FooterEmailBouton') }}</button>
                            
                            @error("email")
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                                
                            @enderror
                        </div>
                    </form>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Contact</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Biyem'Assi, Yaoundé, Cameroun</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+237 696 18 01 47</p>
                    <p><i class="fa fa-envelope me-3"></i>contact@flovicam.cm</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ __('messageTraduit.FooterNosService') }}</h5>
                    <p class="">{{ __('messageTraduit.ServiceC1Titre') }}</p>
                    <p class="">{{ __('messageTraduit.ServiceC2Titre') }}</p>
                    <p class="">{{ __('messageTraduit.ServiceC3Titre') }}</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ __('messageTraduit.FooterLienRapides') }}</h5>
                    <a class="btn btn-link" href="{{ route('apropos', app()->getLocale()) }}">{{ __('messageTraduit.menuApropos') }}</a>
                    <a class="btn btn-link" href="{{ route('services', app()->getLocale()) }}">{{ __('messageTraduit.menuSevices') }}</a>
                    <a class="btn btn-link" href="{{ route('contact', app()->getLocale()) }}">{{ __('messageTraduit.menuContact') }}</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">{{ __('messageTraduit.FooterSuivezNous') }}</h5>
                    <div class="d-flex">
                        <span class="btn btn-square rounded-circle me-2"><i class="fab fa-twitter"></i></span>
                        <span class="btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f"></i></span>
                        <span class="btn btn-square rounded-circle me-2"><i class="fab fa-youtube"></i></span>
                        <span class="btn btn-square rounded-circle me-2"><i class="fab fa-linkedin-in"></i></span>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- Address End -->

    @endsection