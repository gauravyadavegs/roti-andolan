<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg-light">
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

    <form method="POST" action="{{url('/admin/create-upload-blogs')}}" enctype="multipart/form-data" , style="padding: 10%;">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Choose File</label>
            <input type="file" class="form-control-file" name="blog_image" required >
        </div>

        <div class="form-group" style="margin-top: 5;">
            <label for="exampleFormControlTextarea1">Header</label>
            <input class="form-control" required  name="header" rows="3"></input>
          </div><div class="form-group" style="margin-top: 5;">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" required id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
          </div>
        <button type="submit" class="btn btn-dark" style="margin-left:40%;margin-top: 5%; width: 10%;">Submit</button>
      </form>
</body>
<script src="/js/vendor/bootstrap.min.js"></script>
</html>
