<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
   <?php include 'nav.php' ?>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/img3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Los Angles</h5>
                    <p>We Enjoyed lot.</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="imgs/img1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Antarcita</h5>
                    <p>Antartica Memories</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="imgs/img2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" style="font-weight: bolder">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="cl-lg-6 col-md-6 col-12">
                    <img src="imgs/img4.jpeg" style="width: 35rem;" class="img-fluid " alt="photo">

                </div>
                <div class="cl-lg-6 col-md-6 col-12">
                    <h3 class="text-center my-5">Shimla</h3>
                    <p style="color: black;">Shimla, also known as Simla, is the capital city of the northern Indian
                        state of Himachal Pradesh. The city is up in the mountains at around 2,200 metres (approximately
                        7,234 feet). Shimla is a popular tourist destination in India.

                        In 1864, Shimla was made the summer capital of British India. After Indian independence, the
                        city became the capital of Punjab and was later named the capital of Himachal Pradesh. It is the
                        main commercial, cultural and educational centre of Himachal Pradesh. </p>
                    <a href="about.php" class="btn btn-primary">know More</a>
                </div>

            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="mx-5">
            <h2 class="text-center " style="font-weight: bolder;">Services</h2>
        </div>
        <div class="container-fluid my-5">
            <div class="row">
                <div class="cl-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="imgs/img5.jpeg" class="img-fluid" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Ridge, Shimla</h5>
                            <p class="card-text">The Ridge may well be defined as the heart of Shimla in terms of
                                location and tourist attractions. This Shimla tourist spot is actually a wide-open
                                street that runs along the Mall Road from east to west and connects it to the famous
                                Scandal Point. This small hill station promises you panoramic
                            </p>
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>

                <div class="cl-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="imgs/img6.jpg" class="img-fluid" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> Kufri, Shimla</h5>
                            <p class="card-text">A ride of about 40 minutes from the city center will bring you to
                                Kufri, another must-visit place in the region. Located at an elevation of 8607 ft., this
                                small hill station promises you panoramic views of the surrounding snow-capped
                                mountains. </p>
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>

                <div class="cl-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="imgs/img7.webp" class="img-fluid" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mall Road, Shimla</h5>
                            <p class="card-text">When it comes to Shimla places to visit for couples, you can’t give a
                                miss to the Mall Road. Otherwise, also, the place is a hip and happening location in
                                this hill station and attracts visitors of all ages.</p>
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="my-5">
        <div class=" mx-5">
            <h2 class="text-center my-2" style="font-weight: bolder;"> Gallery </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <div class="card">
                        <img src="imgs/The Ridge Shimla.jpg" class="card-img-top  " class="img-fluid mt-5" alt="...">
                        <h3 class="text-center my-4" style="font-weight:bold ;"> The Ridge Shimla</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <div class="card">
                        <img src="imgs/Jakhoo Hill and Temple, Shimla.jpg" class="card-img-top  " class="img-fluid mt-5"
                            alt="...">
                        <h3 class="text-center my-4" style="font-weight:bold ;"> Jakhoo Hill and Temple, Shimla</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <div class="card">
                        <img src="imgs/Mall Road, Shimla.jpg" class="card-img-top  " class="img-fluid mt-5" alt="...">
                        <h3 class="text-center my-4" style="font-weight:bold ;"> Mall Road, Shimla</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <div class="card">
                        <img src="imgs/Kalka-Shimla Railwa, Shimla.jpg" class="card-img-top " class="img-fluid mt-5"
                            alt="...">
                        <h3 class="text-center my-4" style="font-weight:bold ;"> Kalka-Shimla Railwa, Shimla</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <div class="card">
                        <img src="imgs/Kufri, Shimla.jpg" class="card-img-top  " class="img-fluid mt-5" alt="...">
                        <h3 class="text-center my-4" style="font-weight:bold ;"> Kufri, Shimla</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 my-5">
                    <div class="card">
                        <img src="imgs/Christ Church, Shimla.jpg" class="card-img-top  " class="img-fluid mt-5"
                            alt="...">
                        <h3 class="text-center my-4" style="font-weight:bold ;">Christ Church, Shimla</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="container-fluid">
        <form action="userinfo.php" method="post">
            <div class="form-group w-50 m-auto">
                <label style="font-weight: bold;">Name</label>
                <input type="text" name="Name" id="Name" class="form-control  " autocomplete="off">
            </div>
            <div class="form-group w-50 m-auto">
                <label style="font-weight: bold;">Email</label>
                <input type="text" name="Email" id="Email" class="form-control ">
            </div>
            <div class="form-group w-50 m-auto">
                <label style="font-weight: bold;">Phone</label>
            </div>
            <div class="form-group w-50 m-auto">
 
                <input type="text" name="Phone" id="Phone" class="form-control ">
            </div>
            <div class="form-group w-50 m-auto">

                <label style="font-weight: bold;">Comments</label>
                <textarea name="Comments" id="Comments" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary  my-4"> Submit</button>
            </div>

            </div>
        </form>
    </section>
<script src="/js/index.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
     -->
</body>

</html>