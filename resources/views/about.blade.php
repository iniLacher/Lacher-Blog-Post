
@extends('layouts.main')

@section('container')
  <h3>Nama : {{ $name }}</h3>
  <h3>Email : {{ $email }}</h3>
  <img class="rounded-circle" src="img/{{ $img }}" alt="lacher" width="100">  
@endsection
