@extends('layout.app')

@section('content')
<form action=" {{url('./posts')}} " method="post" class="container" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id" id="id" value=" {{auth()->user()->id}} ">
    <div class="mb-3">
      <label for="titre" class="form-labetitl">Titre</label><br>
      <input type="text" class="form-control" id="titre" name="titre"  >
    </div>
    <div class="mb-3">
        <label for="categorie" class="form-label">categorie</label><br>
        <select name="categorie_id" id="categories">
            @foreach ($categories as $option)
            <option value="{{$option->id}}"> {{$option->categorie}} </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <input type="file" class="form-control" aria-label="file example" class="image" name="image" required>
        <div class="invalid-feedback">selectionner un fichier</div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label><br>
      <input type="text" class="form-control" id="descriotion" name="description">
    </div>
    <div class="mb-3" >
      <label class="" for="contenue">contenue</label><br>
      <textarea class="form-control" style="max-width: 30rem;height:20rem;resize:none" id="contenue" name="contenue"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
