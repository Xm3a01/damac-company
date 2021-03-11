@extends('layouts.app' , ['type' => 'details'])

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>About Details</li>
        </ol>
        <h2>About Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">
            <div class="owl-carousel portfolio-details-carousel">
                  <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid" alt="" height="300" width="300">
              </div>
          <div class="portfolio-info">
            <h3>About information</h3>
            <ul>
              <li><strong>Name</strong>: {{$company->name}}</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Description</h2>
          <p>
            {{$company->about}}
           </p>

           <div class="content">
               <ul >
                <li><i class="ri-check-double-line"></i> {{$company->about_section_1}}</li>
                <li><i class="ri-check-double-line"></i> {{$company->about_section_2}}</li>
                <li><i class="ri-check-double-line"></i> {{$company->about_section_3}}</li>
              </ul>
           </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  @endsection

  <style>
      .content ul > li {
          list-style-type: none;
      }

      .content ul > li > i {
          color: #2da0af;
      }
  </style>