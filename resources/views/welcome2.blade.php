<!DOCTYPE HTML>
<!--
    Hielo by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>SEDAPEN BPJS Kesehatan</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{ asset('ui/assets/css/main.css') }}"/>
</head>
<body>

<!-- Header -->
<header id="header" class="alt">
    <a href="#menu" class="linkmenu" style="font-size: 25px">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/admin') }}">MASUK</a></li>
        <li><a href="{{ url('/faq') }}">QnA</a></li>
    </ul>
</nav>

<!-- Banner -->
<section class="banner" style="height: 85vh">
    <article>
        <img src="{{ asset('ui/images/logobpjs.jpg') }}" alt=""/>
        <div class="inner">
        </div>
    </article>
    <article>
        <img src="{{ asset('ui/images/bpjs1.jpg') }}" alt=""/>
        <div class="inner">
        </div>
    </article>
    <article>
        <img src="{{ asset('ui/images/bpjs2.jpg') }}" alt=""/>
        <div class="inner">
        </div>
    </article>
    <article>
        <img src="{{ asset('ui/images/bpjs3.jpg') }}" alt=""/>
        <div class="inner">
        </div>
    </article>
    <article>
        <img src="{{ asset('ui/images/bpjs4.jpg') }}" alt=""/>
        <div class="inner">
        </div>
    </article>
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">



        </div>
    </div>
</section>

<!-- Two -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <header class="align-center">
            <p class="special">Badan Penyelenggara Jaminan Sosial Kesehatan</p>
            <h2>SEDAPEN</h2>
        </header>
        <div class="gallery">
            @foreach($images as $item)
                <div>
                    <div class="image fit">
                        <a href="#"><img src="{{ asset(config('variables.promotional_images.public').$item->image) }}" alt=""/></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Footer -->
<footer id="footer">
    <div class="copyright">
        &copy; BPJS. All rights reserved.
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('ui/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('ui/assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('ui/assets/js/skel.min.js') }}"></script>
<script src="{{ asset('ui/assets/js/util.js') }}"></script>
<script src="{{ asset('ui/assets/js/main.js') }}"></script>

</body>
</html>
