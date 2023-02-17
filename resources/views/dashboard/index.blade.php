@extends('layouts.main')

@section('title', 'Dashboard')
    

@section('content')
<h1 class="ms-3 my-3">Hallo, Admin</h1>
<div class="row me-1 ms-1 my-5">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-journals"></i>
                </div>

                <div class="col-lg-6 d-flex justify-content-center flex-column align-items-end">
                    <div class="card-desc">
                        Books
                    </div>
                    <div class="card-count">
                        2  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-tags-fill"></i>
                </div>

                <div class="col-lg-6 d-flex justify-content-center flex-column align-items-end">
                    <div class="card-desc">
                        Category
                    </div>
                    <div class="card-count">
                        12
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-person-circle"></i>
                </div>

                <div class="col-lg-6 d-flex justify-content-center flex-column align-items-end">
                    <div class="card-desc">
                        User
                    </div>
                    <div class="card-count">
                        {{ $data }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection