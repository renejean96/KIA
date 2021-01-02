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
              <div class="col-md-8"><h5>ALL ANNOUNCEMENTS</h5></div>
              <div class="col-md-4">
              <a href="{{'/add/announcement'}}">
                  <button class="btn btn-success">
                    <i class="bx bx-plus"></i> &nbsp Add Announcement
                  </button>
                </a>
              </div>
            </div>

            <br>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th> 
                        <th>Date Added</th>                        
                        <th>Author</th>                                          
                        <th colspan="3">Action</th>
                    </tr>
                    @if(count($datas) > 0 )
                    @php
                          $i=0;
                    @endphp 
                    @foreach ($datas as $data)
                    
                         </thead>
                         <tbody>
                             <tr>
                                  <td>{{++$i}}</td>
                                  <td>{{$data->title}}</td>
                                  <td>{{$data->created_at}}</td>                                              
                                  <td>Principal</td>
                              <form action="" method="POST">                                  
                                  <td><a href="#annsModal" class="btn btn-primary" data-toggle="modal">Details</a></td>
                                  <td><a href="" class="btn btn-warning">Edit</a></td>
                                  <td><a href="#deleteModal" class="btn btn-danger" data-toggle="modal">Delete</a></td>
                              </form>
                              </tr>
                    @endforeach
                    @else
                      <p>no post found</p>
                    @endif    
                </tbody>
            </table>

          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->


  </main><!-- End #main -->
  @endsection
  @section('footer')
    @include('inc.dash_footer')    
  @endsection


