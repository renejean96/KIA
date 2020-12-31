@extends('layout.kia')

  @section('header')
    @include('inc.header')
  @endsection

  @section('menu')
    @include('inc.menu')
  @endsection

  @section('content')
      
    <!-- ======= Trainers Section ======= -->
    <section id="announcement" class="announcement">
      <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">            
        <div class="col-md-8">
          <h3 class="section-title">Amategeko mashya agenga ikigo: amabwiriza yo gukurikizwa</h3>
          <div class="sub-title">
            <h5><b>From:</b> Principal<br>
              <b>Pubished On:</b> 16th December, 2020</h5>
          </div>
          <br>
          <p class="text-justify">
            
            Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. 

            <br>
            Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. 


            Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo

          </p>
        </div>
        <div class="col-md-4">
          <h3 class="recent-anns">Recent Announcements</h3>            
          <div class="side-link">
            <a href="">
              <h5>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium
              </h5>
            </a>
            <a href="">
              <h5>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium
              </h5>      
            </a>                      
            <a href="">
              <h5>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium
              </h5>
            </a>
          </div>

        </div>
      </div>

      </div>
    </section><!-- End Trainers Section -->

  @endsection

  @section('footer')
    @include('inc.footer')    
  @endsection