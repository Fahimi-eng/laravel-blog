<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free blog project">
    <meta name="keywords" content="HTML, CSS, JavaScript, php, blog, pure php">
    <meta name="author" content="fahimi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <title>blog</title>
</head>
<body class="mb-5">
    <div class="container">
        <div class="header d-flex justify-content-between bg-primary pt-2 bg-transparent text-white border-bottom">
            <div class="logo">
                <!-- <img src="" alt=""> -->
                <a href="{{ route('index') }}" class="fs-1 fw-bold logo text-decoration-none text-white">Logo</a>
            </div>
            <ul class="d-flex justify-content-around list-unstyled">
                <li class="fs-4 fw-medium text-capitalize">
                    <a class="text-decoration-none text-white mx-3" href="{{ route('manage.index') }}">Manage</a>
                </li>
                <li class="fs-4 fw-medium text-capitalize">
                    <a class="text-decoration-none text-white mx-3" target="_blank" href="https://github.com/Fahimi-eng">Github</a>
                </li>
            </ul>
        </div>

        <div class="jumbotron mt-3 bg-white rounded-2 px-0 py-2 pt-0">
            <div class="banner text-center pt-3"><span class="fs-2 text-bg-light px-2 rounded-2 mt-5">Fahimi-Eng</span></div>
            <div class="head d-flex justify-content-between mx-3 mt-2 align-items-center">
                <h1 >Management  <small class="fs-5"><i class="fa-solid fa-angle-right"></i> Posts <i class="fa-solid fa-angle-right"></i> New Post</small></h1>
                <p>Welcome, Have a good day</p>
            </div>
            <hr class="mx-2">
            <nav class="d-flex justify-content-between align-items-center">
                <ul class="manage-menu d-flex justify-content-start align-items-center flex-wrap p-0 px-2">
                    <li class="mx-2">
                        <a href="{{ route('manage.index') }}"><i class="fa-solid fa-gauge-high"></i> Dashboard</a>
                    </li>
                    <li class="mx-2 menu-active">
                        <a href="{{ route('manage.posts') }}"><i class="fa-solid fa-clone"></i> Posts</a>
                    </li>
                    <li class="mx-2">
                        <a href="#"><i class="fa-solid fa-user"></i> Account</a>
                    </li>
                </ul>
                <ul class="p-0 px-2">
                   <li>
                    <a href="#" class="logout mx-2 bg-danger-subtle">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        Logout
                       </a>
                   </li>
                </ul>
            </nav>
        </div>

        @if (count($errors) > 0)
        <div class="alert-box ">
        @foreach($errors->all as $error)
                {{ "dahanet servidce kar kon dg" }}
            <div class="alert alert-primary" role="alert">
                {{ $error }}
            </div>
        @endforeach
        </div>
        @endif
            {{--            <div class="alert alert-secondary" role="alert">--}}
            {{--                This is a secondary alert—check it out!--}}
            {{--            </div>--}}
            {{--            <div class="alert alert-success" role="alert">--}}
            {{--                This is a success alert—check it out!--}}
            {{--            </div>--}}
            {{--            <div class="alert alert-danger" role="alert">--}}
            {{--                This is a danger alert—check it out!--}}
            {{--            </div>--}}
            {{--            <div class="alert alert-warning" role="alert">--}}
            {{--                This is a warning alert—check it out!--}}
            {{--            </div>--}}


        <div class="form bg-white mt-3 p-3 rounded-3">
            <h2>Create New Post</h2>
            <hr>
            <form action="{{ route('manage.posts.store') }}" method="post" class="" enctype="multipart/form-data">
            @csrf
                @method('POST')
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input required name="title" type="title" class="form-control" id="title"  placeholder="Enter Title">
                  <small id="emailHelp" class="form-text text-muted">A suitable title will help your post to be more visible </small>
                </div>

                <div class="form-group mt-3">
                  <label for="category">Thematic category</label>
                  <select required name="category" class="form-control" id="category">
                    @foreach($categories as $category)
                    <option class="text-capitalize" value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group mt-3">
                    <label for="summary">Enter Summary of Your Post</label>
                    <textarea name="summary" class="form-control" id="summary" rows="2" placeholder="Type Here ..."></textarea>
                </div>

                <div class="form-group mt-3  ">
                    <label for="cover">Select the Post Cover:</label>
                    <input required name="cover" type="file" class="form-control-file mx-5 border  rounded-2 px-2 py-1" id="cover">
                </div>

                <div class="form-group mt-3">
                    <textarea required name="body"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>



        <hr class="text-white">
        <div class="footer text-center">
            <p class="text-capitalize">themes by @fahimi-eng</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
    <script src="assets/js/main.js"></script>
</body>
</html>
