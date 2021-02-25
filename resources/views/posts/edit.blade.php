@extends('layouts.app')
@section('title')
    Post EDIT
@endsection
@section('content')
<form  action="{{ route('posts.update', $post) }}" class="form-group" method="post">
  @csrf
  @method('PUT')

  <label for="title">Title</label>
  <input type="text" name="title" id="title" class="form-control" placeholder="scrivi un titolo" aria-describedby="helpId" value="{{ $post->title }}">
  <label for="body">Inserisci qui il testo</label>
  <textarea style="resize: none" placeholder="comincia a scrivere..." name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
  <input type="submit" value="Invia" class="form-control btn-primary">
</form>
@endsection 
