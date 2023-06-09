@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
  <div class="col-5">
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>  
    @endif
    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>  
    @endif
    <main class="form-signin w-100 m-auto">
      <form action="/login" method="post">
        @csrf
        <div class="text-center">
          <img class="mb-4 " src="img/light.png" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        </div>
    
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message  }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Dont have accunt? <a href="/register" class="text-primary">
      Register Now!</a></small>
    </main>
  </div>
</div>
@endsection