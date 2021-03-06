<nav class="navbar navbar-expand-md navbar-dark bg-primary mb-4">

    <a class="navbar-brand" href="/">Abdel - Stratis</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav mr-auto">

            <li class="{{ Request::is('/') ? 'active' : '' }}">

                <a class="nav-link" href="http://localhost/BasicWebsite/public/">Home <span class="sr-only">(current)</span></a>

            </li>

            <li class="{{ Request::is('album') ? 'active' : '' }}">

                <a class="nav-link" href="http://localhost/BasicWebsite/public/album">Article<span class="sr-only">(current)</span></a>

            </li>

            <li class="{{ Request::is('about') ? 'active' : '' }}">

                <a class="nav-link" href="http://localhost/BasicWebsite/public/about">About<span class="sr-only">(current)</span></a>

            </li>

            <li class="{{ Request::is('contact') ? 'active' : '' }}">

                <a class="nav-link" href="http://localhost/BasicWebsite/public/contact">Contact<span class="sr-only">(current)</span></a>

            </li>

            <li class="{{ Request::is('/') ? 'disable' : '' }}">

                <a class="nav-link" href="http://localhost/BasicWebsite/public/auth">Connexion <span class="sr-only">(current)</span></a>

            </li>

        </ul>

        <form class="form-inline mt-2 mt-md-0">

            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>

        </form>

    </div>

</nav>