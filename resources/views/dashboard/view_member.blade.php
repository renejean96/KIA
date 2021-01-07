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
              <div class="col-md-8"><h5>ALL STAFF MEMBERS</h5></div>
              <div class="col-md-4">
              <a href="{{'/add/member'}}">
                  <button class="btn btn-success">
                    <i class="bx bx-plus"></i> &nbsp Add Staff Member
                  </button>
                </a>
              </div>
            </div>

            <br>

            @if(count($data) > 0 )

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Names</th> 
                        <th>Role</th>                                             
                        <th colspan="3">Action</th>
                    </tr>  
                </thead>
                <tbody>           

                @foreach ($data as $dt)
                
                    <tr>
                        <td>#</td>
                        <td>{{ $dt->names }}</td>
                        <td>{{ $dt->position }}</td>                                   
                        <td><a href="#staffModal" class="btn btn-primary" data-toggle="modal">Details</a></td>
                        <td><a href="#" class="btn btn-warning">Edit</a></td>
                        <td><a href="#deleteModal" class="btn btn-danger" data-toggle="modal">Remove</a></td>
                    </tr>     
                
                    <!-- Modal --> 
                    <div class="modal fade details" id="staffModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                            <div class="modal-dialog modal-lg"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h6 class="modal-title" id="myModalLabel"> 
                                          <strong>STAFF MEMBER DETAILS</strong>
                                        </h6>
                                    </div> 
                                    <div class="modal-body"> 
                                        <div class="mid-content row">
                                          <div class="col-md-4">
                                            <img src="assets/img/trainers/trainer-3.jpg">
                                          </div>
                                          <div class="col-md-8">
                                            <h6><strong>Names:</strong> {{ $dt->names }}</h6>
                                            <h6><strong>Phone:</strong> {{ $dt->phone }}</h6>
                                            <h6><strong>Email:</strong> {{ $dt->email }}</h6>
                                            <h6><strong>Position:</strong> {{ $dt->position }}</h6>
                                            <h6><strong>Position Details</strong></h6>                      
                                            <p>
                                              {{ $dt->description }}
                                            </p>                        
                                          </div>
                                        </div>
                                    </div> 
                                    <div class="modal-footer"> 
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><b>Close</b></button>
                                    </div> 
                                </div>
                                <!-- /.modal-content -->
                        </div>
                    </div>
                    <!-- /.modal -->

                    <!-- Modal --> 
                    <div class="modal fade details" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                            <div class="modal-dialog"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h6 class="modal-title" id="myModalLabel"> 
                                          <strong>WARNING</strong>
                                        </h6>
                                    </div> 
                                    <div class="modal-body">                       
                                      <p>
                                        You are about to delete a registered staff member. Are you sure to continue?
                                      </p>              
                                    </div> 
                                    <div class="modal-footer"> 
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><b>Cancel</b></button>
                                    </div> 
                                </div>
                                <!-- /.modal-content -->
                        </div>
                    </div>
                    <!-- /.modal -->  

                @endforeach        
                
                </tbody>
            </table>

            @else
              <p class = "text-center no-entry"> No staff members found </p>
            @endif

          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->
  </main><!-- End #main -->
@endsection
@section('footer')
   @include('inc.dash_footer')    
@endsection