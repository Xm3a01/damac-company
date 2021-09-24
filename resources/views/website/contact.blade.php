@extends('layouts.app')

@section('content')
<section id="breadcrumbs" class="breadcrumbs p-4">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>اتصل بنا</h2>
        <ol>
          <li><a href="/">الرئسيه</a></li>
          <li>اتصل بنا</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= Contact Section ======= -->
  <div class="map-section">
    <iframe width="1350" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=15.5963608,32.5811527&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
 </div>

  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="bi bi-geo-alt"></i>
                <h4>الموقع:</h4>
                <p>المنشيه<br>  السودان - الخرطوم</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>البريد:</h4>
                <p>info@example.com<br>contact@example.com</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>الجوال:</h4>
                <p>+249912291921<br></p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="البريد" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="الرساله" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">شكرا على اعلامنا نتمني لك التوفيق</div>
            </div>
            <div class="text-center"><button type="submit">ارسال</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection
