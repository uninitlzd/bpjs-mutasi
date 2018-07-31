<!DOCTYPE HTML>
<html>
	<head>
		<title>SEDAPEN BPJS Kesehatan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="ui/assets/css/main.css" />
		<style>
.question {
    background-color: grey;
    font-size: 22px;
    color: white;
    padding: 0px;
}
.menu {
	font-size: 20px;
}
</style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="{{ url('/') }}">SEDAPEN <span>BPJS Kesehatan</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/faq') }}">QnA</a></li>
					<li><a href="{{ url('/admin') }}">Form</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>SEDAPEN</p>
						<h2>ANDA BERTANYA KAMI MENJAWAB</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>SEDAPEN</p>
								<h2>QnA</h2>
							</header>
							@foreach($qna as $item)

							<div class="question"><r><b>{{ $item->pertanyaan }}</b><br>{{ $item->jawaban }}</p>
							</div>
								@endforeach
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="ui/assets/js/jquery.min.js"></script>
			<script src="ui/assets/js/jquery.scrollex.min.js"></script>
			<script src="ui/assets/js/skel.min.js"></script>
			<script src="ui/assets/js/util.js"></script>
			<script src="ui/assets/js/main.js"></script>

	</body>
</html>
