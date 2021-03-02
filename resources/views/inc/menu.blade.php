  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="{{'/'}}">KIA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{URL::to('')}}/assets/img/kia_logo.jpg" alt="" class="img-fluid"></a> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class=" {{ $home ?? '' }} "><a href="{{'/'}}">Home</a></li>
          <li class="drop-down  {{ $about ?? '' }} "><a href="#">About</a>
            <ul>
            <li><a href="{{'/about/school'}}">Our School</a></li>
              <li><a href="{{'/about/staff'}}">Staff members</a></li>
            {{-- <li><a href="{{'about/gallery'}}">Gallery</a></li> --}}
            </ul>
          </li>          
        <li class=" {{ $calendar ?? '' }} "><a href="{{'/calendar'}}">Academic Calendar</a></li>
        <li class=" {{ $announcements ?? '' }} "><a href="{{'/announcements'}}">Announcements</a></li>
        <li class=" {{ $contact ?? '' }} "><a href="{{'/contact'}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    <a href="{{'/registration'}}" class="get-started-btn">Registration</a>

    </div>
  </header><!-- End Header -->