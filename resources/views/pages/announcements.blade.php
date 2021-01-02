@extends('layout.kia')

    @section('header')
        @include('inc.header')
    @endsection

    @section('menu')
        @include('inc.menu')
    @endsection

    @section('content')

     <!-- ======= Trainers Section ======= -->
     <section id="announcements" class="announcements">
        <div class="container" data-aos="fade-up">
  
        <h3 class="section-title">SCHOOL ANNOUNCEMENTS</h3>
        <h5 class="sub-title"> Keep up with the school news and announcements </h5>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">            
              <div class="col-md-4">
                <a href="{{'/announcement'}}">                  
                  <div class="card">
                    <h5 class="main-title">School provide masks for students</h5>
                    <h5 class="author"><b>From:</b> Principal</h5>
                    <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                  </div>
                </a>
              </div>

                <div class="col-md-4">
                  <a href="{{'/announcement'}}">                  
                    <div class="card">
                      <h5 class="main-title">We are registering new students</h5>
                      <h5 class="author"><b>From:</b> Principal</h5>
                      <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="{{'/announcement'}}">                  
                    <div class="card">
                      <h5 class="main-title"> school provide Breakfast and Lunch to students</h5>
                      <h5 class="author"><b>From:</b> Principal</h5>
                      <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                    </div>
                  </a>
                </div>               

                <div class="col-md-4">
                  <a href="{{'/announcement'}}">                  
                    <div class="card">
                      <h5 class="main-title">School provide transport</h5>
                      <h5 class="author"><b>From:</b> Principal</h5>
                      <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="{{'/announcement'}}">                  
                    <div class="card">
                      <h5 class="main-title">all about courses</h5>
                      <h5 class="author"><b>From:</b> Principal</h5>
                      <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="{{'/announcement'}}">                  
                    <div class="card">
                      <h5 class="main-title">how to pay school fees</h5>
                      <h5 class="author"><b>From:</b> Principal</h5>
                      <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                    </div>
                  </a>
                </div>

            </div>

        </div>
      </section><!-- End Trainers Section -->

    @endsection

    @section('footer')
        @include('inc.footer')
    @endsection