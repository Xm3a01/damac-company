<!-- ======= Header ======= -->
<header id="header" class="fixed-top {{ $type != 'Home'? 'header-inner-pages' : ''}}">
    <div class="container d-flex align-items-center">

      <h4 class="logo mr-auto"><a href="/">Hash D.P.</a></h4>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
          @if ($type == 'Home')
            <li class="active"><a href="/">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
          @endif

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{$type == 'Home'?'#about' : '/'}}" class="get-started-btn scrollto">{{$type == 'Home'?'Get Started' : 'Go Home'}}</a>

    </div>
  </header><!-- End Header -->