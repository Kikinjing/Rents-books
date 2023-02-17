<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/register.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="fw-bold"><center>Register</center></h1>
          <form action="{{ route('storeRegister') }}" method="post">
            @csrf
              <label>Nama:</label>
              <br>
              <input type="text" name="name" placeholder="Masukkan Nama" autocomplete="off">
              <br>
              <label>Email:</label>
              <br>
              <input type="email" name="email" placeholder="Masukkan Email" autocomplete="off">
              <br>
              <label>Password:</label>
              <br>
              <input type="password" name="password" placeholder="Masukkan Password">
              <br>
              <label>No HP:</label>
              <br>
              <input type="char" name="phone" maxlength="12" placeholder="+62..." autocomplete="off">
              <br>
              <label>Alamat:</label>
              <br>
              <input type="text" name="address" placeholder="Masukkan Alamat" autocomplete="off">
              <br>
              <button>Register</button>
              <p> Sudah punya akun?
                <a href="{{ route('indexLogin') }}">Login di sini</a>
              </p>
          </form>
      </div>
</body>
</html>