@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Hi, {{ auth()->user()->name }}</h1>
</div>
<a href="/dashboard/posts/create" class="btn btn-primary">Create New Post</a>
@if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show text-center col-lg-8 mx-lg-auto" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>  
    @endif
<div class="table-responsive col-lg-8 m-lg-auto">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->judul }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-primary"><span data-feather="eye" class="align-text-bottom"></span></a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button class="border-0 badge bg-danger" onclick=" return confirm('Yakin deck?')"><span data-feather="x-octagon" class="align-text-bottom"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection