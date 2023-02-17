@extends('layouts.main')

@section('title', 'user')

@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr  style="border: solid 1px #000;">
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">address</th>
                    <th scope="col">Action</th>
                </tr>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $dt)
                    <tr style="border: solid 1px #000">

                        <th>{{ $i++ }}</th>
                        <td>{{ $dt->name }}</td>
                        <td>{{ $dt->email }}</td>
                        <td>{{ $dt->phone }}</td>
                        <td>{{ $dt->address }}</td>
                        <td>
                                <form action="{{ route('deleteUser', $dt->id) }}" method="post">
                                    @csrf
                                    <a href="{{ route('editUser' , $dt->id) }}" class="btn btn-success"><i class="bi bi-pen-fill"></i></a>
                                    <button class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus?')"><i class="bi bi-trash3-fill"></i></button>
                                </form>
                            </td>
                            
                            
                        </td>

                    </tr>
                @endforeach
                </thead>
            </tbody>

    </div>

@endsection
