@extends('layout.app')

@section('content')
<form action=" {{url('posts',$post)}} " method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type="hidden" name="id" id="id" value=" {{$post->id}}">
    <div class="mb-3">
      <label for="titre" class="form-labetitl">titre</label><br>
      <input type="text" class="form-control" id="titre" name="titre" value="{{$post->titre}}" >
    </div>
    <div class="mb-3">
        <label for="categorie" class="form-label">categorie</label><br>
        <select name="categorie_id" id="categories">
            @foreach ($categories as $opt)
            <option value="{{$opt->id}}"> {{$opt->categorie}} </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <input type="file" class="form-control" aria-label="file example" class="image" name="image" value="{{$post->image}}" required>
        <div class="invalid-feedback">selectionner un fichier</div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label><br>
      <input type="text" class="form-control" id="descriotion" name="description" value=" {{$post->description}} ">
    </div>
    <div class="mb-3">
      <label class="" for="contenue">contenue</label><br>
      <textarea id="contenue" name="contenue"> {{$post->contenue}} </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
