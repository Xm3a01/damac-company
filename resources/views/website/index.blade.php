@extends('layouts.app')
@section('content')
<!-- ======= Header ======= -->

  <!-- ======= Hero Section ======= -->
  @section('hero')

  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/assets/img/land1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
                <div class="cover">
                    <div class="under-cover">
                        <h2>من نحن</h2>
                        <p>{{Str::words($company->about , 20) ?? ""}}.</p>
                        <div class="text-center"><a href="" class="btn-get-started"> المزيد </a></div>
                      </div>
                    </div>
                </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/assets/img/land2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
                <div class="cover">
                    <div class="under-cover">
                        <h2>الرؤيه</h2>
                        <p>{{Str::words($company->vission , 20) ?? ""}}.</p>
                        <div class="text-center"><a href="" class="btn-get-started">المزيد</a></div>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/assets/img/land3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
                <div class="cover">
                    <div class="under-cover">
                        <h2>ألاهداف</h2>
                        <p>{{Str::words($company->goal, 20) ?? ""}}.</p>
                        <div class="text-center"><a href="" class="btn-get-started">المزيد</a></div>
                    </div>
                </div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->
  @endsection

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us" style="background-image: url(assets/assets/img/logo.jfif); background-repeat: no-repeat; background-position: center; background-size: 20%;">
        <div class="cover">
        <div class="container" data-aos="fade-up">

          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right" >
              <h2>الاهداف:-</h2>
              <p>
                  {{$company->goal ?? ""}}
              </p>
              </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                <h2>الرؤيه :-</h2>
              <p>
                {{$company->vission ?? ""}}
              </p>
            </div>
          </div>
        </div>
        </div>
      </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
            @foreach ($company->services as $service)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-orange">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  <i class="bx {{$service->icon}}"></i>
                </div>
                <h4><a href="{{route('web.services')}}">{{$service->name}}</a></h4>
                <p>{{$service->description}}</p>
              </div>
            </div>

            @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">الكل</li>
              @foreach ($company->portfolioes as  $proto)
                <li data-filter=".filter-{{$proto->id}}">{{$proto->name}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
            @foreach ($company->portfolioes as $key => $proto)
                @foreach ($proto->getMedia('portfolios') as $image)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$proto->id}}">
                <img src="{{$image->getUrl()}}" class="img-fluid" alt="">
                <div class="portfolio-info rounded-3 row">
                    <div class="col-md-12">
                  <h4>{{$proto->name}}</h4>
                  <p> {{ $proto->description }}</p>
                  <code>{{$proto->date}}</code>

                    </div>
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>


                </div>
              </div>
              @endforeach
              @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>العملاء</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          @foreach ($company->partiners as $partiner)

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{$partiner->image}}" class="img-fluid" alt="" title="{{$partiner->name}}">
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Our Clients Section -->


 @endsection
