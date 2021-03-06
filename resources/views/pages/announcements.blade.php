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
              @if(count($anns) > 0 )
                @foreach ($anns as $ann)
                  <div class="col-md-4">
                    <a href="{{'announcement/'.$ann->id}}">                  
                      <div class="card">
                      <h5 class="main-title">{{$ann->title}}</h5>
                      <h5 class="author"><b>From:</b> {{$ann->author}}</h5>
                      <h5 class="date"><b>Pubished On:</b> {{$ann->created_at}}</h5>
                      </div>
                    </a>
                  </div>
                @endforeach
              @endif           
            </div>

        </div>
      </section><!-- End Trainers Section -->

    @endsection

    @section('footer')
        @include('inc.footer')
    @endsection