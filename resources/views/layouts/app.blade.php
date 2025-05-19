<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fixed Header with Sliding Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding-top: 70px; /* space for fixed header */
      transition: margin-left 0.3s;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1030;
      background: #fff;
      /* border: 2px solid red; */
      padding: 1rem;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      top: 70px; /* height of header */
      left: -250px;
      background-color: #f8f9fa;
      /* border-right: 2px solid red; */
      transition: left 0.3s;
      z-index: 1020;
      padding: 1rem;
    }

    .sidebar.active {
      left: 0;
    }

    .content-wrapper {
      transition: margin-left 0.3s;
    }

    .content-wrapper.shifted {
      margin-left: 250px;
    }

    main, footer {
      /* border: 2px solid red; */
      padding: 1rem;
      margin: 1rem;
    }
  </style>

    <title>Fixed Header with Sliding Sidebar</title>

  <!-- Your Laravel asset CSS files -->
  <link rel="stylesheet" href="{{ asset('src/assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('src/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('src/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('src/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('src/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('src/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
  <link rel="stylesheet" href="{{ asset('src/assets/js/select.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('src/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/assets/css/style.css') }}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('src/assets/images/favicon.png') }}" type="image/png">

  <!-- Bootstrap CSS (optional, if you want to keep it) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />


      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        
</head>
<body>

 @include('layouts.navigation')


  <!-- Main content -->
  <div class="content-wrapper" id="content">
    <main>
        @include('layouts.mainpanel')
    </main>

    <footer>
      <!-- Footer section -->
         @include('layouts.footersection')
    </footer>
  </div>

  <script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      content.classList.toggle('shifted');
    });
  </script>

    <!-- Vendor JS -->
  <script src="{{ asset('src/assets/vendors/js/vendor.bundle.base.js') }}"></script>

  <!-- Plugin JS for This Page -->
  <script src="{{ asset('src/assets/vendors/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('src/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('src/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
  <script src="{{ asset('src/assets/js/dataTables.select.min.js') }}"></script>

  <!-- Core Template JS -->
  <script src="{{ asset('src/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('src/assets/js/template.js') }}"></script>
  <script src="{{ asset('src/assets/js/settings.js') }}"></script>
  <script src="{{ asset('src/assets/js/todolist.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('src/assets/js/jquery.cookie.js') }}"></script>
  <script src="{{ asset('src/assets/js/dashboard.js') }}"></script>


</body>
</html>
