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

            @if(count($members) > 0 )
            
            @foreach ($members as $m)

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{URL::to('')}}/assets/img/staff/{{ $m->photo }}" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>{{ $m->names }}</h4>
                    <span> {{ $m->position }} </span>
                  </div>
                </div>
              </div>

            @endforeach
            @else
              <p class = "text-center no-data"> No staff members to show </p>
            @endif
  
          </div>

          <h3 class="section-title">SCHOOL TEACHERS</h3><br>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">

            @if(count($teachers) > 0 )
            
            @foreach ($teachers as $m)

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="{{URL::to('')}}/assets/img/staff/{{ $m->photo }}" class="img-fluid" alt="">
                  <div class="member-content">
                    <h4>{{ $m->names }}</h4>
                    <span> {{ $m->position }} </span>

                  </div>
                </div>
              </div>

            @endforeach
            @else
              <p class = "text-center no-data"> No school teachers to show </p>
            @endif                                    

          </div>

        </div>
      </section><!-- End staff Section -->
@endsection
@section('footer')
  @include('inc.footer')    
@endsection
