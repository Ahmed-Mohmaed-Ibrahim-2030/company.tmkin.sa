<?php
$index="portfolio";

?>
@extends('layouts.tmkinApp')
@section('content')
    <section id="portfolio" class="portfolio mt-5" data-aos="fade-up">

        <div class="container">

            <div class="section-header">
                <h2>مشروعات تمكين   </h2>
                <p>كل ما تم إنجازة في من اعمل هو أولا بتوفيق الله عز وجل ثم بإسهاماتكم   </p>
            </div>

        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                <ul class="portfolio-flters" style="direction: rtl">
                    <li data-filter="*" class="filter-active">كل الأعمال </li>
                    <li data-filter=".filter-app">التشييد والبناء  </li>
                    <li data-filter=".filter-product">استصلاح الأراضي  </li>
                    <li data-filter=".filter-branding">اعمال الطرق  </li>
                    <li data-filter=".filter-books">التطوير العقاري </li>
                </ul><!-- End Portfolio Filters -->

                <div class="row g-0 portfolio-container justify-end" style="direction: rtl !important;">

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/app.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <a href="assets/img/portfolio/app.jpg" title="مركز الأعمال الرقمي" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            <h4>مركز الأعمال الرقمي</h4>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="assets/img/portfolio/app1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>ضاحية الرياض </h4>
                            <a href="assets/img/portfolio/app1.png" title="ضاحية الرياض" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>سلسلة فنادق </h4>
                            <a href="assets/img/portfolio/app2.jpg" title="سلسلة فنادق" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>أبراج واجهة الرياض </h4>
                            <a href="assets/img/portfolio/app3.jpg" title="أبراج واجهة الرياض" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                   {{-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 1</h4>
                            <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 2</h4>
                            <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>  <!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
                        <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
                        <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
                        <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 3</h4>
                            <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->
--}}
                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->
@stop




