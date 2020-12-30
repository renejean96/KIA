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
                      <h5 class="main-title">Lorem ipsum delor iquadist, ipsum delor iquad</h5>
                      <h5 class="author"><b>From:</b> Principal</h5>
                      <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="{{'/announcement'}}">                  
                    <div class="card">
                      <h5 class="main-title">Amategeko mashya agenga ikigo: amabwiriza yo gukurikizwa</h5>
                      <h5 class="author"><b>From:</b> Principal</h5>
                      <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="{{'/announcement'}}">  
                    <div class="card">
                      <h5 class="main-title">Amategeko mashya agenga ikigo</h5>
                      <h5 class="author"><b>From:</b> Principal</h5>
                      <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                    </div>
                  </a>
                </div>                

                <div class="col-md-4">
                  <div class="card">
                    <h5 class="main-title">Amategeko mashya agenga ikigo: amabwiriza yo gukurikizwa</h5>
                    <h5 class="author"><b>From:</b> Principal</h5>
                    <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <h5 class="main-title">Amategeko mashya agenga ikigo</h5>
                    <h5 class="author"><b>From:</b> Principal</h5>
                    <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <h5 class="main-title">Amategeko mashya agenga ikigo: amabwiriza yo gukurikizwa</h5>
                    <h5 class="author"><b>From:</b> Principal</h5>
                    <h5 class="date"><b>Pubished On:</b> 16th December, 2020</h5>
                  </div>
                </div>

            </div>

        </div>
      </section><!-- End Trainers Section -->

    @endsection

    @section('footer')
        @include('inc.footer')
    @endsection