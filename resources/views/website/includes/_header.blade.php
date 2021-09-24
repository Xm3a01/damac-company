<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><img src="{{asset('assets/assets/img/logo.jfif')}}" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">الرئسيه</a></li>

          <li><a href="{{route('web.services')}}" class = "{{ request()->is('*services*') ? 'active' : '' }}">الخدمات</a></li>
          <li><a href="/#portfolio" onclick="addClass()" id="proto">الاعمال</a></li>
          <li><a href="{{route('contact')}}" class = "{{ request()->is('*contact*') ? 'active' : '' }}">اتصل بنا</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  <script>
      addClass() {
        document.getElementById('proto').addClass('active')
      }
  </script>
  </header><!-- End Header -->

