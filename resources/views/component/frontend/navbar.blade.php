<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">PARK FOOD BAR</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="market">Market</a>
        </li>
        {{--  <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>  --}}
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </li>


        @auth
        @if (Auth::user()->roles == 'ADMIN')
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="dashboard">Dashboard</a>
        </li>
        @endif

        <form action="{{route('logout')}}" method="POST">
          @csrf
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">

              Logout</a>
          </li>
        </form>

        </form>

        @endauth
        @guest

        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="login">Login</a>
        </li>
        @endguest


      </ul>
    </div>
  </div>
</nav>