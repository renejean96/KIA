@extends('layout.kia')

  @section('header')
    @include('inc.header')
  @endsection

  @section('menu')
    @include('inc.menu')
  @endsection

  @section('content')
    <!-- ======= staff Section ======= -->
    <section id="staff" class="staff">
        <div class="container" data-aos="fade-up">
  
        <h3 class="section-title">STAFF MEMBERS</h3>
        <h5 class="sub-title">Meet our hardworking staff members</h5>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
              <img src="{{URL::to('')}}/assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Principal</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/carlos.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Carlos Dr</h4>
                  <span>Head Teacher</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{URL::to('')}}/assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Sarah Jhinson</h4>
                    <span>Accountant</span>
                  </div>
                </div>
              </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/jeanette.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Jeannette Sc</h4>
                  <span>Secretary</span>
                </div>
              </div>
            </div>
  
          </div>

          <h3 class="section-title">SCHOOL TEACHERS</h3><br>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/abdou.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Abdou</h4>
                  <span>English Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/emmanuel.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Sibomana Emmanuel</h4>
                  <span>Kinyarwanda Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/dieudonne.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Dieudonne</h4>
                  <span>Kinyarwanda Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{URL::to('')}}/assets/img/staff/prosper.png" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Hakizimana Prosper</h4>
                    <span>French Teacher</span>
                    <p></p>
                  </div>
                </div>
              </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/betty.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Mukabahinda Betty</h4>
                  <span>Social studies Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/david.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>David</h4>
                  <span>Math Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>            
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/evariste.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Niyonsaba Evariste</h4>
                  <span>French Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/joshua.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Omutta Joshua</h4>
                  <span>English Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/joel.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Joel</h4>
                  <span>English Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/staff/claude.png" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Ngavubwiko Claude</h4>
                  <span>Kinyarwanda Teacher</span>
                  <p></p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End staff Section -->
@endsection
@section('footer')
  @include('inc.footer')    
@endsection
