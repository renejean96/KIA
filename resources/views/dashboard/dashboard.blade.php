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
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Inama y'ababyeyi irahafi cyane</td>
                        <td>24 Dec, 2020</td>                                              <td>Principal</td>                                   
                        <td><a href="#annsModal" class="btn btn-primary" data-toggle="modal">Details</a></td>
                        <td><a href="#" class="btn btn-warning">Edit</a></td>
                        <td><a href="#deleteModal" class="btn btn-danger" data-toggle="modal">Delete</a></td>
                    </tr>   
                </tbody>
            </table>

          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->


  </main><!-- End #main -->
  @endsection
  @section('footer')
    @include('inc.footer')    
  @endsection


