@extends('layout.kia')

  @section('header')
    @include('inc.header')
  @endsection

  @section('menu')
    @include('inc.dashHeader')
  @endsection

  @section('content')
    <main id="main">

    <!-- ======= Trainers Section ======= -->
    <section id="dashboard" class="dashboard">
        <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100"> 
                       
            @include('inc.side-menu')

          <div class="col-md-9 main-space">
            
            <div class="row">
              <div class="col-md-8"><h5>ALL MESSAGES</h5></div>
              <div class="col-md-4">
              </div>
            </div>

            <br>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Names</th> 
                        <th>Subject</th>                        
                        <th>Date Added</th>                                       
                        <th colspan="2">Action</th>
                    </tr>  
                </thead>
                <tbody>
                  @if(count($messages) > 0 )
                  @php
                        $i=0;
                  @endphp 
                  @foreach ($messages as $message)
                  
                       </thead>
                       <tbody>
                           <tr>
                                <td>{{++$i}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->subject}}</td>
                                <td>{{$message->created_at}}</td>                                              
                            <form action="" method="POST">                                  
                                <td><a href="#annsModal" class="btn btn-primary" data-toggle="modal">Details</a></td>
                                <td><a href="#deleteModal" class="btn btn-danger" data-toggle="modal">Delete</a></td>
                            </form>
                            </tr>
                  @endforeach
                  @else
                    <p>no post found</p>
                  @endif    
              </tbody>
            </table>
            {{$messages->links()}}
          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->
  </main><!-- End #main -->
  @endsection
  @section('footer')
     @include('inc.dash_footer')    
  @endsection