<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rents Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/buku.png') }}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Rents-Books
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Horor</a></li>
                            <li><a class="dropdown-item" href="#">Comedy</a></li>
                            <li><a class="dropdown-item" href="#">Novel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        @auth
                            <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link active btn btn-outline-danger">Log out</button>
                            </form>
                        @else
                        <a class="nav-link btn" href="{{ route('indexLogin') }}">Login</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->

    {{-- carousels --}}
    <div id="carouselExampleInterval" class="carousel slide " style="max-height: 200px; max-width:100%;"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://tse3.mm.bing.net/th?id=OIP.GN9uWSP6lLm70d67P-QxawHaD1&pid=Api&P=0"
                    class="d-block w-100" alt="..." style="max-height: 200px">
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <img src="https://tse1.mm.bing.net/th?id=OIP.36BqyCtw-QA3kIS_fXSE7AHaEK&pid=Api&P=0"
                    class="d-block w-100" alt="..." style="max-height: 200px">
            </div>

            <div class="carousel-item">
                <img src="https://tse2.mm.bing.net/th?id=OIP.pmOKvMNANBioG1uomWgj1QHaD6&pid=Api&P=0"
                    class="d-block w-100" alt="..." style="max-height: 200px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- end carousels --}}

    {{-- jumbotron --}}
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h2>Rents-Books</h2>
                <a href="{{ route('indexRegister') }}" class="btn btn-outline-success">Let's Register Now!</a>
            </div>
            <div class="col-8">
                <h6>Rent-Books is a place to borrow books for reading fans. 
                    Rent-Books is very useful because there are many books
                     such as fiction, novels, history, horror and others. 
                     If you are interested, let's register now Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quae fuga quidem beatae. Doloremque ex necessitatibus suscipit recusandae, consequatur nulla tempora eum, consequuntur harum eos laboriosam animi placeat eaque accusamus?
                </h6>
            </div>
        </div>
    </div>
    </div>
    {{-- end jummbotron --}}

    {{-- card popular book --}}
    <section class="bg-danger pt-2">
        <div class="container ms-5 my-5">
            <div class="row my-4 ms-5 text-center">
                <h4 class="pb-3 pe-5" style="color: #FFF; font-weight: 600;"> Top 3 Books </h4>
                <hr class="solid mb-3">
            </div>
            <div class="row mb-3 ps-5">
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://tse1.mm.bing.net/th?id=OIP.ZJ98NTcKqthTtALjpi4yBwHaK2&pid=Api&P=0"
                            class="card-img-top" alt="..." style="object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 600;">Pravana : A Graphic Novel</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-outline-danger w-100">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://tse3.mm.bing.net/th?id=OIP.qUVSREKBkqFly3XwgYDFegHaLC&pid=Api&P=0"
                            class="card-img-top" alt="..." style="object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 600;">School horor</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-outline-danger w-100">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://tse3.mm.bing.net/th?id=OIP.brRxGxTc7wk571O4hnU0vwHaLH&pid=Api&P=0"
                            class="card-img-top" alt="..." style="object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 600;">The invansion</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-outline-danger w-100">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    </div>
    {{-- akhir card --}}

    {{-- message --}}
    
    <div class="container">
        <div class="row text-center">
            <h2>Message</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{ route('storeMessage') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap :</label>
                            <input type="text" class="form-control" name="name" placeholder="input your name">
                        </div>
                        <label for="message" class="form-label">Message :</label>
                        <textarea name="message" class="form-control" placeholder="Input Message..">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Send</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
    {{-- end message --}}

    {{-- footer --}}
    <footer class="bg-danger text-center" style="height: 40px;">
        <p class="pt-2" style="color: white;"> &copy; 2023 by <a style="text-decoration: none; color: #fff;" href="https://github.com/alezafazriliyadisudrajat"
                style="text-decoration: none; color: white;" target="_blank">
                 Aleza
            </a>
        </p>
    </footer>
    {{-- end footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>