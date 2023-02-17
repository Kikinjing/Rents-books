<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body>
  @if(session('loginError'))
        {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
        <div class="alert alert-danger">
          <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
        </div>
        @endif
    <div class="container">          
    
        <h1>Login</h1>
        
        {{-- @if ($message = Session::get('loginError'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
        @endif --}}
          <form action="{{route('storeLogin')}}" method="post"> 
            @csrf
           
              <label>Nama :</label>
              <br>
              <input type="text" name="name" placeholder="Masukkan Nama Lengkap" autocomplete="off">
              <br>
              <label>Email :</label>
              <br>
              <input type="email" name="email" placeholder="Masukkan Email" autocomplete="off">
              <br>
              <label>Password</label>
              <br>
              <input type="password" name="password" placeholder="Masukkan Password">
              <br>
              <button type="submit">submit</button>
              <p> Belum punya akun?
                <a href="{{ route('indexRegister') }}">Register</a>
              </p>
          </form>
          
      </div>
</body>
</html>