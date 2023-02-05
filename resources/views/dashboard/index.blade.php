@extends('layouts.dashboard')

@section('content')
  <h1 class="fw-bold">Hi, Welcome again {{ Auth::user()->name }} </h1>
@endsection