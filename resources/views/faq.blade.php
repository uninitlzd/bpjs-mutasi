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

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
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

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h2>Anda Bertanya Kami Menjawab</h2>
        </div>

        <div class="mt-5 col-md-12">

            @foreach($qna as $item)
                <div class="card col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->pertanyaan }}</h5>
                        <hr>
                        <small>Jawaban</small>
                        <p class="card-text">{{ $item->jawaban }}</p>
                    </div>
                </div>
            @endforeach

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
