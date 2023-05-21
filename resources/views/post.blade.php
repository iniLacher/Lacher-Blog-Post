
@extends('layouts.main')

@section('container')
<div class="card mb-3">
  @if ($post->image)
  <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top object-fit-cover" alt="{{ $post->category->name }}" width="445" height="301">
  @else
  <img src="/img/{{ $post->category->name }}.jpg" class="card-img-top object-fit-cover" alt="{{ $post->category->name }}" width="445" height="301">
  @endif
  <div class="card-body">
    <h2 class="card-title">{{ $post["judul"] }}</h2>
    <p class="card-text"><small class="text-body-secondary">
      Author : <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in 
      <a href="/posts?category={{ $post->Category->slug }}">{{ $post->Category->name }}</a>
      Created {{ $post->created_at->diffForHumans() }}</small></p>
    {!! $post["body"] !!}
  </div>
</div>

<a href="/posts" class="btn btn-primary">Back To Posts</a>
@endsection