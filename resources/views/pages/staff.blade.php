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
                <img src="{{URL::to('')}}/assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Sarah Jhinson</h4>
                  <span>Head Teacher</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{URL::to('')}}/assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Sarah Jhinson</h4>
                    <span>Secretary</span>
                  </div>
                </div>
              </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>William Anderson</h4>
                  <span>Accountant</span>
                </div>
              </div>
            </div>
  
          </div>

          <h3 class="section-title">SCHOOL TEACHERS</h3><br>


          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Walter White</h4>
                  <span>Web Development</span>
                  <p>
                    Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>Sarah Jhinson</h4>
                  <span>Marketing</span>
                  <p>
                    Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                  </p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{URL::to('')}}/assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>Sarah Jhinson</h4>
                    <span>Marketing</span>
                    <p>
                      Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                    </p>
                  </div>
                </div>
              </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{URL::to('')}}/assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>William Anderson</h4>
                  <span>Content</span>
                  <p>
                    Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                  </p>
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
