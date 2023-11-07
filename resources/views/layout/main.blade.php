<!DOCTYPE html>
<html lang="en">

<head>

    @include('layout.style')

</head>

<body>

    <!-- ======= Header ======= -->
        @include('require.navbar')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('require.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('content')
        
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('require.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layout.script')

</body>

</html>
