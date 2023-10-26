@extends('admin.layout.app')
@section('contenue')
    @include('admin.layout.navbar')
    <table class="" id="dataTable" width="50%" cellspacing="0" style="margin: 0 auto">
        <thead>
            <tr>
                <th> Liste des catégories</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie )
            <tr>
                <td>{{$categorie->categorie}}</td>
                <td>
                    <form action="{{url('./categories/'.$categorie->id)}}" method="post" accept-charset="UTF-8">
                        @csrf
                       @method('DELETE')
                        <input type="submit" value="supprimer" class="btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <h2>Creer une categorie</h2>
    <br><br>
    <form action="{{url('./categories')}}" method="post">
        @csrf
        <input type="text" name="categorie" >
        <input type="submit" value="creer">
    </form>

@endsection
