@extends('layouts.app')

@section('titre', '| Services')

@section('contenu')

    <!-- Header Start -->
    @include('layouts.header')
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
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

    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">

@endsection