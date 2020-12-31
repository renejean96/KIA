@extends('layout.kia')

  @section('header')
    @include('inc.header')
  @endsection

  @section('menu')
    @include('inc.menu')
  @endsection

  @section('content')
     <!-- ======= About Section ======= -->
     <section id="about" class="about">
      
        <div class="container" data-aos="fade-up">
  
          <h3 class="section-title">ABOUT US</h3>
  
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{URL::to('')}}/assets/img/bg.jpg" class="img-fluid" alt="">
            </div>  
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>How we started?</h3>
              <p class="about-history">
                Kigali Infants Academy is a school that started in 2014,with only 4 classes: baby class,middle class and primary 1&2. during that time
                baby class had 36students,middle class 36 students,top class 38 students,primary level one 37 student,level two 36 students.
              </p>
              <br>
              <h3>Our core values</h3>
                <ul class="sub-list">
                  <li><span><i class="bx bx-chevron-right"></i></span> &nbsp God fearing</li>
                  <li><span><i class="bx bx-chevron-right"></i></span> &nbsp Hard work & Team work</li>
                  <li><span><i class="bx bx-chevron-right"></i></span> &nbsp Patriotism</li>
                  <li><span><i class="bx bx-chevron-right"></i></span> &nbsp Discipline & Accountability</li>
                  <li><span><i class="bx bx-chevron-right"></i></span> &nbsp Shared responsibility</li>                              
                </ul>
  
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
  
      <!-- ======= Features Section ======= -->
      <section id="facts" class="facts">
        <div class="container facts-section" data-aos="fade-up">
  
          <h3 class="section-title">QUICK FACTS ABOUT US</h3>
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
  
            <div class="col-md-4">
              <div class="card">
                <h3 class="stat-number"><i class="bx bx-group" style="color: #5e55da;"></i></h3>
                <h3>795 Pupils</h3>
                <br>
                <p class="text-center">
                  We currently have 315 children in nursery and 480 more children in primary school.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <h3 class="stat-number"><i class="bx bx-user-voice" style="color: #e80368;"></i></h3>
                <h3>15 Teachers</h3>
                <br>
                <p class="text-center">
                  As of today, Our school has fifteen teachers for both nursery and primary school.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <h3 class="stat-number"><i class="bx bx-badge-check" style="color: #5578ff;"></i></h3>
                <h3>3 Alumni Classes</h3>
                <br>
                <p class="text-center">
                  We have so far produced three classes for the  national examinations, starting from 2017 to 2019.
                </p>
              </div>            
            </div>          
  
          </div>
  
        </div>
      </section><!-- End Features Section -->
@endsection
@section('footer')
  @include('inc.footer')    
@endsection