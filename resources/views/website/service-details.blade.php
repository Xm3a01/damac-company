@extends('layouts.app' , ['type' => 'details'])

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>Service Details</li>
        </ol>
        <h2>Service Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            @foreach ($service->images as $image)   
              <img src="{{$image->getUrl()}}" class="img-fluid" alt="">
            @endforeach
          </div>

          <div class="portfolio-info">
            <h3>Service information</h3>
            <ul>
              <li><strong>Name</strong>: {{$service->name}}</li>
              <li><strong>Target</strong>: {{$service->target}}</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Description</h2>
          <p>
            {{$service->description}}
           </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  @endsection