<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PARK FOOD BAR</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('local.ina/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('/local.ina/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
      type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <style>
      .card {
        height: 300px;
        width: 500px;
        border-radius: 20px;
        background-image: linear-gradient(to top right, #01040e, #03091b);
        padding: 25px;
        padding-right: 35px;
        padding-left: 35px;

        color: #fff;
        position: relative;
        overflow: hidden;
        cursor: pointer;
      }

      .card .line-1 {
        height: 200px;
        width: 200px;
        display: flex;
        clip-path: polygon(50% 0%, 15% 100%, 78% 100%);
        opacity: 0.6;
        background: #dbe0ee;
        position: absolute;
        bottom: 90px;
        right: -30px;
        transform: rotate(45deg);
        animation: anim 3s infinite;


      }

      .card .line-2 {
        height: 300px;
        width: 300px;
        display: flex;
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        opacity: 0.4;
        background: #f8f8f8;
        position: absolute;
        top: -30px;
        right: -30px;
        transform: rotate(70deg);
        animation: anim 3s infinite;
        animation-delay: 2s;
      }

      .card .line-3 {
        height: 200px;
        width: 200px;
        display: flex;
        clip-path: polygon(100% 0, 0 55%, 78% 100%);
        opacity: 0.3;
        background: #f5f5f5;
        position: absolute;
        top: -30px;
        right: -30px;
        transform: rotate(70deg);
        animation: anim 3s infinite;
        animation-delay: 4s;
      }

      @keyframes anim {
        from {
          opacity: 0.3;
          transform: rotate(0deg);

        }

        to {
          opacity: 0.8;
          transform: rotate(180deg);

        }
      }



      .visa h3 {
        font-size: 40px;
        font-family: 'Poppins', medium;

      }

      .visa span {
        margin-left: 2px;
        font-family: 'Poppins', serif;
        font-size: 10px;
        margin-bottom: 0;
        top: 0
      }

      .visa img {
        width: 50px;
      }

      .card .visa i {
        font-size: 50px;

      }

      .tick {
        height: 25px;
        width: 25px;
        background-color: #7587c5;
        border-radius: 7px;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 15px;
        margin-top: 6px;
      }

      .tick i {
        transition: all 1s;
      }

      .card:hover .tick i {

        transform: rotate(360deg);
      }

      .top-row {
        display: flex;
        justify-content: space-between;

        position: relative;

      }

      .bottom-row {
        display: flex;
        flex-direction: row;
        align-items: center;
        position: absolute;
        bottom: 20px;

      }

      .bottom-row .dots {
        display: flex;
        flex-direction: row;
        margin-right: 7px;
      }

      .bottom-row .dots span {
        height: 6px;
        width: 6px;
        background-color: rgb(224, 228, 0);
        border-radius: 50%;
        margin: 0 3px;
      }

      .bottom-row .number {
        font-size: 20px;
        font-weight: 600;
        color: #b3e231
      }

      .bottom-row .left {
        display: flex;
        flex-direction: row;
        margin-left: 250px;
      }

    </style>



    <!-- Custom styles for this template -->
    <link href="{{asset('/local.ina/css/agency.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    @include('component.frontend.navbar')

    <!-- Header -->
    @include('component.frontend.header')

    {{-- Content User  --}}
    @yield('content-user')
    {{-- Content user  --}}



    <!-- Footer -->
    @include('component.frontend.footer')





    <!-- Bootstrap core JavaScript -->
    <script src="{{('/local.ina/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{('local.ina/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{('local.ina/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{('local.ina/vendor/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{('local.ina/vendor/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{('local.ina/js/agency.min.js')}}"></script>
    @include('sweetalert::alert')
  </body>


</html>