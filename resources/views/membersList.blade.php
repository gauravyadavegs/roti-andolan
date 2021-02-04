<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roti Andolan - Roti Movement</title>
    <!-- favicon -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- fontawesome -->
    <!-- responsive Stylesheet -->

</head>

<body style="height: 100vh">
    <!-- top navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="col-12 mb-5">
            <div class="col-9"> </div>
            <script src="/js/vendor/jquery-2.2.4.min.js"></script>
            <div class="col-2"> <button style="margin-left: 75px" id="excel_button" type="submit"
                    class="btn btn-success">Success</button></div>
        </div>
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped ">
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
    <!-- bootstrap -->
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/main.js"></script>
    <script>
        $(document).on('click', '#excel_button', function (event) {
            $.ajax({
                url: "members-list/download-members-list",
                type: "GET",
            }).done(function (data, textStatus, errorThrown) {
                var tempLink = document.createElement("a");
                    tempLink.style.display = "none";
                    tempLink.href = data.file;
                    tempLink.setAttribute("download",data.name);
                    if (typeof tempLink.download === "undefined") {
                        tempLink.setAttribute("target", "_blank");
                    }
                    document.body.appendChild(tempLink);
                    tempLink.click();
                    document.body.removeChild(tempLink);
            }).fail(function (jqXHR, textStatus, errorThrown) {
                swal("Error!", "something went wrong")
            })
        })

    </script>
</body>
