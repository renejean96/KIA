@extends('layout.dashboard')
     <main id="main">

    <!-- ======= Trainers Section ======= -->
    <section id="dashboard" class="dashboard">
        <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">   

          @include('inc.side-menu')
          
          <div class="col-md-9 main-space">
            
            <div class="row">
              <div class="col-md-8"><h5>ADD CALENDAR EVENT</h5></div>
              <div class="col-md-4">
              </div>
            </div>

            <br>
            <div class="main-form">
              <form method="POST">

                <label>Enter Period</label>
                <input type="text" class="form-control" placeholder="Enter period here" name="period">
                <label>Event Description</label>
                <textarea class="form-control" placeholder="Enter description here" name="description" cols = "3" rows="3"></textarea>               
                <br>
                <button class="btn btn-success"><i class="bx bx-save"></i> &nbsp SAVE EVENT</button>           

              </form>
            </div>
          </div>
        </div>

        </div>
      </section><!-- End Trainers Section -->


  </main><!-- End #main -->