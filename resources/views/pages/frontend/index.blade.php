@extends('layouts.frontend')
@section('content-user')

<!-- Portfolio Grid -->


<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">the best in our place to choose For you</h2><br>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img style="width:200px; height:190px " class="rounded-circle  img-fluid "
                src="{{asset('local.ina/img/about/winedeal.jpeg')}}" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="subheading">THE BEST WINE DEAL</h4>
                <H4 class="subheading">EVERY TUESDAY & FRIDAY</H4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Everyone Needs A Casual Wine Night</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img style="width:200px; height:190px " class="rounded-circle img-fluid"
                src="{{asset('local.ina/img/about/steakandwine.jpeg')}}" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="subheading">GOOD PEOPLE, SCRUMPTIOUS WINE AND STEAK</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">The Perfect Pair</p>
                <p class="text-muted">Angus Striploin & Cabernet Sauvignon</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img style="width:200px; height:190px " class="rounded-circle img-fluid"
                src="{{asset('local.ina/img/about/cocktail.jpeg')}}" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>TODAYS MOOD:</h4>
                <h4 class="subheading">COCKTAIL AND BE FABULOUS</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">The Lady Of Manhattan.</p>
                <p class="text-muted">Bourbon Is Not Always Meant Only For Men.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Team -->
<section class="bg-light" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Anything For You</h2>
        <h3 class="section-subheading text-muted">The best choice.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="team-member">
          <img class="rounded  img-fluid" src="{{asset('local.ina/img/team/disckAlcohol.jpeg')}}" alt="">
          <h4>Discount 30%</h4>
          <p class="text-muted">Everyday 6pm-8pm</p>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="rounded img-fluid" src="{{asset('local.ina/img/team/discSteak.jpeg')}}" alt="">
          <h4>Discount 25% Every Friday</h4>
          <p class="text-muted">For All Steak & Wine Selection</p>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="rounded img-fluid" src="{{asset('local.ina/img/team/diskTakeaway.jpeg')}}" alt="">
          <h4>Discount 20% Our Takeaway</h4>
          <p class="text-muted">Everyday</p>

        </div>
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam
          veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
    </div>  --}}
  </div>
</section>

{{-- <!-- Clients -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="{{asset('local.ina/img/logos/envato.jpg')}}" alt="">
</a>
</div>
<div class="col-md-3 col-sm-6">
  <a href="#">
    <img class="img-fluid d-block mx-auto" src="{{asset('local.ina/img/logos/designmodo.jpg')}}" alt="">
  </a>
</div>
<div class="col-md-3 col-sm-6">
  <a href="#">
    <img class="img-fluid d-block mx-auto" src="{{asset('local.ina/img/logos/themeforest.jpg')}}" alt="">
  </a>
</div>
<div class="col-md-3 col-sm-6">
  <a href="#">
    <img class="img-fluid d-block mx-auto" src="{{asset('local.ina/img/logos/creative-market.jpg')}}" alt="">
  </a>
</div>
</div>
</div>
</section> --}}

<!-- Contact -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">

        <h2 class="section-heading text-uppercase">Contact</h2>
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="https://wa.me/+6281367440886?text=Saya%20Ingin%20Bertanya%20Tentang%20ParkFoodBar.%20">
              <i class="fab fa-whatsapp"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.instagram.com/parkfoodbar/">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-12">

      </div>
    </div>
</section>



<!-- Modal 1 -->
@forelse ($products as $product)
<div class="portfolio-modal modal fade" id="portfolioModal{{$product->id}}" tabindex="-1" role="dialog"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase">Pengertian {{$product->name}}</h2><br>
              <img class="img-fluid d-block mx-auto" src="img/portfolio/sneaker.jpg" alt="">
              <div style="text-align: center;">
                <p><b>Apa itu {{$product->name}}?</b><br>
              </div>
              <div style="text-align: left;">
                {{$product->description}}
                </p>
              </div>

              <ul class="list-inline">
                <li>Date: {{$product->created_at}}</li>
                <li>Client: Threads</li>
                <li>Category: {{$product->category->name}}</li>
              </ul>
              <button class="btn btn-primary" data-dismiss="modal" type="button">
                <i class="fas fa-times"></i>
                Kembali</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@empty
data tidak ada..
@endforelse

@endsection