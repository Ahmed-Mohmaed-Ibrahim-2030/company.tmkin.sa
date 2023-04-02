 <?php
$index = $index ?? "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>شركة تمكين الأوقاف</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
	href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
	rel="stylesheet">
<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
	rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css"
	rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

{{--
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
	crossorigin="anonymous" referrerpolicy="no-referrer" />
--}}
<script src="https://kit.fontawesome.com/bcb48d13e4.js"
	crossorigin="anonymous"></script>
<!-- Variables CSS Files. Uncomment your preferred color scheme -->
<link href="assets/css/variables.css" rel="stylesheet">
<!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
<!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

<!-- Template Main CSS File -->
<link href="assets/css/main.css" rel="stylesheet">


<!-- =======================================================
    * Template Name: HeroBiz - v2.3.1
    * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
@yield('styles')
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top" data-scrollto-offset="0">
		<div
			class="container-fluid d-flex align-items-center justify-content-between"
			style="direction: rtl">

			<a href="{{route('home')}}"
				class="logo d-flex align-items-center scrollto me-4  pb-3"> <!-- Uncomment the line below if you also wish to use an image logo -->
				<img src="{{asset('assets/img/logo.png')}}"
				style="height: 100px !important;" alt="شعار تمكين "> {{--
				<h1>
					تمكين <span>.</span>
				</h1>--}}
			</a>

			<nav id="navbar" class="navbar">
				<ul class="fw-bold">

					<li><a class="fw-bold nav-link scrollto" href="{{$index=="
						about"?"#about":route('about')."#about"}}" class="fw-bold "> عن
							الشركة </a></li>

					<li><a class="fw-bold nav-link scrollto " href="{{$index=="services"?"#services":route('services')."#services"}}">مجالات
							الشركة</a></li>
					<li><a class="fw-bold nav-link scrollto" href="{{$index=="portfolio"?"#portfolio":route('portfolio')."#portfolio"}}">مشاريعنا
					</a></li>
					<li><a class="fw-bold nav-link scrollto" href="">أعمالنا المستقبلية
					</a></li> {{--
					<li><a class="fw-bold nav-link scrollto" href="">انضم الي فريقنا </a></li>--}}

				</ul>
				<i class="bi bi-list mobile-nav-toggle d-none"
					style="color: #000 !important"></i>
			</nav>
			<!-- .navbar -->

			<a class="btn-getstarted scrollto me-4" href="https://tmkin.sa"
				style="background: RGB(136, 133, 128);"> <span
				class="d-none d-md-inline"
				style="color: var(--color-white) !important"> منصة </span> تمكين
			</a>

		</div>
	</header>
	<!-- End Header -->


	<main id="main">@yield('content')</main>


	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer" style="direction: rtl">

		<div class="footer-content">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6">
						<div class="footer-info">
							<h3>شركة تمكين </h3>
							<p  style="direction:rtl">
								مكة المكرمة ,المدينة المنورة ,الرياض ,جدة,الخبر
								<br> المملكة العربية السعودية <br>
								<br> <strong>رقم الجوال :</strong>966555320076+<br>
								 <strong>البريد
									الإلكتروني :</strong>co@tmkin.sa<br>
							</p>
						</div>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>روابط مهمة</h4>
						<ul>
							<li><i class="bi bi-chevron-left"></i> <a href="{{route('home')}}"> الرئيسية</a></li>
							<li><i class="bi bi-chevron-left"></i> <a href="{{route('about')}}"> عن الشركة</a></li>

							<li><i class="bi bi-chevron-left"></i> <a href="{{route('add-new-partner')}}"> بوابة الشركاء </a></li>
							<li><i class="bi bi-chevron-left"></i> <a
								class=" position-relative scrollto ps-3" href="">انضم الي فريقنا
									<span
									class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-danger "
									style="color: var(--color-white) !important;"> قريبا <span
										class="visually-hidden">unread messages</span>
								</span>
							</a></li> {{--
							<li><i class="bi bi-chevron-left"></i> <a href="#"></a></li>--}}
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>طلب خدمة  </h4>
						<ul>
							<li><i class="bi bi-chevron-left"></i> <a href="#"> عقارات


									</a></li>
							<li><i class="bi bi-chevron-left"></i> <a href="#"> إنشاءات  </a></li>
							<li><i class="bi bi-chevron-left"></i> <a href="#">خدمات </a></li>

						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-newsletter">
						<h4>انضم الينا</h4>
						<p>كن معنا وتعرف على كل جديد</p>
						<form action="" method="post" style="direction: ltr">
							<input type="email" name="email" class="btn btn-outline-btn"><input type="submit"
								value="نشرة تمكين"
								style="background-color: var(--color-btn) !important; color: var(--color-white) !important;">
						</form>

					</div>

				</div>
			</div>
		</div>

		<div class="footer-legal text-center">
			<div
				class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

				<div
					class="d-flex flex-column align-items-center align-items-lg-start">
					<div class="copyright"
						style="color: var(--color-white) !important;">
						جميع الحقوق محفوظة &copy; <strong><span
							style="color: var(--color-white) !important;">لشركة تمكين
								الأوقاف</span></strong> .
					</div>
					{{--
					<div class="credits">
						--}} {{--
						<!-- All the links in the footer should remain intact. -->
						--}} {{--
						<!-- You can delete the links only if you purchased the pro version. -->
						--}} {{--
						<!-- Licensing information: https://bootstrapmade.com/license/ -->
						--}} {{--
						<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
						--}} {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
						{{--
					</div>
					--}}
				</div>

				<div class="social-links order-first order-lg-last mb-3 mb-lg-0">
					<a href="#" class="twitter"><i class="bi bi-twitter"></i></a> <a
						href="#" class="facebook"><i class="bi bi-facebook"></i></a> <a
						href="#" class="instagram"><i class="bi bi-instagram"></i></a> <a
						href="#" class="google-plus"><i class="bi bi-skype"></i></a> <a
						href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
				</div>

			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<a href="#"
		class="scroll-top d-flex align-items-center justify-content-center"><i
		class="bi bi-arrow-up-short"></i></a>

	<!-- <div id="preloader"></div> -->

	<!-- Vendor JS Files -->
	@yield('scripts')
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>
