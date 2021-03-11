@extends('layouts.app' , ['type' => 'details'])

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            @foreach ($portfolio->images as $image)   
              <img src="{{$image->getUrl()}}" class="img-fluid" alt="">
            @endforeach
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: {{$portfolio->name}}</li>
              <li><strong>Client</strong>: {{$portfolio->client}}</li>
              <li><strong>Project date</strong>: {{$portfolio->date}}</li>
              <li><strong>Project URL</strong>: <a href="#">{{$portfolio->url}}</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>portfolio detail</h2>
          <p>
            {{$portfolio->description}}
            </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  @endsection