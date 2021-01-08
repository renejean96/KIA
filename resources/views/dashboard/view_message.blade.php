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
            @if(count($messages) > 0 )

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
                                <td><a href="#{{'messageModal'.$message->id}}" class="btn btn-primary" data-toggle="modal">Details</a></td>
                                <td><a href="#{{'deleteModal'.$message->id}}" class="btn btn-danger" data-toggle="modal">Delete</a></td>
                            </form>
                            </tr>
                            <!-- Modal --> 
                            <div class="modal fade details" id="{{'messageModal'.$message->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                              <div class="modal-dialog modal-lg"> 
                                  <div class="modal-content"> 
                                      <div class="modal-header"> 
                                          <h6 class="modal-title" id="myModalLabel"> 
                                            <strong>FULL MESSAGE</strong>
                                          </h6>
                                      </div> 
                                      <div class="modal-body"> 
                                            <h6><strong>Announcement Description</strong></h6>                   
                                              <p>
                                                {{ $message->message }}
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
                    <div class="modal fade details" id="{{'deleteModal'.$message->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                            <div class="modal-dialog"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h6 class="modal-title" id="myModalLabel"> 
                                          <strong>WARNING</strong>
                                        </h6>
                                    </div> 
                                    <div class="modal-body">                       
                                      <p>
                                        You are about to delete <b>{{$message->subject}}</b> message. Are you sure to continue?
                                      </p>              
                                    </div> 
                                    <div class="modal-footer"> 
                                        <a href = "{{ route('message.destroy', $message->id) }}"></a>
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
            {{$messages->links()}}
            @else
              <p class = "text-center no-entry"> No announcement message </p>
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