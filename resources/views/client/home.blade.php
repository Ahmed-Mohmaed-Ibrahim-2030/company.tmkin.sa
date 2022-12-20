
@extends('layouts.tmkinApp')
@section('content')
    <section id="hero-animated" class="hero-animated d-flex align-items-center ">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="assets/img/main.svg" class="img-fluid animated">
{{--            <h2>أهلا بكم في <span>شركة تمكين الأوقاف</span></h2>--}}
            <h2 style="color: var(--color-font) !important">أهلا بكم في شركة تمكين الأوقاف</h2>
{{--            <p>.تمكين الأوقاف الخيار الأفضل لأي وقف معطل </p>--}}
{{--            <div class="d-flex">--}}
{{--                <a href="<<#about>>" class="btn-get-started scrollto">خدمات تمكين  </a>--}}
{{--                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>شاهد تمكين  </span></a>--}}
{{--            </div>--}}
        </div>
    </section>
    <section id="services" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="">مجالات أعمال الشركة</h2>
                <p>نسعى لتقديم خدمات متنوعة من اجل كفاءة أفضل  </p>
            </div>

            <div >
{{--                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">--}}
{{--                    <div class="service-item">--}}
{{--                        <div class="img">--}}
{{--                            <img src="{{asset('assets/img/services/real-estate.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="details position-relative">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="bi bi-house-fill"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="stretched-link">--}}
{{--                                <h3>عقارات</h3>--}}
{{--                            </a>--}}

{{--                            <a href="#" class="stretched-link"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End Service Item -->--}}
{{--                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">--}}
{{--                    <div class="service-item ">--}}
{{--                        <div class="img">--}}
{{--                            <img src="{{asset('assets/img/services/building.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </div>--}}


{{--                        <div class="details position-relative ">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="bi bi-building"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="stretched-link">--}}
{{--                                <h3>الإنشاءات</h3>--}}
{{--                            </a>--}}


{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End Service Item -->--}}
{{--                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">--}}
{{--                    <div class="service-item">--}}
{{--                        <div class="img">--}}
{{--                            <img src="{{asset('assets/img/services/taskhel.jpg')}}" class="img-fluid" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="details position-relative">--}}
{{--                            <div class="icon">--}}
{{--                                <i class="bi bi-chat-square-text"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="stretched-link">--}}
{{--                                <h3>الخدمات </h3>--}}
{{--                            </a>--}}

{{--                            <a href="#" class="stretched-link"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--         iv><!-- End Service Item -->--}}
             <div class="card-group">
                    <div style="direction: rtl" class="card  me-1" >
                        <img src="{{asset('assets/img/services/building.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">إنشاءات </h5>
                            {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                التشييد والبناء </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                التشطيب والترميم </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                               الديكورات</li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                الهدم والإزالة والحفريات  </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                أعمال الطرق  </li>

                        </ul>
                        <div class="card-body text-center">
                            {{--                            <a href="#" class="card-link">'gf '</a>--}}
                            <a href="{{route('service_request')}}" class="btn btn-outline-btn " >لطلب خدمة</a>
                        </div>
                    </div>


                    <div style="direction: rtl" class="card  " >
                        <img src="{{asset('assets/img/services/real-estate.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">عقارات </h5>
                            {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                التطوير العقاري</li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                شراء</li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                بيع</li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                استثمار</li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                استصلاح الأراضي</li>

                        </ul>
                        <div class="card-body text-center ">
                            {{--                            <a href="{{route('service_request}}" class="card-link">'gf '</a>--}}
                            <a href="{{route('service_request')}}" class="btn btn-outline-btn " >لطلب خدمة</a>
                        </div>
                    </div>


                    <div style="direction: rtl" class="card  ms-1" >
                        <img src="{{asset('assets/img/services/maintan.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">خدمات  </h5>
                            {{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        </div>
                        <ul class="list-group list-group-flush" style="height: 204px; overflow-y: scroll">
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                الصيانة </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                               التجهيز والتأثيث</li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                الشحن والتفريغ </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                               التخزين  </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                نقل البضائع </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                تشغيل  </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                إدراة الأملاك </li>
                            <li class="list-group-item service-list">
                                <i style="" class="bi bi-star-fill"></i>
                                أعمال النظافة  </li>


                        </ul>
                        <div class="card-body text-center content">
                            {{--                            <a href="{{route('service_request}}" class="card-link">'gf '</a>--}}
{{--                            <a href="{{route('service_request}}" class="card-link">طلب الخدمة</a>--}}
                            <a href="{{route('service_request')}}" class="btn btn-outline-btn " >لطلب خدمة</a>
                        </div>
                    </div>
                </div><!-- End Service Item -->
            </div>
{{--            <div class="text-center p-3 ">--}}

{{--            <a href="{{route('services')}}" class="btn btn-outline-warning">عرض كل الخدمات</a>--}}
{{--            </div>--}}
        </div>
    </section>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="pt-3">شركة تمكين الأوقاف </h2>
                <p > .شركة خدمية تهتم بالأوقاف المعطلة والغير مستغلة وإدارة وتشغيل (منصة تمكين) المتخصصة في تأسيس وتأهيل وتنمية واستدامة الأوقاف</p>

            </div>

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200" style="direction: rtl">

                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="https://tmkin.sa/wp-content/uploads/2022/09/real-estate-pic.png" class="img-fluid" alt="">
                        {{--                        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">--}}
                    </div>
                </div>

                <div class="col-lg-7">
                    <h3 class="pt-0 pt-lg-5">

                    </h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li class="ps-5"><a class="nav-link active" data-bs-toggle="pill" href="#tab1">رؤيتنا </a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">
                                رسالتنا </a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">
                                طموحنا </a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab4">
                                الأهداف العامة  </a></li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">

                            <h4 class="h-4">الريادة في تمكين واستدامة القطاع الوقفي.</h4>

                            {{--                <div class="d-flex align-items-center mt-4">--}}
                            {{--                  <i class="bi bi-check2"></i>--}}
                            {{--                  <p>“إنها تعبر عن أهدافنا وآمالنا على المدى البعيد، وتستند إلى مكامن القوة والقدرات الفريدة لوطننا. وهي ترسم تطلعاتنا نحو مرحلة تنموية جديدة غايتها إنشاء مجتمع نابض بالحياة يستطيع فيه جميع المواطنين تحقيق أحلامهم وآمالهم وطموحاتهم في اقتصاد وطني مزدهر”.</p>--}}
                            {{--                </div>--}}
                            {{--                  <hr>--}}
                            {{--                <p>.ومساهمة في زيادة الناتج المحلي للقطاع غير الربحي، وتحقيق التطلعات لريادته، ونموه، واستدامته.</p>--}}

                            {{--  <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Incidunt non veritatis illum ea ut nisi</h4>
                              </div>
                              <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                              <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                              </div>
                              <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>
              --}}
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <h4>
                                الاستفادة من الأوقاف بجميع مجالاتها، لتحقيق النفع الأشمل منها للوطن والمواطن.
                            </h4>
                            {{--                <p class=""> تساقبل المنصة مبان، أراض، مزارع، أسواق، معارض، متاجر، صالات، مستودعات، فنادق، شقق مفروشة، أبراج، آبار، مصانع، كسارات، مطاعم. شركات عقارية. استراحات. محطات. محلات. بيوت. عمائر. مستشفيات. مراكز. مخططات. قصور. مجمعات. منتجعات. حدائق… هبات، أسهم، تبرعات عينية.</p>--}}

                            {{--                <div class="d-flex align-items-center mt-4">--}}
                            {{--                  <i class="bi bi-check2"></i>--}}
                            {{--                  <h4>التمكين العقاري</h4>--}}
                            {{--                </div>--}}
                            {{--                <p>بناء، تأهيل، استصلاح، تجهيز.</p>--}}

                            {{--                <div class="d-flex align-items-center mt-4">--}}
                            {{--                  <i class="bi bi-check2"></i>--}}
                            {{--                  <h4>--}}
                            {{--                      تملك الأصول</h4>--}}
                            {{--                </div>--}}
                            {{--                <p>شراء ، إنشاء متاجر، وكيانات، أسهم.</p>--}}

                            {{--                <div class="d-flex align-items-center mt-4">--}}
                            {{--                  <i class="bi bi-check2"></i>--}}
                            {{--                  <h4>--}}
                            {{--                      الاستثمار والاستدامة</h4>--}}
                            {{--                </div>--}}
                            {{--                <p>إدارة أملاك، تشغيل، دراسات، تمويل.</p>--}}
                            {{--                  <div class="d-flex align-items-center mt-4">--}}
                            {{--                  <i class="bi bi-check2"></i>--}}
                            {{--                  <h4>--}}
                            {{--                      دعم الأوقاف</h4>--}}
                            {{--                </div>--}}
                            {{--                <p>نظارة، صياغة وقفية، تأسيس وقف، لوائح وهيكلة.</p>--}}

                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3">

                            <h4 class="">تمكين الأوقاف وتحقيق استدامتها، والاستثمار الأمثل لها.</h4>





                        </div><!-- End Tab 3 Content -->
                        <div class="tab-pane fade show" id="tab4">

                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>
                                    بناء الأوقاف.</h4>
                            </div>


                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>تأهيل الأوقاف .</h4>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>	تنمية موارد الأوقاف.</h4>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>تقديم منتجات نوعية مبتكرة.</h4>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>	تعزيز جودة الحياة للمجتمع.</h4>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <i class="bi bi-check2"></i>
                                <h4>	المساهمة في خلق فرص عمل للمجتمع.</h4>
                            </div>



                        </div><!-- End Tab 4 Content -->

                    </div>

                </div>

            </div>

        </div>
    </section><!-- End AboutController Section -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up" style="direction: rtl">

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets/img/testimonials/king.jpg')}}" class="testimonial-img" alt="">
                            <h3 style="direction: rtl ; color: var(--color-white) !important;">الملك سلمان بن عبدالعزيز آل سعود</h3>
                            <h4 style="direction: rtl ; color: var(--color-white) !important;">خادم الحرمين الشريفين</h4>

                            <p style="direction: rtl ; color: var(--color-white) !important;">
                                <i class="bi bi-quote quote-icon-right"></i>
                                دولتكم تشهد حراكا تنمويا شاملا ومستداما وهي تسير في المرحلة الثانية من رؤية المملكة 2030، مستهدفة تطوير القطاعات الواعدة والجديدة ودعم المحتوى المحلي، وتسهيل بيئة الأعمال، وتمكين المواطن وإشراك القطاع الخاص بشكل أكبر، وزيادة فاعلية التنفيذ لتحقيق المزيد من النجاح والتقدم، وتلبية تطلعات وطموحات وطننا الغالي
                                <i class="bi bi-quote quote-icon-left"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="https://tmkin.sa/wp-content/uploads/2022/09/king-150x150.png" class="testimonial-img" alt="">
                            <h3 style="direction: rtl ; color: var(--color-white) !important;">صاحب السمو الملكي الأمير محمد بن سلمان بن عبدالعزيز</h3>
                            <h4 style="direction: rtl ; color: var(--color-white) !important;">ولي العهد</h4>

                            <p style="direction: rtl ; color: var(--color-white) !important;">
                                <i class="bi bi-quote quote-icon-right"></i>
                                سنفتح مجالا أرحب للقطاع الخاص ليكون شريكا، بتسهيل أعماله، وتشجيعه، لينمو ويكون واحدا من أكبر اقتصادات العالم، ويصبح محركا لتوظيف المواطنين، ومصدرا لتحقق الازدهار للوطن والرفاه للجميع. هذا الوعد يقوم على التعاون والشراكة في تحمل المسؤولية
                                <i class="bi bi-quote quote-icon-left"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

            {{--        <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->--}}

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->
    <section id="faq" class="faq">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row gy-4" style="direction: rtl">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

{{--                    <div class="content px-xl-5">--}}
{{--                        <h3>أسئلة شائعة <strong>الأسئلة </strong></h3>--}}
{{--                        <p>--}}
{{--                           بعض الأسئلة التي قد تتبادر الي أذهان السامعين عن شركة تمكين الأوقاف--}}
{{--                        </p>--}}
{{--                    </div>--}}

{{--                    <div class="accordion accordion-flush px-xl-5" id="faqlist">--}}

{{--                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <h3 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">--}}
{{--                                    <i class="bi bi-question-circle question-icon"></i>--}}
{{--                                   ماذا تقدم تمكين وبما تنفرد عن غيرها--}}
{{--                                </button>--}}
{{--                            </h3>--}}
{{--                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">--}}
{{--                                <div class="accordion-body">--}}
{{--                                   شركة تمكين الأوقاف هي شركة خدمية تهتم بشؤون الأوقاف المعطلة بالإضافة الي عوائدها المادية تصرف في الأوقاف أيضا--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- # Faq item-->--}}
{{--                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <h3 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">--}}
{{--                                    <i class="bi bi-question-circle question-icon"></i>--}}
{{--                                   ماذا تقدم تمكين وبما تنفرد عن غيرها--}}
{{--                                </button>--}}
{{--                            </h3>--}}
{{--                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">--}}
{{--                                <div class="accordion-body">--}}
{{--                                   شركة تمكين الأوقاف هي شركة خدمية تهتم بشؤون الأوقاف المعطلة بالإضافة الي عوائدها المادية تصرف في الأوقاف أيضا--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- # Faq item-->--}}
{{--                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <h3 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">--}}
{{--                                    <i class="bi bi-question-circle question-icon"></i>--}}
{{--                                   ماذا تقدم تمكين وبما تنفرد عن غيرها--}}
{{--                                </button>--}}
{{--                            </h3>--}}
{{--                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">--}}
{{--                                <div class="accordion-body">--}}
{{--                                   شركة تمكين الأوقاف هي شركة خدمية تهتم بشؤون الأوقاف المعطلة بالإضافة الي عوائدها المادية تصرف في الأوقاف أيضا--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- # Faq item-->--}}
{{--                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <h3 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">--}}
{{--                                    <i class="bi bi-question-circle question-icon"></i>--}}
{{--                                   ماذا تقدم تمكين وبما تنفرد عن غيرها--}}
{{--                                </button>--}}
{{--                            </h3>--}}
{{--                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">--}}
{{--                                <div class="accordion-body">--}}
{{--                                   شركة تمكين الأوقاف هي شركة خدمية تهتم بشؤون الأوقاف المعطلة بالإضافة الي عوائدها المادية تصرف في الأوقاف أيضا--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- # Faq item-->--}}
{{--                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <h3 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">--}}
{{--                                    <i class="bi bi-question-circle question-icon"></i>--}}
{{--                                   ماذا تقدم تمكين وبما تنفرد عن غيرها--}}
{{--                                </button>--}}
{{--                            </h3>--}}
{{--                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">--}}
{{--                                <div class="accordion-body">--}}
{{--                                   شركة تمكين الأوقاف هي شركة خدمية تهتم بشؤون الأوقاف المعطلة بالإضافة الي عوائدها المادية تصرف في الأوقاف أيضا--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- # Faq item-->--}}


{{--                    </div>--}}
<h1 class="text-center mb-5">شركاء التمكين </h1>
                    <div class="text-center">
                        <a href="{{route('add-new-partner')}}" class="btn btn-outline-warning " style="color: var(--color-dark)!important;">
                            نسعد بانضمامكم
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->
    <section id="portfolio" class="portfolio mt-5" data-aos="fade-up">

        <div class="container">

            <div class="section-header">
                <h2>مشروعات تمكين   </h2>

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
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-header">
                <h2>تواصل معنا</h2>
                <p>يمكنك النواصل معنا من خلال ارسال رسالتك مع وضع بياناتك </p>
            </div>

        </div>

        <div class="map">
{{--            <iframe src="https://www.google.com/maps/place/24%C2%B042'29.9%22N+46%C2%B041'16.8%22E/@24.7082925,46.6901824,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x1ee60631c72a5747!8m2!3d24.7082925!4d46.6879937" frameborder="0" allowfullscreen></iframe>--}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.5412351551868!2d46.690182385000156!3d24.708292484125863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ee60631c72a5747!2zMjTCsDQyJzI5LjkiTiA0NsKwNDEnMTYuOCJF!5e0!3m2!1sar!2ssa!4v1670494090148!5m2!1sar!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="container">

            <div class="row gy-5 gx-lg-5" style="direction: rtl">

                <div class="col-lg-4">

                    <div class="info">
                        <h3>ابق على تواصل </h3>
                        <p></p>

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>الموقع :</h4>
                                <p>الرياض , المملكة العريبة السعودية </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>البريد الإلكتروني:</h4>
                                <p>co@tmkin.sa</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>الجوال :</h4>
                                <p style="direction: rtl">966546642413+</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="{{route("contact")}}" method="post" role="form" class="php-email-form">

@csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="الاسم " value="{{old('name')}}" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني" value="{{old('email')}}" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" value="{{old('subject')}}" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="body" placeholder="الرسالة"  required>{{old('body')}}</textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message">
                                @foreach($errors as $error)
                                    <div class="alert alert-danger">
                                        {{$error}}
                                    </div>
                                    @endforeach
                            </div>
                            <div class="sent-message">تم توصيل رسالتك ,شكرا  على تواصلك !</div>
                        </div>
                        <div class="text-center "><button type="submit" style="color:var(--color-white) !important; background-color:var(--color-btn);: ">إرسال </button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->
@stop
