@extends('layout.dashboard')
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
                    <tr>
                        <td>1</td>
                        <td>Nshuti Chris</td>
                        <td>Teacher</td>                                   
                        <td><a href="staffModal" class="btn btn-primary" data-toggle="modal">Details</a></td>
                        <td><a href="#" class="btn btn-warning">Edit</a></td>
                        <td><a href="#deleteModal" class="btn btn-danger" data-toggle="modal">Remove</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jean KIBAMBE</td>
                        <td>Teacher</td>                                   
                        <td><a href="#staffModal" class="btn btn-primary" data-toggle="modal">Details</a></td>
                        <td><a href="#" class="btn btn-warning">Edit</a></td>
                        <td><a href="#deleteModal" class="btn btn-danger" data-toggle="modal">Remove</a></td>                            
                    </tr>                       
                </tbody>
            </table>

          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->


  </main><!-- End #main -->