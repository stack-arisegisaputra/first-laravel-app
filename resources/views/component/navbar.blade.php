<nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
    <div class="container  ">
        <a class="navbar-brand fw-bolder text-white" href="/">
            <span class="bg-primary p-2 rounded ">First</span>
            Laravel
            APP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }} " href="about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="blog">Blog</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
