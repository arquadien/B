@extends('layout.app')

@section('content')
    <div style="display: flex;padding:5rem 10rem">
        <div>
            <img style="height: 130px" class="img-profile rounded-circle"
                src="/assets/img/undraw_profile.svg">
        </div>
        <div style="margin: 30px">
            @foreach ($information as $item)
            <h2><u>Nom</u>: {{$item->name}}</h2>
            <h2><u>Email</u>: {{$item->email}}</h2>
            @endforeach
        </div>
    </div>
    <h4 style="text-align: center">Mettre à jour mes informations</h4>
    <form action="{{route('information',$item)}}" method="post" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="titre" class="form-labetitl" >Nom</label><br>
          <input type="text" class="form-control" id="titre" name="name"  >
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Email</label><br>
          <input type="text" class="form-control" id="descriotion" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr><br><br>
    <h4 style="text-align: center">changer de mot de passe</h4>
    <form action="{{route('password.change',$item)}}" method="post" class="container">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="titre" class="form-labetitl" >Anciens mot de passe</label><br>
          <input type="password" class="form-control" id="titre" name="last_password"  >
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Nouveau mot de passe</label><br>
          <input type="password" class="form-control" id="descriotion" name="new_password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form><br><br>

    <u>
        <a class="nav-link px-lg-3 py-3 py-lg-4" href=" {{url('deconnexion')}} ">deconnexion</a>
    </u>
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
