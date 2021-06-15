@extends('layout.app')
@section('content')
<a href="{{route('posts.index')}}" class="btn btn-default">Go Back </a>
<h1>{{$post->title}}</h1>
<small>Written on{{$post->created_at}}</small>
<div>
{{$post->body}}
</div>
<hr>
<a href="{{route('posts.edit',$post->id)}}" class="btn btn-default">Edit</a>
@endsection