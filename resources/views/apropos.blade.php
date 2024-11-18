@extends('layouts.app')

@section('titre', '| A Propos')

@section('contenu')
    <!-- Header Start -->
    @include('layouts.header')
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('storage/images/about.png') }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p>{{ __('messageTraduit.slogan') }}</p>
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
    <!-- About End -->

    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">

@endsection