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
    <title>blog</title>
</head>
<body class="mb-3">
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
            <div class="post mt-5 px-3">
            <a class="text-muted fs-5 px-5 mb-3 d-inline-block" href="index.blade.php"><i class="fa-solid fa-user"></i> Finn Wolfhard </a>
               <div class="head-post px-5 w-100 d-flex justify-content-between">
                <div class="title-side w-50">
                    <div class="post-title d-flex justify-content-between align-items-center">
                        <h1 class="fs-2">{{ $post->title }}</h1>
                        @auth
                        <div>
                            <a class="btn btn-warning" href="{{ route('manage.posts.edit',$post) }}">Edit</a>
                            <form action="{{ route('manage.posts.delete',$post) }}" method="post" class="d-inline mx-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </div>
                        @endauth
                        <p class=" bg-dark text-capitalize text-white px-2 py-1 rounded-2">{{ $post->category->title }}</p>
                    </div>
                    <hr>
                    <p class="fs-4">
                        {{ $post->summary }}
                    </p>
                </div>
                <div class="image-side w-50 text-center text-left">
                    <img style="max-width: 350px;" src="/{{ str_replace('public','storage',$post->cover) }}" alt="">
                </div>
               </div>
               <div class="body-post px-5 mt-5 fs-5">
                   {!! $post->body !!}
               </div>
            </div>
        </div>
        <hr class="text-white">
        <div class="footer text-center">
            <p class="text-capitalize">themes by @fahimi-eng</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
