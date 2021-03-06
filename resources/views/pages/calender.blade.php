@extends('layout.kia')

    @section('header')
        @include('inc.header')
    @endsection

    @section('menu')
        @include('inc.menu')
    @endsection

    @section('content')
            <!-- ======= Trainers Section ======= -->
    <section id="calendar" class="calendar">
        <div class="container" data-aos="fade-up">
  
        <h3 class="section-title">ACADEMIC CALENDAR</h3>
        <h5 class="sub-title">A detailed academic calendar for the school </h5>

            <div class="row" data-aos="zoom-in" data-aos-delay="100"> 
          
                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <div class="calendar-table">
                        <div class="header row">
                            <div class="date-part col-md-4">
                                <h4>DATE</h4>
                            </div>
                            <div class="desc-part col-md-8">
                                <h4>DETAILS</h4>
                            </div>
                        </div>
                        <div class="body row">
                        
                        @if(count($events) > 0 )
                            @foreach ($events as $dt)                        
                                
                                <div class="body-date col-md-4">
                                    {{ $dt->period }}
                                </div>
                                <div class="body-desc col-md-8">
                                    {{ $dt->details }}
                                </div>

                            @endforeach        
                        @else
                            <p class = "text-center no-data"> No events for now </p>
                        @endif                        
                        </div>                    
                    </div>
                </div>

                <div class="col-md-1"></div>                

            </div>

        </div>
      </section><!-- End Trainers Section -->
    @endsection

    @section('footer')
        @include('inc.footer')
    @endsection
