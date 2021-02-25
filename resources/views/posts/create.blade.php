@extends('layouts.app')
@section('title')
    Posts Create
@endsection
@section('content')
<form  action="{{ route('posts.store') }}" class="form-group" method="post">
  @csrf
  @method('POST')
  <h1>Create Post</h1> 
  @if ($errors->any()) 
    <div class="alert alert-danger"> 
      <ul> 
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach 
      </ul> 
    </div> 
  @endif 
  <label for="title">Title</label>
  <input autocomplete="off" type="text" name="title" id="title" class="form-control" placeholder="Inserisci un titolo" aria-describedby="helpId" value= "{{ old('title') }}">
  <br>
  <label for="body">Inserisci qui il testo</label>
  <textarea style="resize: none" name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Scrivi qualcosa..." value= "{{ old('body') }}"></textarea>
  <br>  
  <input type="submit" value="Invia" class="form-control btn-primary">
</form>

@endsection 