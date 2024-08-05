<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        padding-top: 56px; /* Adjust this value if needed to fit your navbar height */
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <div >
        <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark fixed-top mb-3" style="background-color: #5D8F9A; color: white;">
            <div class="container">
                <a href="" class="navbar-brand"> Hallo Hilda </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="naff">
                    <ul class="navbar-nav me-auto">
                        <li class=" nav-item ">
                            <a href="#scrollspyHome" class="nav-link">Home</a>
                        </li>
                        <li class=" nav-item ">
                            <a href="#scrollspyAletter" class="nav-link">A letter</a>
                        </li>
                        <li class=" nav-item ">
                            <a href="#scrollspyWish" class="nav-link">Wish</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Scroll -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <!-- body tengah -->
        <div id="scrollspyHome" class="container text-center">
            <button type="button" class="btn btn-light" onclick="document.getElementById('background-audio').play()">press this first</button>
            <audio id="background-audio" src="assets\happy-birthday-to-you-piano-version-13976.mp3" type="audio/mp3"></audio>
            <img src="<?php echo ("assets\birthday party cake.png") ?>" width="804">
            <img src="<?php echo ("assets\lettering happy birthday.png") ?>" style="padding: 10px;" width="529.39">
            <img src="<?php echo ("assets\Group 1.png") ?>" style="padding: 40px;" width="1000">
        </div>

        <!-- about u -->
        <div id="scrollspyAletter" class="container text-center" style="color: black; opacity: 0.7;">
            <h3 class="text-center py-3 mt-5">A Letter</h3>
        </div>
        <hr style="border: 0; height: 4px; background:#5D8F9A ;">

        <style>
        .carousel-container {
            max-width: 800px; /* Lebar maksimal carousel */
            max-height: 500px; /* Tinggi maksimal carousel */
            margin: auto; /* Menempatkan carousel di tengah */
        }

        .carousel-inner {
            height: 100%; /* Sesuaikan tinggi konten carousel */
        }
        </style>

        <div class="grid gap-3">
            <div class="p-2 g-col-6">
                <div class="d-inline-flex p-2">
                    <div id="carouselExampleAutoplaying" class="carousel slide carousel-container" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/IMG_20220401_113644.jpg" class="d-block w-100 carousel-image" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/IMG_20210911_112305.jpg" class="d-block w-100 carousel-image" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/IMG_20221216_145759_1.jpg" class="d-block w-100 carousel-image" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="mx-5 my-auto">
                        <p>i don't know how to describe you, cause i think i dont really know u. why do i say that? because i think there are many things, many sadnesses that you still haven't told me but that's fine .
                        this is how i see you, you are a very hard worker and u are such a funny person. you are a good person i love when i talk to you cause u are a good listener.
                        and most importantly you are a <b>good friend</b> <br> And u know i'm very glad to know u in my life. i'm happy can be ur friends in this life<br> <b>let's be friends again in antoher life</b></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- wish -->
        <div id="scrollspyWish" class="container text-center" style="color: black; opacity: 0.7;">
            <h3 class="text-center py-3 mt-5">Wish</h3>
        </div>
        <hr style="border: 0; height: 4px; background:#5D8F9A ;">

        <div class="container text-center mx-auto">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="assets\1643264162497.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">wish u always can be a kind person</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="assets\1643264128652.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">wish ur dream come true</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="assets\IMG_20220827_134036.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">wish u can be happier than last year</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <video class="video-responsive" controls autoplay muted loop>
                            <source src="assets\lv_7039245808666955009_20220128112321.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="card-body">
                            <p class="card-text">and all good things come to u</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div style="background-color: #5D8F9A; color: white;">
        <footer class="text-center py-3 mt-5">
            <div class="">from ur buddy zia </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
