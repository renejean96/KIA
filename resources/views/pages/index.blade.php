@extends('layout.kia')

  @section('header')
    @include('inc.header')
  @endsection

  @section('menu')
    @include('inc.menu')
  @endsection

  @section('content')
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex justify-content-center align-items-center">
          <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Success,<br>Begins here</h1>
            <h2>A modern nursery & primary school for your children</h2>
            <a href="{{'/registration'}}"class="btn-get-started">Register Now</a>
          </div>
        </section><!-- End Hero -->
    <main id="main">
  
      <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container section-about" data-aos="fade-up">
    
            <!-- <div class="section-title">
              <h2>About</h2>
              <p>About Us</p>
            </div> -->
    
            <h3 class="section-title">GET TO KNOW US</h3>
    
            <div class="row">
              <div class="col-md-6 vision-part">
                <i class="bx bx-world"></i>
                <br>
                <h4>Our Vision</h4>
                <p class="text-center">
                    To be the leading nursery and primary school in Rwanda and the region.
                </p>
              </div>
              <div class="col-md-6 mission-part">
                <i class="bx bx-badge-check"></i>
                <br>
                <h4>Our Mission</h4>
                <p class="text-center">
    
                  To be a competitive primary school that provides quality education with innovative child centered care.
                  We achieve this through technology and motivated human ressource in partnership with all stakeholders.
    
                </p>            
              </div>          
            </div>
    
          </div>
        </section><!-- End About Section -->
    
        <!-- ======= Counts Section ======= -->
        <section id="stats" class="stats">
          <div class="container stats-section" data-aos="fade-up">
    
            <h3 class="section-title">SCHOOL PERFORMANCE</h3>
            <h6 class="sub-title">Our pupils performance in national examinations from 2017 to 2019</h6>

            <div class="row counters">
    
              <div class="col-md-4 text-center">
                <span data-toggle="counter-up" class = "stat">3 Alumni Classes</span>
                <p>110 Pupils (2017 - 2019)</p>
              </div>
    
              <div class="col-md-4 text-center">
                <span data-toggle="counter-up" class = "stat">93.7%</span>
                <p>Division I</p>
              </div>
    
              <div class="col-md-4 text-center">
                <span data-toggle="counter-up" class = "stat">6.3%</span>
                <p>Division II</p>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Counts Section -->
    
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
          <div class="container" data-aos="fade-up">
    
            <div class="row">
              <div class="col-lg-4 d-flex align-items-stretch">
                <div class="content">
                  <h3>Why choose Kigali Infants Academy?</h3>
                  <p>
                    We have got the best resources for your children. Our qualified teachers shape your children's minds with sharp skills.
                  </p>
                  <div class="text-center">
                    <a href="{{'/about/school'}}" class="more-btn">Explore our school <i class="bx bx-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                  <div class="row">
                    <div class="col-xl-6 d-flex align-items-stretch">
                      <div class="icon-box mt-4 mt-xl-0">
                        <i class="bx bx-group"></i>
                        <h4>Nursery</h4>
                        <p>You're welcome to bring your kids to our nursery school. We have qualified trainers suited for kids.</p>
                      </div>
                    </div>
                    <div class="col-xl-6 d-flex align-items-stretch">
                      <div class="icon-box mt-4 mt-xl-0">
                        <i class="bx bx-home"></i>
                        <h4>Primary</h4>
                        <p>We provide education at the primary school level. Children are facilitated with free transport from your living places.</p>
                      </div>
                    </div>
                  </div>
                </div><!-- End .content-->
              </div>
            </div>
    
          </div>
        </section><!-- End Why Us Section -->
    
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
          <div class="container activities-section" data-aos="fade-up">
    
            <h3 class="section-title">SCHOOL EXTRA-CURRICULAR ACTIVITIES</h3>
    
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
              <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                  <i class="bx bx-group" style="color: #ff2cca;"></i>
                  <h3><a href="#">Debate Club</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                  <i class="bx bx-music" style="color: #5578ff;"></i>
                  <h3><a href="#">Talent Club</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                  <i class="bx bx-football" style="color: #e80368;"></i>
                  <h3><a href="#">Sports competitions</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="icon-box">
                  <i class="bx bx-body" style="color: #e361ff;"></i>
                  <h3><a href="#">Traditional dance</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <i class="bx bx-cloud-rain" style="color: #26811e;"></i>
                  <h3><a href="#">Environment club</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <i class="bx bx-camera-movie" style="color: #ffa76e;"></i>
                  <h3><a href="#">Media Club</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <i class="bx bx-book-reader" style="color: #11dbcf;"></i>
                  <h3><a href="#">Languages Club</a></h3>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                  <i class="bx bx-run" style="color: #5e55da;"></i>
                  <h3><a href="#">Sports Acitivities</a></h3>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Features Section -->
    
    
      </main><!-- End #main -->

  @endsection
  @section('footer')
    @include('inc.footer')    
  @endsection