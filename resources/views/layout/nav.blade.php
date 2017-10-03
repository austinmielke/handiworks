<nav class="navbar navbar-expand-sm navbar-dark bg-light row" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {!! ($page == 'home') ? 'active' : '' !!}" href="/">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {!! ($page == 'patterns') ? ' active' : '' !!}" href="/patterns">Patterns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link{!! ($page == 'about') ? ' active' : '' !!}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link{!! ($page == 'contact') ? ' active' : '' !!}" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>