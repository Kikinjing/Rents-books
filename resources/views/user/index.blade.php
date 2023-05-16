@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
<h1>Hi! welcomeback</h1>
@if (Session::get('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
<div class="row mt-4 ms-5" style="display:flex; flex-wrap:wrap;">
@foreach ($data as $book)
<div class="col-lg-4 mb-3" style="margin-top: 30px; width:25%;">
<div class="card" style="padding-bottom:20px;width: 26.5rem; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
    <img src="{{ asset("assets/images/cover-book/". $book->cover ) }}" class="card-img-top" alt="..." style="min-height: 400px;max-height:400px; width:100%; object-fit:cover;">
    <div class="card-body">
      <h2 class="card-title"><b></b></h2>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">Reading</a>
    </div>
  </div>
</div>

{{-- @foreach ($book as $item)
    <p>{{$item->title}}</p>
    <p>{{$item->writer}}</p>
@endforeach --}}

    

@endforeach
</div>
<br>
@endsection