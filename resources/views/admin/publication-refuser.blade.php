<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Charts</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>

</head>

<body id="page-top">

            @include('admin.layout.navbar')

            <div class="row justify-content-center">
                @foreach ($post as $item)
                    @if ($item->valideted==2)
                    <div class="card col-md-6 col-lg-4 col-xl-4 " style="width: 26rem; margin:10px; border-radius:10px">
                        <div class="card-body container">
                            <img src="{{asset($item->image)}}" style="height: 16rem; max-width:24rem" alt="img">
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
                                        {{$item->created_at->diffForHumans()}}
                                    </small>
                            </span>
                            <table  id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <button style="background: rgb(247, 247, 244);border-radius:30px;border:orangered"><a href="{{url('./posts/'.$item->id)}}" class="card-link">Afficher</a></button>
                                        </td>
                                        <td>
                                            <form action="{{route('validé',$item)}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="valideted" value="1">
                                                <input type="submit" value="Accepter"style="background: rgb(247, 247, 244);border-radius:30px;border:orangered">
                                            </form>
                                        </td>
                                            <td>
                                                <form action="{{'suppresion/'.$item->id}}" method="post" accept-charset="UTF-8">
                                                    @csrf
                                                @method('DELETE')
                                                    <input type="submit" value="supprimer" style="background: rgb(247, 247, 244);border-radius:30px;border:orangered">
                                                </form>
                                            </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                @endforeach
                {{$post->links()}}
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>
