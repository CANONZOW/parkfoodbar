<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ParkFoodBar - Dashboard</title>
    <link rel="stylesheet" href="{{asset('./local.admin/css/styles.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/2.1.0/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <style>
      /*Form fields*/
      .dataTables_wrapper select,
      .dataTables_wrapper .dataTables_filter input {
        color: #4a5568;
        /*text-gray-700*/
        padding-left: 1rem;
        /*pl-4*/
        padding-right: 1rem;
        /*pl-4*/
        padding-top: .5rem;
        /*pl-2*/
        padding-bottom: .5rem;
        /*pl-2*/
        line-height: 1.25;
        /*leading-tight*/
        border-width: 2px;
        /*border-2*/
        border-radius: .25rem;
        border-color: #edf2f7;
        /*border-gray-200*/
        background-color: #edf2f7;
        /*bg-gray-200*/
      }

      /*Row Hover*/
      table.dataTable.hover tbody tr:hover,
      table.dataTable.display tbody tr:hover {
        background-color: #ebf4ff;
        /*bg-indigo-100*/
      }

      /*Pagination Buttons*/
      .dataTables_wrapper .dataTables_paginate .paginate_button {
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        border: 1px solid transparent;
        /*border border-transparent*/
      }

      /*Pagination Buttons - Current selected */
      .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #667eea !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
      }

      /*Pagination Buttons - Hover */
      .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        color: #fff !important;
        /*text-white*/
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        /*shadow*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #667eea !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
      }

      /*Add padding to bottom border */
      table.dataTable.no-footer {
        border-bottom: 1px solid #e2e8f0;
        /*border-b-1 border-gray-300*/
        margin-top: 0.75em;
        margin-bottom: 0.75em;
      }

      /*Change colour of responsive icon*/
      table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
      table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
        background-color: #667eea !important;
        /*bg-indigo-500*/
      }

    </style>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap4.min.js"></script>


    <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>

  </head>

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


  <body>

    @include('component.admin.sidebar-main')

    <main class="content flex-fill">
      @include('component.admin.navbar-main')

      @yield('admin-content')
    </main>

    @stack('modals')

    @livewireScripts

    {{ $script ?? '' }}

    <script src="{{asset('./local.admin/js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
  </body>

</html>
