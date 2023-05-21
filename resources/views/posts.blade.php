{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
<h4 class="text-center mb-3">{{ $title }}</h4>
@if ($posts->count())
<div class="card text-center mb-4">
  <div class="card-header">
    @if ($posts[0]->image)
    <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top object-fit-cover" alt="{{ $posts[0]->category->name }}" width="445" height="301">
    @else
    <img src="/img/{{ $posts[0]->category->name }}.jpg" class="card-img-top object-fit-cover" alt="{{ $posts[0]->category->name }}" width="445" height="301">
    @endif
  </div>
  <div class="card-body">
    <h3 class="card-title">{{ $posts[0]->judul }}</h5>
    <small>Author : <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> 
      in <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></small>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more...</a>
  </div>
  <div class="card-footer text-body-secondary">
    {{ $posts[0]->created_at->diffForHumans() }}
  </div>
</div>
<div class="row">
  @foreach ($posts->skip(1) as $post)
      <div class="col-4 mb-4">
        <div class="card">
          <a href="/posts?category={{ $post->category->slug }}">
            <span class="position-absolute px-5 py-3 text-light" style="background-color: rgba(0, 0, 0, 0.6);">
              {{ $post->category->name }}
            </span>
          </a>
            @if ($post->image)
            <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top object-fit-cover" alt="{{ $post->category->name }}" width="445" height="301">
            @else
            <img src="/img/{{ $post->category->name }}.jpg" class="card-img-top object-fit-cover" alt="{{ $post->category->name }}" width="445" height="301">
            @endif
          <div class="card-body">
            <article>
              <h3 class="card-title">{{ $post->judul }}</h3>
              <p>
                <small>
                Author :<i> <a href="/posts?author={{ $post->author->username }}" class=" text-decoration-none">{{ $post->author->name }}</a></i>
                <br>  Created : {{ $post->created_at->diffForHumans() }}
                </small>
              </p>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a  href="/posts/{{ $post->slug }}" class="btn btn-primary text-decoration-none">Read more...</a>
            </article>
          </div>
        </div>
      </div>
  @endforeach
</div>
@else
  <h4 class="text-center">Post not Found</h4>
@endif
<div class="d-flex justify-content-center my-3">
  {{ $posts->links() }}
</div>
@endsection
  
