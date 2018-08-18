<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sedapen BPJS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom: 1px solid black">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('ui/images/logo-bpjs-horizontal.png') }}" alt="" height="30px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Homepage <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/faq') }}">Q&A</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">
                    Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">
                    Register
                </a>
            </li>
        </ul>
    </div>
</nav>


<div class="row" style="">
    <div class="col-md-1 my-auto">

    </div>

    <div class="col-md-3 my-auto">
        <h2>SEDAPEN</h2>
        <h3>Sistem Elektronik Data Penyelenggara Negara</h3>
    </div>

    <div class="col-md-8 my-auto">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('ui/images/bpjs1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('ui/images/bpjs2.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('ui/images/bpjs3.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('ui/images/bpjs4.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('ui/images/bpjs5.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('ui/images/bpjs6.jpg') }}" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row text-center mb-5">
        <div class="col-md-12 mx-auto text-center mb-5">
            <h3>Berita</h3>
        </div>


            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <div class="col-md-12">
                                <img src="{{ asset(config('variables.news.public').$news->image) }}" alt=""
                                     style="width: 100%"/>
                            </div>
                            <div class="col-md-12">
                                <header class="text-center mt-3">
                                    <h4>{{ $news->title }}</h4>
                                </header>
                                <p>{{ $news->content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
