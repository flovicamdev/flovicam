<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <span class="navbar-brand d-flex align-items-center">
        <h2 class="logo m-0 "><img class="img-fluid me-2" src="{{ asset('storage/images/icon-1.png') }}" alt="logo" style="width: 45px;">Flovicam</h2>
    </span>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    {{-- @dump(request()->route()->getName()) --}}
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0 ">
            <a href="{{ route('accueil', app()->getLocale()) }}" class="nav-item nav-link @if (request()->route()->getName() == 'accueil')? active : '' @endif ">{{ __('messageTraduit.menuAccueil') }}</a>
            <a href="{{ route('apropos', app()->getLocale()) }}" class="nav-item nav-link @if (request()->route()->getName() == 'apropos')? active : '' @endif ">{{ __('messageTraduit.menuApropos') }}</a>
            <a href="{{ route('services', app()->getLocale()) }}" class="nav-item nav-link @if (request()->route()->getName() == 'services')? active : '' @endif ">{{ __('messageTraduit.menuSevices') }}</a>
            <a href="{{ route('contact', app()->getLocale()) }}" class="nav-item nav-link @if (request()->route()->getName() == 'contact')? active : '' @endif ">{{ __('messageTraduit.menuContact') }}</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center p-2 rounded">
            <div class="bg-light">
                <span class="text-center ps-2">{{ __('messageTraduit.menuLangue') }}:</span>
                <a class="btn btn-square  text-primary" href="{{ route(Route::currentRouteName(), 'fr') }}">FR</a>
                <a class="btn btn-square  text-primary" href="{{ route(Route::currentRouteName(), 'en') }}">EN</a>
            </div> 
        </div>
    </div>
</nav>