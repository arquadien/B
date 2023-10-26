@extends('layout.app')
@section('content')
    @include('layout.navigation')
    <div class="bg-dark" style="min-height: 100vh; max-with:100%;padding-top: 10% ">
        <div class=" card mb-3">
            <p class="container" >
                <img src="{{asset($post->image)}}" style="max-height:38rem" class="card-img-top" alt="...">
            </p>
            <div class="card-body">
                <h5 class="card-title">{{$post->titre}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <p class="card-text">{{$post->contenue}}</p>
                <p class="card-text"><small class="text-muted">{{$post->created_at->diffForHumans()}} by {{$post->user->name}}</small></p>
            </div>
            <br><br>
            <div>
                <form class="" method="POST" action="{{route('commentaire')}}">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                      <label for="validationTextarea" class="form-label">Commentaire</label>
                      <textarea class="form-control" style="max-width: 30rem;height:20rem;resize:none" name="commentaire" id="" placeholder="laisser un commentaire une appréciation de votre part merci" ></textarea>
                    </div>
                    <div class="mb-2">
                      <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>

            </div>
            <br><br>
            @foreach ($commentaires as $commentaire)
                <div class="card" style="width:24rem;margin:10px 40px">
                    <div class="card-body">
                        <span style="margin-top:10px; color:aqua">


                                <a style="margin-top: 6px" href="{{url('profile')}}" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img style="height: 40px" class="img-profile rounded-circle"
                                        src="/assets/img/undraw_profile.svg">
                                </a>
                                <small>
                                    {{$commentaire->user->name}}
                                </small>

                        </span>
                      <p class="card-title">{{$commentaire->commentaire}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
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
