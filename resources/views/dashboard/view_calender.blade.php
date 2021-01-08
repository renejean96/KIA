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
              <a href="{{'/events/create'}}">
                  <button class="btn btn-success">
                    <i class="bx bx-plus"></i> &nbsp Add Event
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
                        <th>Period</th>                                           
                        <th colspan="3">Action</th>
                    </tr>  
                </thead>
                <tbody>

                  @foreach ($data as $dt)
                
                    <tr>
                        <td>#</td>
                        <td>{{ $dt->period }}</td>    
                        <td><a href="#{{ 'eventModal'.$dt->id }}" class="btn btn-primary" data-toggle="modal">Details</a></td>
                        <td><a href="#" class="btn btn-warning">Edit</a></td>
                        <td><a href="#{{ 'deleteModal'.$dt->id }}" class="btn btn-danger" data-toggle="modal">Delete</a></td>                               
                    </tr>   
                
                    <!-- Modal --> 
                    <div class="modal fade details" id="{{ 'eventModal'.$dt->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                            <div class="modal-dialog modal-lg"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h6 class="modal-title" id="myModalLabel"> 
                                          <strong>CALENDAR EVENT DETAILS</strong>
                                        </h6>
                                    </div> 
                                    <div class="modal-body"> 
                                      <h6><strong>Period:</strong> {{ $dt->period }}</h6>
                                      <h6><strong>Event Description</strong></h6>                      
                                      <p>
                                        {{ $dt->details }}
                                      </p>              
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
                    <div class="modal fade details" id="{{ 'deleteModal'.$dt->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                            <div class="modal-dialog"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h6 class="modal-title" id="myModalLabel"> 
                                          <strong>WARNING</strong>
                                        </h6>
                                    </div> 
                                    <div class="modal-body">                       
                                      <p>
                                        You are about to delete a registered event. Are you sure to continue?
                                      </p>              
                                    </div> 
                                    <div class="modal-footer"> 
                                        <a href = "{{ route('events.destroy', $dt->id) }}">
                                          <button type="button" class="btn btn-danger">Delete</button>
                                        </a>
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
              <p class = "text-center no-entry"> No academic events found </p>
            @endif

          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->
@endsection
@section('footer')
  @include('inc.dash_footer')    
@endsection
