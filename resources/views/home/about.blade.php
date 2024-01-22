@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead">{{ $viewData["description"] }}</p>
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
      <img src="{{ asset('/img/chris.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead">{{ $viewData["author"] }}</p>
    </div>
  </div>
</div>
@endsection
