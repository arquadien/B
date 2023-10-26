<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.html">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('posts.index')}}">Acceille</a></li>
                @auth
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('./posts/create')}}">New post</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('post')}}">Mes Post</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('en-attente')}}">post en attente</a></li>
                @endauth
                @auth
                <!-- Top bar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a style="margin-top: 6px" class="nav-link dropdown-toggle" href="{{url('profile')}}" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                            <img style="height: 40px" class="img-profile rounded-circle"
                                src="/assets/img/undraw_profile.svg">
                        </a>
                    </li>
                </ul>
                @endauth
            </ul>
        </div>
    </div>
</nav>
