@extends('layout.kia')

  @section('header')
    @include('inc.header')
  @endsection

  @section('menu')
    @include('inc.dashHeader')
  @endsection

  @section('content')
    
    @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
    @endif
    <main id="main">
    <!-- ======= Trainers Section ======= -->
    <section id="dashboard" class="dashboard">
      <div class="container" data-aos="fade-up">
        

        <div class="row" data-aos="zoom-in" data-aos-delay="100">  
                    
            @include('inc.side-menu')

          <div class="col-md-9 main-space">
            
            @include('inc.messages')
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
          @if(count($announcements) > 0 )

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th> 
                        <th>Date Added</th>                        
                        <th>Author</th>                                          
                        <th colspan="3">Action</th>
                    </tr>
                    @php
                          $i=0;
                    @endphp 
                    @foreach ($announcements as $announcement)
                    
                         </thead>
                         <tbody>
                             <tr>
                                  <td>{{++$i}}</td>
                                  <td>{{$announcement->title}}</td>
                                  <td>{{$announcement->created_at}}</td>                                              
                                  <td>Principal</td>
                              <form action="" method="POST">                                  
                              <td><a href="#{{'announcementsModal'.$announcement->id}}" class="btn btn-primary" data-toggle="modal">Details</a></td>
                                  <td><a href="#{{'editModal'.$announcement->id}}" class="btn btn-warning">Edit</a></td>
                                  <td><a href="#{{'deleteModal'.$announcement->id}}" class="btn btn-danger" data-toggle="modal">Delete</a></td>
                              </form>
                              </tr>
                              <!-- Modal --> 
                              <div class="modal fade details" id="{{'announcementsModal'.$announcement->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                                      <div class="modal-dialog modal-lg"> 
                                          <div class="modal-content"> 
                                              <div class="modal-header"> 
                                                  <h6 class="modal-title" id="myModalLabel"> 
                                                    <strong>ANNOUNCEMENTS DETAILS</strong>
                                                  </h6>
                                              </div> 
                                              <div class="modal-body"> 
                                                    <h6><strong>Announcement Description</strong></h6>                   
                                                      <p>
                                                        {{ $announcement->body }}
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
                            <div class="modal fade details" id={{'deleteModal'.$announcement->id}} tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                                    <div class="modal-dialog"> 
                                        <div class="modal-content"> 
                                            <div class="modal-header"> 
                                                <h6 class="modal-title" id="myModalLabel"> 
                                                  <strong>WARNING</strong>
                                                </h6>
                                            </div> 
                                            <div class="modal-body">                       
                                              <p>
                                                You are about to delete <b>{{$announcement->title}}</b> announcement. Are you sure to continue?
                                              </p>              
                                            </div> 
                                            <div class="modal-footer"> 
                                                <a href = "{{ route('announcement.destroy', $announcement->id) }}"></a>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><b>Cancel</b></button>
                                            </div> 
                                        </div>
                                        <!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- /.modal -->  
                    @endforeach
                    @else
                    <p class = "text-center no-entry"> No announcement found </p>
                  @endif    
                </tbody>
            </table>
            {{$announcements->links()}}
          </div>
        </div>

      </div>
    </section><!-- End Trainers Section -->


  </main><!-- End #main -->
  @endsection
  @section('footer')
    @include('inc.dash_footer')    
  @endsection


