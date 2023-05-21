@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
  <div class="col-5">
    <main class="form-registration w-100 m-auto">
      <form action="/register" method="post" >
        @csrf
        <div class="text-center">
          <img class="mb-4 " src="img/light.png" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Please Register</h1>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name')is-invalid @enderror" name="name" id="Name" placeholder="Name..." required value="{{ old('name') }}">
          <label for="Name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control rounded-0 @error('username')is-invalid @enderror" name="username" id="username" placeholder="Username..." required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control rounded-0 @error('email')is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required  value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Have account? <a href="/login" class="text-primary">
      Login Now!</a></small>
    </main>
  </div>
</div>
@endsection