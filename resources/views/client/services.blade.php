<?php

$index="services";

?>
@extends('layouts.tmkinApp')
@section('content')
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="pt-5">خدماتنا </h2>
                <p>نسعى لتقديم خدمات متنوعة من اجل رفع مستوى كفاءة الأوقاف </p>
            </div>

            <div class="row gy-5" style="direction: rtl">
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/real-estate.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-house-fill"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>التطوير العقاري  </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/paying.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>الأصول العقارية </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/real-estate-mangement.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>إدارة الأملاك</h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

{{--                إشاءات --}}

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item ">
                        <div class="img">
                            <img src="{{asset('assets/img/services/building.jpg')}}" class="img-fluid" alt="">
                        </div>


                        <div class="details position-relative ">
                            <div class="icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>التشييد والبناء </h3>
                                <ul style="direction: rtl; list-style: none ">
                                    <li class="service-list" >
                                        <i style="" class="bi bi-star"></i>
                                     التطوير العقاري
                                    </li>
                                    <li class="service-list" >
                                        <i style="" class="bi bi-star"></i>
                                   شراء
                                    </li>   <li class="service-list" >
                                        <i style="" class="bi bi-star"></i>
                                   بيع
                                    </li>
                                    </li>
                                    <li class="service-list" >
                                        <i style="" class="bi bi-star"></i>
                                   استثمار
                                    </li>
                                    <li class="service-list" >
                                        <i style="" class="bi bi-star"></i>
                                   استصلاح الأراضي
                                    </li>
                                    <li >
                                        <a href="{{route('service_request')}}" class="btn btn-outline-warning my-2">أطلب الخدمة
                                            <i class="bi bi-arrow-left " style="color: var(--color-yellow) !important;"></i></a>
                                    </li>

                                </ul>
                            </a>


                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/tarmim.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>التشطيب والترميم  </h3>
                            </a>

                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/destroy.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-flower1"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>الهدم والإزالة والحفريات</h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/charge.jpg')}}" class="img-fluid w-100" style="height: 276.797px" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-truck-flatbed"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>الشحن والتفريغ    </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
{{--                --}}

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-item">
                        <div class="img">
                            <img  src="{{asset('assets/img/services/maintan.jpg')}}" class="img-fluid  w-100" style="height:276.797px " alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>الصيانة </h3>
                            </a>

                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/land.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-flower1"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>استصلاح الأراضي  </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/furnture.jpg')}}" class="img-fluid w-100" style="height: 276.797px" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
{{--                                <i class="bi  bi-flower1>--}}
                                <i class="bi  bi-flower1"></i>

                            </div>
                            <a href="#" class="stretched-link">
                                <h3>التجهيز والتأثيث </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/roads.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>أعمال الطرق    </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/stores.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-table"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>التخزين   </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/frieght.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-airplane"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>نقل البضائع     </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->



                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/taskhel.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>التشغيل</h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                    <div class="service-item">
                        <div class="img">
                            <img src="{{asset('assets/img/services/clean.jpg')}}" class="img-fluid w-100" style="height: 276.797px" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-trash2"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>أعمال النظافة </h3>
                            </a>

                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Services Section -->

@stop
