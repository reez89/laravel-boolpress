@extends('layouts.app')
@section('title')
    Posts
@endsection
@section('content')

    <h1>Post number: {{$post->id}} </h1>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">BACK TO POSTS</a>

    <h2> Titolo del Post : {{$post->title}} </h2>
    <h3>Testo :</h3>
    <textarea disabled style="resize: none" name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body }} </textarea>
    <p>Questo post è stato creato il: {{$post->created_at}} </p>
    <p>Ultimo update : {{$post->updated_at}} </p>    

@endsection
