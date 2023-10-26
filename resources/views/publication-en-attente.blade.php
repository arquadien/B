@extends('layout.app')
@section('content')
    <!-- Navigation-->
    @include('layout.dash-navbar')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="row justify-content-center">
            @foreach ($post as $item)
            @if ($item->valideted==0)
            <div class="card col-md-6 col-lg-4 col-xl-4 " style="width: 26rem; margin:10px">
                <div class="card-body container">
                    <img src="{{asset($item->image)}}" style="height: 16rem; max-width:24rem" alt="img">
                        <h5 style="text-align:center" class="card-title">{{Str::limit($item->titre,60)}}</h5>
                        <span class='bg-danger' >categorie: {{$item->categorie->categorie}}</span>
                        <p class="card-text">{{Str::limit($item->description,100)}}</p>
                        <h6 style="margin-top:10px; color:aqua">{{$item->created_at->diffForHumans()}}</h6>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
    </header>
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
