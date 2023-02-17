@extends('layouts.main')

@section('title', 'rent-log')
    

@section('content')
<form action="{{ route('update', $data->id) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
    </div>
    <div class="mb-3">
        <label class for="email" class="form-label">Email Address:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}" >
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">NO hp:</label>
        <input type="text" class="form-control" name="phone" id="phone" value="{{ $data->phone }}" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" id="address" value="{{ $data->address }}" >
    </div>
    <div>
        <button class="btn btn-info">submit</button>
    </div>
</form>
@endsection
