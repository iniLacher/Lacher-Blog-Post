@extends('dashboard.layouts.main')
@section('container')
<div class="card my-5 col-lg-8 mx-lg-auto">
  @if ($post->image)
  <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top object-fit-cover" alt="{{ $post->category->name }}" width="445" height="301">
  @else
  <img src="/img/{{ $post->category->name }}.jpg" class="card-img-top object-fit-cover" alt="{{ $post->category->name }}" width="445" height="301">
  @endif
  <div class="card-body">
    <a href="/dashboard/posts" class="btn btn-success btn-sm">
      <span data-feather="arrow-left" class="align-text-bottom"></span> Back To MyPost
    </a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm">
      <span data-feather="edit" class="align-text-bottom"></span> Edit
    </a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
      @csrf
      @method('delete')
      <button class="btn btn-danger btn-sm" onclick=" return confirm('Yakin deck?')"><span data-feather="x-octagon" class="align-text-bottom"></span> Delete</button>
    </form>
    <h2 class="card-title">{{ $post["judul"] }}</h2>
    <p class="card-text"><small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small></p>
    {!! $post["body"] !!}
  </div>
</div>
@endsection