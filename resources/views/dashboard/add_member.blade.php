@extends('layout.dashboard')
    <main id="main">

    <!-- ======= Trainers Section ======= -->
    <section id="dashboard" class="dashboard">
        <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">            
          @include('inc.side-menu')

          <div class="col-md-9 main-space">
            
            <div class="row">
              <div class="col-md-8"><h5>ADD NEW STAFF MEMBER</h5></div>
              <div class="col-md-4">
              </div>
            </div>

            <br>
            <div class="main-form">
              <form method="POST">

                <label>Member Names</label>
                <input type="text" class="form-control" placeholder="Enter names here" name="names">
                <label>Member Phone Number</label>
                <input type="text"  class="form-control" placeholder="Enter phone number here" name="phone">
                <label>Member Position</label>
                <input type="text"  class="form-control" placeholder="Enter position here" name="position">
                <label>Description</label>
                <textarea class="form-control" placeholder="Enter description here" name="description" cols = "3" rows="3"></textarea> 
                <label>Upload a picture</label>
                <input type="file" name="photo" class="btn btn-default">                
                <br><br>
                <button class="btn btn-success"><i class="bx bx-save"></i> &nbsp SAVE MEMBER</button>           

              </form>
            </div>
          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->


  </main><!-- End #main -->
