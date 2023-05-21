@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post categories</h1>
</div>
<a href="/dashboard/categories/create" class="btn btn-primary">Create New Category</a>
@if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show text-center col-lg-6 mx-lg-auto" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>  
    @endif
<div class="table-responsive col-lg-6 m-lg-auto">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col" class=" text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td class="text-end">
          <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-primary"><span data-feather="eye" class="align-text-bottom"></span></a>
          <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit" class="align-text-bottom"></span></a>
          <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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