@extends('layouts.app')

@section('titre', '| Contact')

@section('contenu')


    <!-- Header Start -->
    @include('layouts.header')
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">{{ __('messageTraduit.ContactAdresse') }}</p>
                    <h4>Biyem'Assi, Yaoundé, Cameroun</h4>
                    <hr class="w-100">
                    <p class="mb-2">{{ __('messageTraduit.ContactAppelerNous') }}</p>
                    <h4>+237 696 18 01 47</h4>
                    <hr class="w-100">
                    <p class="mb-2">{{ __('messageTraduit.ContactEnvoyerNousEmail') }}</p>
                    <h4>contact@flovicam.cm</h4>
                    <hr class="w-100">
                    <p class="mb-2">{{ __('messageTraduit.FooterSuivezNous') }}</p>
                    <div class="d-flex pt-2">
                        <span class="btn btn-square btn-primary rounded-circle me-2"><i class="fab fa-twitter"></i></span>
                        <span class="btn btn-square btn-primary rounded-circle me-2"><i class="fab fa-facebook-f"></i></span>
                        <span class="btn btn-square btn-primary rounded-circle me-2"><i class="fab fa-youtube"></i></span>
                        <span class="btn btn-square btn-primary rounded-circle me-2"><i class="fab fa-linkedin-in"></i></span>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="mb-4">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="nom" value="{{ old('nom') }}" type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">{{ __('messageTraduit.ContactVotreNom') }}</label>
                                </div>
                                @error("nom")
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">{{ __('messageTraduit.ContactVotreEmail') }}</label>
                                </div>
                                @error("email")
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="objet" value="{{ old('objet') }}" type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">{{ __('messageTraduit.ContactObjet') }}</label>
                                </div>
                                @error("objet")
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="contenu" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px">{{ old('contenu') }}</textarea>
                                    <label for="message">{{ __('messageTraduit.ContactMessage') }}</label>
                                </div>
                                @error("contenu")
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" type="submit">{{ __('messageTraduit.ContactEnvoyerEmail') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
    <!-- Contact End -->
    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
@endsection