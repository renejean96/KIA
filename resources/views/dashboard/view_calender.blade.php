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
              <div class="col-md-8"><h5>ALL CALENDAR EVENTS</h5></div>
              <div class="col-md-4">
              <a href="{{'/add/event'}}">
                  <button class="btn btn-success">
                    <i class="bx bx-plus"></i> &nbsp Add Event
                  </button>
                </a>
              </div>
            </div>

            <br>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Period</th>                                           
                        <th colspan="3">Action</th>
                    </tr>  
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>24 Dec, 2020 - 4 Jan, 2021</td>    
                        <td><a href="eventModal" class="btn btn-primary" data-toggle="modal">Details</a></td>
                        <td><a href="#" class="btn btn-warning">Edit</a></td>
                        <td><a href="#deleteModal" class="btn btn-danger" data-toggle="modal">Delete</a></td>                               
                    </tr>   
                </tbody>
            </table>

          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->
@endsection
@section('footer')
  @include('inc.dash_footer')    
@endsection
