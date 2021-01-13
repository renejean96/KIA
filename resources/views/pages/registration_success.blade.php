@extends('layout.kia')

  @section('header')
    @include('inc.header')
  @endsection

  @section('menu')
    @include('inc.menu')
  @endsection

  @section('content')

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
      </div>

      <div class="container" data-aos="fade-up">

      <h3 class="section-title">Pupil Registration Confirmation</h3>
        <h5 class="sub-title" style="color: #21793d;"><strong>{{ $firstname }} {{ $lastname }}</strong> has been successfully registered as a pupil at Kigali Infants Academy</h5>
        
        @include('inc.messages')

        <div class="row mt-5">

          <div class="col-lg-1"></div>
          <div class="col-lg-6">
            <p><strong>PLEASE NOTE: </strong> A Pupil can be be fully registered once the full schoolfees has been been paid at the school. 
                The payment bank slip has to be shown to the school's administration in person.</p>
          </div>
          <div class="col-lg-4 mt-5 mt-lg-0">
              <h5>Here's your registration document, click below</h5><br>
              <a href="{{ '/download/document/'.$pupilId }}">
                <button class="btn btn-success"><i class="bx bx-file"></i> Download Registration Document</button>
              </a>
          </div>
          <div class="col-lg-1"></div>
        
        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection
@section('footer')
  @include('inc.footer')    
@endsection