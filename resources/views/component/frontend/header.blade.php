<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="container">
        <div class="row">
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="/cari" method="GET" id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="cari" class="form-control" id="name" value="{{request('cari')}}" type="text"
                      style="text-align:center" placeholder="Find Your Membership" required="required"
                      data-validation-required-message="Please enter your number membership.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" value="cari" class="btn btn-primary   text-uppercase" type="submit">
                    Find My Card Member</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <section id="" class="rounded p-4 m-5 ">


        @forelse ($membershipsearch as $membership)
        @if (request('cari'))
        <div class="container">
          <div class="row pb-4">
            <div class="col-lg-12 text-center">
              <h3 class="section-heading text-uppercase">Hello!, {{$membership->nickname}}</h3>
              <div class="container d-flex justify-content-center ">
                <div class="card col-lg-7 ">
                  <div class="top-row">
                    <div class="visa text-left">
                      <h4>PARK FOOD BAR</h4>
                      <span>This Card is Issude By PARK. Food+Bar and can be used in PARK. premises.</span> <br>
                      <span class="pl-2">- This card not transferble.</span> <br>
                      <span class="pl-2">- Membership card is valid for 6 months. and can be renewed if it
                        expires.</span> <br>
                      <span class="pl-2">- Present this card when using our services.</span> <br>
                      <span class="pl-2">- if lost. please notify us immediately.</span> <br>
                      <span class="pl-2">- this card remains property of PARK. Food + Bar, and can be canccelled</span>
                      <br>
                      <span class="pl-3">anytime with regrads of intruding our system.</span> <br>


                    </div>


                  </div>
                  <div class="bottom-row">
                    <div class="dots">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                    <div class="dots ">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                    <div class="dots">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                    <span class="number">{{$membership->number_card}}</span>
                  </div>
                  <div class="bottom-row pl-3">
                    <div class="left d-flex justify-content-between">
                      <span class="pr-3">EXPIRED</span>
                      <span class="number">{{$membership->date_expired}}</span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          @endif
          @empty
          @endforelse
          <div class="intro-lead-in">Beergarden, Wine Shop & Bistro</div>
          <div class="intro-heading text-uppercase">Operational Hours 11.00 - 02.00</div>
      </section>

    </div>
  </div>

</header>