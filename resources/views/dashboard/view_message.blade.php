@extends('layout.dashboard')
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
                    <tr>
                        <td>1</td>
                        <td>Muhozi Christopher</td>
                        <td>Inama y'ababyeyi</td>
                        <td>24 Dec, 2020</td>
                        <td><a href="#messageModal" class="btn btn-primary" data-toggle="modal">Details</a></td>
                        <td><a href="#deleteModal" class="btn btn-danger" data-toggle="modal">Delete</a></td>                              
                    </tr>   
                </tbody>
            </table>

          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->


  </main><!-- End #main -->