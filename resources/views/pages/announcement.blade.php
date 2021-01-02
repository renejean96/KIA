@extends('layout.kia')

  @section('header')
    @include('inc.header')
  @endsection

  @section('menu')
    @include('inc.menu')
  @endsection

  @section('content')
      
    <!-- ======= Trainers Section ======= -->
    <section id="announcement" class="announcement">
      <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">            
        <div class="col-md-8">
          <h3 class="section-title">we are registering new students</h3>
          <div class="sub-title">
            <h5><b>From:</b> Principal<br>
              <b>Pubished On:</b> 16th December, 2020</h5>
          </div>
          <br>
          <p class="text-justify">
            
            School is happy to announce that we started to register, student from baby class to top classes and primary one to primary 3. 
            About starting first, second and third term we will communicate you on  our website and to all of  our social platforms.
            

          </p>
        </div>
        <div class="col-md-4">
          <h3 class="recent-anns">Recent Announcements</h3>            
          <div class="side-link">
            <a href="">
              <h5>
                School provide breakfast and lunch to students
              </h5>
            </a>
            <a href="">
              <h5>
                How to pay school fees
              </h5>      
            </a>                      
            <a href="">
              <h5>
                School provide transport
              </h5>
            </a>
          </div>

        </div>
      </div>

      </div>
    </section><!-- End Trainers Section -->

  @endsection

  @section('footer')
    @include('inc.footer')    
  @endsection