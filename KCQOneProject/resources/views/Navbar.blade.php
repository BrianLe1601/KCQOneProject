<nav class="navbar navbar-expand-lg bg-transparent" style="width: 100%">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="width: 50%">
            <img src="{{ asset('/img/logoKCQ2.png') }}" alt="" width="50%">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('service') ? 'active' : '' }}" href="/service">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About Us</a>
                </li>
                <li class="nav-item  px-4 py-2 contact-btn">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                        href="/contact"><span>Contact</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
