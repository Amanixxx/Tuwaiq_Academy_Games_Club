<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
@include('layouts.head')
</head>


<body >
  <div class="container" dir="rtl" >
    {{-- new --}}

            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
              <div class="container px-4 px-lg-5">

                  <a class="navbar-brand" href="{{ route('welcome')  }}">
                    <img src="/img/logo-bg.png" alt="..." height="100">
                  </a>



                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                      Menu
                      <i class="fas fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ms-auto py-4 py-lg-0">
                          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('welcome') }}">الصفحة الرئيسية </a></li>
                          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('courses') }}">الدورات </a></li>
                          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('news') }}">الاخبار </a></li>
                          <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('about') }}">عنا </a></li>

                      </ul>
                      @if (Route::has('login'))
                      <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                          @auth
                          <h4 class="myname"dir="auto"> {{Auth::user()->name}}</h4>
                              <a class="btn btn-outline-dark" href="{{ url('/user/profile') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">حسابي </a>
                              <a class="btn btn-outline-dark"href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                تسجيل الخروج
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                          @else
                              <a class="btn btn-outline-dark" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white">تسجيل الدخول</a>

                              @if (Route::has('register'))
                                  <a  class="btn btn-outline-dark" href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500  text-white">تسجيل </a>
                              @endif
                          @endauth
                      </div>
                      @endif

                      {{-- end log in --}}
                  </div>
              </div>
          </nav>
  </div>
 <!-- Page Header-->

  <header class="masthead" style="background-image: url('/img/background.png')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-12 col-lg-8 col-xl-10">
                <div class="site-heading">
                    <h1 >نادي الالعاب الالكترونية </h1>
<br>
                    <span class="subheading">نادي رائد في تدريب وتطوير الكفاءات من طلاب وطالبات  جامعة الملك خالد </span>
                </div>
            </div>
        </div>
    </div>


</header>


 <main  class="py-4 " style="min-height= 100vh  display=flex flex-direction: column position: relative;
 min-height: 100vh;" >
@yield('content')
</main>


  <footer class="text-center text-white" style="background-color: #4b795678;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgb(211, 211, 211);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>



