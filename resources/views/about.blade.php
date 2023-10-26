@extends('layout.app')

@section('content')

    <!-- Navigation-->
    @include('layout.navigation')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/demon.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>About Me</h1>
                            <span class="subheading">This is what I do.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2 style="text-align: center"><u>Presentation</u></h2>
                        <p>Je suis un étudiant de Côte d'Ivoire en licence dans la filière de l'informatique et science du numerique mais spécialisé dans le developpement d'aplication et E-service qui est passionner par les jeux vidéo et les mangas </p>
                        <h2 style="text-align: center"><u>Mes motivation</u></h2>
                        <p>J'ai développer et j'administre ce site dans le but de mettre en application les connaissance aquise durant ma première année de formation à l'Université Virtuel de Côte d'Ivoire et en se qui concerne le theme qui de plus normal que de choisir sa passion et vous l'aurez compris les mienne son les jeux et les mangas.</p>
                        <h2 style="text-align: center"><u>Mes attentes</u></h2>
                        <p>Une chose est d'aimé et une autre de la partager alors, j'espère pouvoir rencontré des personnes qui aime les animés mais si possible creer chez d'autre une envie de regarder les animés et de jouer aux jeux vidéo. je posterai et je vous donnerai la possibilité de poster en respectant bien sûr le thème et mon idéal qui est de créer à travers ce blog une communauté qui aime et partage les mêmes choses  </p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>
                    </div>
                </div>
            </div>
        </footer>

@endsection
