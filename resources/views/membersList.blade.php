<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roti Andolan - Roti Movement</title>
     <!-- favicon -->
     <link rel=icon href=/images/favicon.ico sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Slick -->
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="stylesheet" href="/css/slick-theme.css" />
    <!-- nice select -->
    <link rel="stylesheet" href="/css/nice-select.css">
    <!-- swiper -->
    <link rel="stylesheet" href="/css/swiper.min.css" />
    <!-- animated css -->
    <link rel="stylesheet" href="/css/animated-slider.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="/css/flaticon.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="/css/responsive.css">
    <style type="text/css">
          html {
            scroll-behavior: smooth;
          }
    </style>
</head>
<body style="height: 100vh">
    <!-- top navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="{{url('/admin/upload-blogs')}}">Upload Blogs</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              {{-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> --}}
            </li>
            <li class="nav-item">
              {{-- <a class="nav-link" href="#">Link</a> --}}
            </li>
            <li class="nav-item">
              {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> --}}
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log out</button>
          </form>
        </div>
      </nav>
    <!-- navbar end-->



    <!-- Members List -->
    <div class="row" style="position: relative; top:100px">
        <div class="col-12 mb-5 ml-5" style="font-weight:bolder">Members List</div>
        <div class="col-1"></div>
        <div class="col-10">
    <table  class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone No</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        @if ($members->count() >0)
        @foreach ($members as $index =>$member)
        <tbody>
            <tr>
              <th scope="row">{{$index +1}}</th>
              <td>{{$member->name?? 'NA'}}</td>
              <td>{{$member->phone??'NA'}}</td>
              <td>{{$member->email}}</td>
            </tr>
          </tbody>
        @endforeach
          @else
          <div>No data found</div>
        @endif

      </table>
        </div>
      <div class="col-1"></div>
    </div>
    <!-- list ends -->




    <script src="/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- popper -->
    <script src="/js/vendor/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="/js/vendor/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="/js/vendor/jquery.magnific-popup.js"></script>
    <!-- wow -->
    <script src="/js/vendor/wow.min.js"></script>
    <!-- animated slider -->
    <script src="/js/vendor/animated-slider.js"></script>
    <!-- nice select -->
    <script src="/js/vendor/nice-select.js"></script>
    <!-- owl carousel -->
    <script src="/js/vendor/owl.carousel.min.js"></script>
    <!-- Slick -->
    <script src="/js/vendor/slick.min.js"></script>
    <!-- Slick Animation -->
    <script src="/js/vendor/slick-animation.js"></script>
    <!-- counterup -->
    <script src="/js/vendor/jquery.counterup.min.js"></script>
    <!-- waypoint -->
    <script src="/js/vendor/waypoints.min.js"></script>
    <!-- imageloaded -->
    <script src="/js/vendor/imagesloaded.pkgd.min.js"></script>
    <!-- swiper -->
    <script src="/js/vendor/swiper.min.js"></script>
    <!-- isotope -->
    <script src="/js/vendor/isotope.pkgd.min.js"></script>
    <!-- members modal -->
    <script src="/js/homeMemberModal.js"></script>

    <script src="/js/vendor/jquery.classyloader.js"></script>

    <!-- main js -->
    <script src="/js/script.js"></script>
    <script src="/js/main.js"></script>
</body>
