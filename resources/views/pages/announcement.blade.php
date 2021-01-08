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
        <h3 class="section-title">{{$announcement->title}}</h3>
          <div class="sub-title">
          <h5><b>From:</b> {{$announcement->author}}<br>
          <b>Pubished On:</b>{{$announcement->created_at}}</h5>
          </div>
          <br>
          <p class="text-justify">
            {{$announcement->body}}
          </p>
        </div>
        <div class="col-md-4">
          <h3 class="recent-anns">Recent Announcements</h3>            
          <div class="side-link">
            @if(count($announces) > 0 )
                @foreach ($announces as $announce)
                  <a href="{{$announce->id}}">
                  <h5>
                    {{$announce->title}}
                  </h5>
                </a>
                @endforeach
            @endif
          </div>

        </div>
      </div>

      </div>
    </section><!-- End Trainers Section -->

  @endsection

  @section('footer')
    @include('inc.footer')    
  @endsection