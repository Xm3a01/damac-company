@extends('layouts.app')

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs p-4">
            <div class="container">

                <ol>
                    <li><a href="/">الرئسيه</a></li>
                    <li>الخدمات</li>
                </ol>
                <h2>الخدمات</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @foreach ($company->services as $service)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-orange">
                                <div class="icon">
                                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                            d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                        </path>
                                    </svg>
                                    <i class="bx {{ $service->icon }}"></i>
                                </div>
                                <h4><a href="">{{ $service->name }}</a></h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>المميازات</h2>
                    <p>تعمل المؤسسة المعنية فى المجاالت االتى.</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href=""> التسويق العقارى السكنى</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line" style="color: #5578ff;"></i>
                            <h3><a href=""> التسويق العق ارى الزراعي</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line " style="color: #e80368;"></i>
                            <h3><a href=""> استيراد  معدات الورش واللات الزراعية
                            </a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line" style="color: #e361ff;"></i>
                            <h3><a href=""> توريد وتشغيل الطاقة الشمسيه</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <h3><a href="">تدير شركة داماك اعمال كساب للمقاولات</a></h3>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Eiusmod Tempor</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">Midela Teren</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                            <h3><a href="">Pira Neve</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-anchor-line" style="color: #b2904f;"></i>
                            <h3><a href="">Dirada Pack</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-disc-line" style="color: #b20969;"></i>
                            <h3><a href="">Moton Ideal</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <h3><a href="">Verdo Park</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                            <h3><a href="">Flavor Nivelanda</a></h3>
                        </div>
                    </div> --}}
                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
