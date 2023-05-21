{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')

<h1>All Categories</h1>
<div class="row">
  @foreach ($categories as $category)
    <div class="col-6">
      <a href="/posts?category={{ $category->slug }}" class="d-flex text-light">
        <span class="position-absolute py-3 px-5 justify-content-center align-items-center flex-fill" style="
        background-color: rgba(0, 0, 0, 0.7);">
        {{ $category->name }}</span>
        <img src="img/{{ $category->name }}.jpg" class="mb-3" alt="{{$category->name}}" width="500" height="300">
        
      </a>
    </div>
  @endforeach
</div>
@endsection
  
