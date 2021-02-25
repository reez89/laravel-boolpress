@extends('layout.app')
@section ('title-content')
    ARTICLES
@endsection
@section('main-content')

<div id="app">

    <posts-component></posts-component>
    <category-component></category-component>

</div>

@endsection