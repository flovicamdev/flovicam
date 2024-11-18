
<div class="container-fluid hero-header bg-light py-1 mb-1">
    <div class="container">
        <div class="row g-1 align-items-center">
            <div>
                <h1 class="display-4 animated slideInDown">
                    @if (request()->route()->getName() == 'apropos')
                    {{ __('messageTraduit.menuApropos') }}
                    @elseif (request()->route()->getName() == 'services')
                    {{ __('messageTraduit.menuSevices') }}
                    @elseif (request()->route()->getName() == 'contact')
                    {{ __('messageTraduit.menuContact') }}
                    @endif
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Flovicam</li>
                        <li class="breadcrumb-item">Page</li>
                        <li class="breadcrumb-item active" aria-current="page">
                            @if (request()->route()->getName() == 'apropos')
                            {{ __('messageTraduit.menuApropos') }}
                            @elseif (request()->route()->getName() == 'services')
                            {{ __('messageTraduit.menuSevices') }}
                            @elseif (request()->route()->getName() == 'contact')
                            {{ __('messageTraduit.menuContact') }}
                            @endif
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>