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
					<li><a href="{{ url('/qna') }}">QnA</a></li>
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

							<div class="question"><p><b>Bagaimana alur pengisian form data satker?</b><br>1. Pilihlah berkas excel yang sesuai dengan mutasi anda.</br>2. Unduh berkas</br>3. Isi form data tersebut sesuai dengan ketentuan/tata cara pengisian.<br>4. Simpan berkas dengan format "satker_mutasi".</br>5. Unggah file tersebut dalam bentuk excel.</p>
							</div>

							<div class="question"><p><b>Bagaimana jika file yang saya upload lebih dari satu?</b><br>Anda bisa mengunggahnya dalam bentuk ZIP ataupun RAR.</br></p>
							</div>

							<div class="question"><p><b>Apakah saya harus mendownload terlebih dahulu, file excel tersebut untuk mengisi data?</b><br>Iya, dan untuk informasi lebih lanjut akan ada ketentuan di halaman exce sheet pertama.</br></p>
							</div>

							<div class="question"><p><b>Bagaimana apabila ada data yang belum terisi lengkap?</b><br>Akan ada pemberitahuan yang dikirimkan ke email pengguna/satker.</br></p>
							</div>

							<div class="question"><p><b>Bagaimana pengguna bisa tahu apabila berkasnya sedang diproses?</b><br>Akan ada pemberitahuan yang dikirimkan ke email pengguna apabila berkasnya sedang diproses.</p>
							</div>

							<div class="question"><p><b>Bagaimana jika data yang sudah terlanjur saya unggah ternyata ada kesalahan yang perlu direvisi?</b><br>1. Sunting/ubah kolom yang hendak direvisi.<br>2. Beri catatan di bawah form data.<br>
							<img src="ui/images/qna2.png" alt="" /><br>3. Ubah nama berkas menjadi "[REVISI] NamaSatker_KodeMutasi". Contoh : <img src="images/qna1.png" alt="" /></p>


							</div>


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
