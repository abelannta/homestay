<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Prototype Homestay</title>
	<link rel="icon" type="image/x-icon" href="#" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="/css/getstarted/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">Selamat Datang</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang Kami</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#project">List</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Kontak Kami</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('logout'); ?>">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="masthead">
		<div class="container d-flex h-100 align-items-center">
			<div class="mx-auto text-center">
				<h1 class="mx-auto my-0 text-uppercase">Homestay</h1>
				<h2 class="text-white-50 mx-auto mt-2 mb-5">Pengalaman Penginapan yang tak anda temui di tempat lain.</h2>
				<a class="btn btn-primary js-scroll-trigger" href="#about">Ayo Jelajahi</a>
			</div>
		</div>
	</header>
	<!-- About-->
	<section class="about-section text-center" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2 class="text-white mb-4">Didesain untuk kenyamanan anda</h2>
					<p class="text-white-50">
						Arsitek kami mendesain homestay sedemikian rupa yang membuat para tamu yang tinggal menikmati kenyamanan dalam ruangan.
						Nikmati waktu berlibur anda atau istirahat selepas dalam perjalanan di sini.<br>
						<br>
						<a class="btn btn-primary js-scroll-trigger" href="#project">Next</a>
					</p>
				</div>
			</div>
			<img class="img-fluid" src="\img\Bed-PNG-File.png" alt="" />
		</div>
	</section>
	<!-- Projects-->
	<section class="projects-section bg-light" id="project">
		<div class="container">
			<!-- Featured Project Row-->
			<div class="row align-items-center no-gutters mb-4 mb-lg-5">
				<div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="/img/getstarted/bg-masthead.jpg" alt="" /></div>
				<div class="col-xl-4 col-lg-5">
					<div class="featured-text text-center text-lg-left">
						<h4>Area Lingkungan yang Senyap</h4>
						<p class="text-black-50 mb-0">Kami melakukan berbagai riset dalam pemilihan letak homestay.Tempat yang senyap dan jauh dari
							keramaian merupakan pilihan yang cocok agar customer dapat beristirahat dengan tenang.</p>
					</div>
				</div>
			</div>
			<!-- Project One Row-->
			<div class="row justify-content-center no-gutters mb-5 mb-lg-0 zoom">
				<div class="col-lg-6"><img class="img-fluid" src="/img/getstarted/Suhat.jpg" alt=""></div>
				<div class="col-lg-6">
					<div class="bg-black text-center h-100 project">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-center text-lg-left">
								<h4 class="text-white">Soekarno Hatta Indah Kost & Homestay</h4>
								<p class="mb-0 text-white-50"> Jalan utama yang menjadi kawasan utama yang menghubungkan Kota Malang dengan Kota Batu.Nikmati keindahan lokasi yang strategis,serta banyaknya jajanan malam.Suhat merupakan kawasan yang ramai sekali para anak muda.Sehingga jalanan akan terasa ramai dan terisi</p>
								<hr class="d-none d-lg-block mb-0 ml-0" />
								<br>
								<a href="/suhat">
									<button class="btn btn-primary" name="suhat">Lihat</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Project Two Row-->
			<div class="row justify-content-center no-gutters zoom">
				<div class="col-lg-6"><img class="img-fluid" src="/img/getstarted/Lawang.jpg" alt="" /></div>
				<div class="col-lg-6 order-lg-first">
					<div class="bg-black text-center h-100 project">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-center text-lg-left">
								<h4 class="text-white">Guest House Candi Panggung</h4>
								<p class="mb-0 text-white-50"> Lawang dikenal sebagai kota peristirahatan sejak zaman penjajahan Belanda. Karena itu tidak mengherankan bila sampai saat ini masih banyak ditemui bangunan kuno bergaya Belanda di Lawang.Merupakan perbatasan kota malang.Cocok bagi anda yang ingin segera beristirahat setelah sampai di kabupaten malang.</p>
								<hr class="d-none d-lg-block mb-0 ml-0" />
								<br>
								<a href="/candi">
									<button class="btn btn-primary" name="candi">Lihat</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	</section>
	<!-- Signup-->
	<section class="signup-section" id="signup">

		<!-- Contact-->
		<section class="contact-section bg-black">
			<div class="container">
				<div class="row">
					<div class="col-md-4 mb-3 mb-md-0">
						<div class="card py-4 h-100">
							<div class="card-body text-center">
								<i class="fas fa-map-marked-alt text-primary mb-2"></i>
								<h4 class="text-uppercase m-0">Alamat</h4>
								<hr class="my-4" />
								<div class="small text-black-50">Jl.Suhat Malang,Jawa Timur</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-3 mb-md-0">
						<div class="card py-4 h-100">
							<div class="card-body text-center">
								<i class="fas fa-envelope text-primary mb-2"></i>
								<h4 class="text-uppercase m-0">Email</h4>
								<hr class="my-4" />
								<div class="small text-black-50"><a href="#!">contoh@gmail.com</a></div>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-3 mb-md-0">
						<div class="card py-4 h-100">
							<div class="card-body text-center">
								<i class="fas fa-mobile-alt text-primary mb-2"></i>
								<h4 class="text-uppercase m-0">Telepon</h4>
								<hr class="my-4" />
								<div class="small text-black-50">+62 8123456789</div>
							</div>
						</div>
					</div>
				</div>
				<div class="social d-flex justify-content-center">
					<a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
					<a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</section>
		<!-- Footer-->
		<footer class="footer bg-black small text-center text-white-50">
			<div class="container">Copyright © Homestay 2020</div>
		</footer>
		<!-- Bootstrap core JS-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
		<!-- Third party plugin JS-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<!-- Core theme JS-->
		<script src="/js/getstarted/scripts.js"></script>
</body>

</html>