<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
       @include('layout.navigation')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/kaneki.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Anime Blog</h1>
                            <span class="subheading">Tous savoir sur les Animes</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @include('notification')
        <!-- Main Content-->
        <div >
            <div class="row justify-content-center">

                @foreach ($post as $item)
                <div class="section" >
                    @if ($item->valideted==1)
                    <div class="image">
                        <img src="{{asset($item->image)}}" alt="img">
                    </div>
                    <section class="contenu">
                        <h5 style="text-align:center" class="card-title">{{Str::limit($item->titre,60)}}</h5>
                            <span class='bg-danger' >categorie: {{$item->categorie->categorie}}</span>
                            <p class="card-text">{{Str::limit($item->description,100)}}</p>
                            {{-- <button style="background: rgb(247, 244, 244);margin:5px"><a href="{{url('./posts/'.$item->id.'/edit')}}" class="card-link">Modifier</a></button> --}}
                            <span style="margin-top:10px; color:aqua">
                                    <a style="margin-top: 6px" href="{{url('profile')}}" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img style="height: 40px" class="img-profile rounded-circle"
                                            src="/assets/img/undraw_profile.svg">
                                    </a>
                                    <small>
                                        {{$item->user->name}} <br>
                                        {{$item->updated_at->diffForHumans()}}
                                    </small>
                            </span>
                            <button style="background: rgb(247, 247, 244);margin-left:140px;border-radius:30px;border:orangered"><a href="{{url('./posts/'.$item->id)}}" class="card-link">Afficher</a></button>
                    </section>
                    @endif
                </div>
                @endforeach


        </div>
        {{$post->links()}}
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
