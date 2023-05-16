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
    <link rel="stylesheet" href="assets/css/style.css">
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
            <h1 class="px-3 mt-3">Blog Project</h1>
            <p class="px-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quam quos impedit voluptas ad magnam deleniti exercitationem nobis? Vel sit id sapiente inventore assumenda rem quibusdam alias cumque adipisci reiciendis laudantium minus delectus consequatur itaque explicabo enim, libero excepturi porro.
            </p>
            <hr class="my-4 mx-3">
            <p class="px-3">It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead px-3">
              <a class="btn btn-primary btn" href="#" role="button">Watch</a>
            </p>
        </div>
        <div class="category bg-white rounded-3 mt-3">
            <ul class="d-flex justify-content-lg-between flex-lg-wrap flex-column flex-lg-row justify-content-center align-items-center py-2 px-3">
                @foreach($categories as $category)
                <li class=""><a href="#"><img class="rounded-3" src="{{ $category['cover'] }}" alt="food"><span class="fs-5 fw-bold text-capitalize cat-title">{{ $category['title'] }}</span></a></li>
                @endforeach
            </ul>
        </div>

        <div class="content-container bg-white rounded-2 my-3">
            <div class="topic px-2 pt-3">
                <div class="head d-flex justify-content-between align-items-center">
                    <h1>Posts</h1>
                    <div class="input-group" style="max-width: 300px;">
                        <input type="search" class="form-control rounded" placeholder="Enter Your Key word" aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-primary">search</button>
                    </div>
                </div>
                <hr>
            </div>
            <div class="content  px-2 py-2 mt-2  d-flex justify-content-between align-items-start flex-wrap">

                @foreach($posts as $post)
                <!-- start card -->
                <div class="card my-2" style="width: 18rem;">
                    <img src="/{{ str_replace('public','storage',$post->cover) }}" class="card-img-top" alt="post image">
                    <div class="card-body">
                      <h5 class="card-title fs-2 text-capitalize">{{ $post->title }}</h5>
                      <p class="cat-post px-2 py-1 text-capitalize rounded-2">{{ $post->category->title }}</p>
                      <a class="text-muted  d-inline-block" href="index.blade.php" style="font-size: 16px;"><i class="fa-solid fa-user"></i> Finn Wolfhard </a>
                      <hr>
                      <p class="card-text">{{ $post->summary }}</p>
                      <a href="{{ route('post.show',['id'=>$post]) }}" class="btn btn-primary">Go</a>
                    </div>
                </div>
                <!-- end card -->
                @endforeach
            </div>
            <hr class="mx-2">
            <nav aria-label="Page navigation example" class="pb-2">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
            </nav>

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
