<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Document</title>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace("active-slider", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active-slider";
        }
    </script>
</head>

<body>
    <div class="">
        <div class="img-header"><image class=" ml-auto d-inline-block w-100" src="image/top_bn.png"></image></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <image class="logo-header col-12 col-lg-2 d-none d-lg-block" src="image/logo.png"></image>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="nav_bar">
                    <div class="nav_bar-btn"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg></div>
                    <div class="nav_bar-subbtn">
                        <a class="nav_bar-searchbtn"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg></a>
                        <div class="nav_bar-userbtn"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"></path></svg></div>
                    </div>
                </div>

                <div class="collapse navbar-collapse col-12 col-lg-12" id="navbarNavDropdown">
                    <ul class="navbar-nav ps-5 ms-5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang ch???</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gi???i thi???u</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                S???n ph???m
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chia s??? k?? n??ng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">H??? th???ng c???a h??ng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Li??n h???</a>
                        </li>
                    </ul>
                    <div class="navigation-bottom mt-auto mt-lg-0 ms-100 ps-5 ms-5">
                        <nav class="navbar navbar-light bg-light p10">
                            <div class="container-fluid">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="T??m ki???m"
                                        aria-label="Search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-search pt-2" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="dropdown ">
                        <button class="btn btn-outline-secondary m-3 " type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </button>
                        <div class="dropdown-menu pop_login position-absolute p-1 m-1 text-center rounded active"
                            aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="./login.php">????ng nh???p</a>
                            <a class="dropdown-item" href="./signup.php">????ng k??</a>
                        </div>
                    </div>
                    <button class="btn btn-outline-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                            width="25" height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>

    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/slide-img1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/slide-img2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/slide-img1.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row p-5">

        <div class="col-lg-9 col-md-9 col-sm-12 border">
            <div>
                <h2 class="border-bottom border-danger d-inline pe-5 ps-1 float-start">V??n h???c n???i ti???ng</h2>
                <h6 class="d-inline pe-2 float-end mt-3 zoom">Kinh doanh b??n h??ng</h6>
                <h6 class="d-inline pe-2 float-end mt-3 zoom">V??n h???c Vi???t Nam</h6>
                <h6 class="d-inline pe-2 float-end mt-3 zoom">K?? n??ng h?????ng nghi???p</h6>
            </div>

            <div class="">
                <a href="#" title="V??n h???c n???i ti???ng">
                    <img width="1050" class="lazy" style="image-rendering: pixelated;" alt="V??n h???c n???i ti???ng"
                        src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/bn_pr_3.png?1634809483920">
                </a>
            </div>

            <div>
                <div>
                    <div id="" class="carousel slide" data-bs-ride="">
                        <div class="">
                        </div>
                        <div class="mt-2  p-2">
                            <div class=" w-100">

                                <!-- Full-width images with number and caption text -->
                                <div class="mySlides" style="display: block;">
                                    <div class="slide-container">
                                        <div class="border zoom p-3 d-inline-flex">
                                            <div class="display_detail_image"><a href=""><img
                                                        src="./image/thiet-ke-khong-ten.png" class="img-fluid mb-2"
                                                        width="223px" alt=""></a></div>
                                            <div class="display_detail">
                                                <h5>?????ng ??i qu?? v???i</h5>
                                                <div>T??c gi???: Rando Kim</div>
                                                <span class="special-price font-weight-bold">79.000???</span>
                                                <del class="old-price"> 100.000???</del>
                                                <h6>Chi ti???t</h6>
                                            </div>
                                        </div>

                                        <div class="border zoom p-3 d-inline-flex">
                                            <div class="display_detail_image"><a href=""><img
                                                        src="./image/thiet-ke-khong-ten.png" class="img-fluid mb-2"
                                                        width="223px" alt=""></a></div>
                                            <div class="display_detail">
                                                <h5>?????ng ??i qu?? v???i</h5>
                                                <div>T??c gi???: Rando Kim</div>
                                                <span class="special-price font-weight-bold">79.000???</span>
                                                <del class="old-price"> 100.000???</del>
                                                <h6>Chi ti???t</h6>
                                            </div>
                                        </div>

                                        <div class="border zoom p-3 d-inline-flex ">
                                            <div class="display_detail_image"><a href=""><img
                                                        src="./image/thiet-ke-khong-ten.png" class="img-fluid mb-2"
                                                        width="223px" alt=""></a></div>
                                            <div class="display_detail">
                                                <h5>?????ng ??i qu?? v???i</h5>
                                                <div>T??c gi???: Rando Kim</div>
                                                <span class="special-price font-weight-bold">79.000???</span>
                                                <del class="old-price"> 100.000???</del>
                                                <h6>Chi ti???t</h6>
                                            </div>
                                        </div>

                                        <div class="border zoom p-3 d-inline-flex">
                                            <div class="display_detail_image"><a href=""><img
                                                        src="./image/thiet-ke-khong-ten.png" class="img-fluid mb-2"
                                                        width="223px" alt=""></a></div>
                                            <div class="display_detail">
                                                <h5>?????ng ??i qu?? v???i</h5>
                                                <div>T??c gi???: Rando Kim</div>
                                                <span class="special-price font-weight-bold">79.000???</span>
                                                <del class="old-price"> 100.000???</del>
                                                <h6>Chi ti???t</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="mySlides">
                                    <div class="border zoom p-3 d-inline-flex">
                                        <div class="display_detail_image"><a href=""><img
                                                    src="./image/thiet-ke-khong-ten.png" class="img-fluid mb-2"
                                                    width="210px" alt=""></a></div>
                                        <div class="display_detail">
                                            <h5>?????ng ??i qu?? v???i</h5>
                                            <div>T??c gi???: Rando Kim</div>
                                            <span class="special-price font-weight-bold">79.000???</span>
                                            <del class="old-price"> 100.000???</del>
                                            <h6>Chi ti???t</h6>
                                        </div>
                                    </div>

                                    <div class="border zoom p-3 d-inline-flex">
                                        <div class="display_detail_image"><a href=""><img
                                                    src="./image/thiet-ke-khong-ten.png" class="img-fluid mb-2"
                                                    width="210px" alt=""></a></div>
                                        <div class="display_detail">
                                            <h5>?????ng ??i qu?? v???i</h5>
                                            <div>T??c gi???: Rando Kim</div>
                                            <span class="special-price font-weight-bold">79.000???</span>
                                            <del class="old-price"> 100.000???</del>
                                            <h6>Chi ti???t</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="mySlides">
                                    <div class="border zoom p-3 d-inline-flex">
                                        <div class="display_detail_image"><a href=""><img
                                                    src="./image/thiet-ke-khong-ten.png" class="img-fluid mb-2"
                                                    width="210px" alt=""></a></div>
                                        <div class="display_detail">
                                            <h5>?????ng ??i qu?? v???i</h5>
                                            <div>T??c gi???: Rando Kim</div>
                                            <span class="special-price font-weight-bold">79.000???</span>
                                            <del class="old-price"> 100.000???</del>
                                            <h6>Chi ti???t</h6>
                                        </div>
                                    </div>
                                </div>

                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>

                            <!-- The dots/circles -->
                            <div style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <div id="slibar" class="col-lg-3 col-md-0 col-sm-0 border">
            <h3 class="border-bottom border-danger">C??NG ????N ?????C</h3>
            <div class="row border m-2 p-2 zoom">
                <div class="col-lg-5"><a href=""><img src="./image/cover-virgo.png" class="img-fluid mb-2"
                            width="1250px" alt=""></a></div>
                <div class="col-lg-7">
                    <h5>?????ng ??i qu?? v???i</h5>
                    <div>T??c gi???: Rando Kim</div>
                    <div class="product-price-slibar">
                        <span class="special-price font-weight-bold">79.000???</span>
                        <del class="old-price"> 100.000???</del>
                    </div>
                    <h6>Chi ti???t</h6>
                </div>
            </div>


            <div class="row border m-2 p-2 zoom">
                <div class="col-lg-5"><a href=""><img src="./image/cover-virgo.png" class="img-fluid mb-2"
                            width="1250px" alt=""></a></div>
                <div class="col-lg-7">
                    <h5>?????ng ??i qu?? v???i</h5>
                    <div>T??c gi???: Rando Kim</div>
                    <div class="product-price-slibar">
                        <span class="special-price font-weight-bold">79.000???</span>
                        <del class="old-price"> 100.000???</del>
                    </div>
                    <h6>Chi ti???t</h6>
                </div>
            </div>

            <div class="row border m-2 p-2 zoom">
                <div class="col-lg-5"><a href=""><img src="./image/cover-virgo.png" class="img-fluid mb-2"
                            width="1250px" alt=""></a></div>
                <div class="col-lg-7">
                    <h5>?????ng ??i qu?? v???i</h5>
                    <div>T??c gi???: Rando Kim</div>
                    <div class="product-price-slibar">
                        <span class="special-price font-weight-bold">79.000???</span>
                        <del class="old-price"> 100.000???</del>
                    </div>
                    <h6>Chi ti???t</h6>
                </div>
            </div>

            <div class="row border m-2 p-2 zoom">
                <div class="col-lg-5"><a href=""><img src="./image/cover-virgo.png" class="img-fluid mb-2"
                            width="1250px" alt=""></a></div>
                <div class="col-lg-7">
                    <h5>?????ng ??i qu?? v???i</h5>
                    <div>T??c gi???: Rando Kim</div>
                    <div class="product-price-slibar">
                        <span class="special-price font-weight-bold">79.000???</span>
                        <del class="old-price"> 100.000???</del>
                    </div>
                    <h6>Chi ti???t</h6>
                </div>
            </div>


        </div>
    </div>

    <!-- <div class="pb-lg-5 pt-lg-5 pt-3 pb-3">
        <div class="container border border-dark float-left">
            <div class="col-12 col-xl-9 d-inline check border-bottom border-dark">
                <h2 class="d-inline">V??n h???c n???i ti???ng</h2>
                <p class="d-inline ms-3">
                    <a href="#">Kinh doanh b??n h??ng</a>
                </p>
                <p class="d-inline ms-3">
                    <a href="#">V??n h???c Vi???t Nam</a>
                </p>
                <p class="d-inline ms-3">
                    <a href="#">K?? n??ng h?????ng nghi???p</a>
                </p>
                <div class="bn_product mt-4 mb-5">
                    <a href="#" title="V??n h???c n???i ti???ng">
                        <img class="lazy" style="image-rendering: pixelated;" alt="V??n h???c n???i ti???ng" src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/bn_pr_3.png?1634809483920">
                    </a>
                </div>   
                <a href="#" class="" title="Virgo">
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                    <div class="d-inline m-2">
                        <img width="230px" src="//bizweb.dktcdn.net/thumb/1024x1024/100/415/471/products/cover-virgo.jpg?v=1612348064000">
                    </div>
                </a>
            </div>
            
            <div class="float-right">C??ng ????n ?????c</div>
            
        </div>

        
    </div> -->

    <div class="about w-auto m-5">
        <div class="position-relative h-100 w-auto b_tx w-100">
            <div class="row d-flex justify-content-end align-items-center">
                <div class="col-lg-6 col-12 d-flex justify-content-center flex-column h-100 bg">
                    <div class="title_s text-uppercase font-weight-bold">
                        ????ng k?? ?????i l??
                    </div>
                    <div class="content">
                        B???n c?? kh??? n??ng kinh doanh v?? ??ang t??m ki???m s???n ph???m.<br>
                        Tr??? th??nh ?????i l?? c???a Mew BS
                        ????? ???????c h?????ng tr???n c??c quy???n l???i sau:<br><br>
                        - Chi???t kh???u v?? c??ng h???p d???n<br>
                        - Ch??nh s??ch ho??n h??ng linh ho???t<br>
                        - Lu??n lu??n mi???n ph?? v???n chuy???n<br>
                        - H??? tr??? truy???n th??ng ????? b??n h??ng t???t h??n<br>
                        - H??? tr??? th??? t???c b??n tr??n s??n TM??T<br>
                        - C?? nh??n vi??n h??? tr??? ri??ng
                    </div>
                    <div class="open_form">
                        <a id="open_form" href="javascript:;" title="????ng k?? ngay"
                            class="pt-3 pb-3 pl-5 pr-5 sitdown text-uppercase modal-open position-relative btn_send d-inline-block font-weight-bold">
                            <span class="m_op">????ng k?? ngay</span>
                            <!-- <span class="m_cl position-absolute h-100 w-100 d-flex justify-content-center align-items-center">????ng</span> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="m_blog pb-lg-5 pt-lg-5 pt-3 pb-3">
        <div class="container">
            <h2 class="mb-5 text-uppercase font-weight-bold text-center position-relative" href="#"
                title="Tin t???c - S??? ki???n">
                Tin t???c - S??? ki???n
            </h2>
            <article class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="item_grid mb-4">
                        <div class="position-relative">
                            <a href="#" title="Review s??ch Xa ngo??i kia n??i lo??i t??m h??t c???a Delia Owens"
                                class="effect-ming">
                                <div class="position-relative w-100 m-0 be_opa modal-open">
                                    <img src="image/thiet-ke-khong-ten-4.png" class="lazy loaded"
                                        alt="Review s??ch Xa ngo??i kia n??i lo??i t??m h??t c???a Delia Owens" width="300px;">
                                    <div class="position-absolute w-100 h-100 overlay"></div>
                                </div>
                            </a>

                            <div class="entry-date position-absolute text-center rounded-right">
                                <p class="day font-weight-bold">
                                    24
                                </p>
                                <p class="yeah">
                                    02/2021
                                </p>
                            </div>
                        </div>
                        <div class="cont">
                            <h6 class="font-weight-bold mt-2" href="#"
                                title="Review s??ch Xa ngo??i kia n??i lo??i t??m h??t c???a Delia Owens">Review s??ch Xa ngo??i
                                kia n??i lo??i t??m h??t c???a Delia Owens</h6>
                            <div class="line_3 line_1 h-auto">
                                Cu???n s??ch Xa ngo??i kia n??i lo??i t??m h??t (T??n g???c: Where the Crawdads Sing) ti???u thuy???t
                                ?????u tay c???a nh?? v??n Delia Owens ???????c xu???t b???n l???n ?????u n??m 2018, nh??ng ???? nhanh ch??ng
                                chi???m ???????c s??? y??u m???n c???a ????ng ?????o ?????c gi???. Cu???n s??ch li??n t???c ?????ng trong danh s??ch b??n
                                ch???y c???a New York Times su???t 58 tu???n v???i 6 tri???u b???n ???????c b??n ra tr??n to??n th??? gi???i v??
                                d???n ?????u m???c ti???u thuy???t b??n ch???y c???a Amazon trong n??m 2019.
                                Delia Owens sinh n??m 1949, l?? t??c gi???, nh?? ?????ng...
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="item_grid mb-4">
                        <div class="position-relative">
                            <a href="#" title="Review s??ch Xa ngo??i kia n??i lo??i t??m h??t c???a Delia Owens"
                                class="effect-ming">
                                <div class="position-relative w-100 m-0 be_opa modal-open">
                                    <img src="image/thiet-ke-khong-ten-3.png" class="lazy loaded"
                                        alt="Review s??ch Xa ngo??i kia n??i lo??i t??m h??t c???a Delia Owens" width="300px;">
                                    <div class="position-absolute w-100 h-100 overlay"></div>
                                </div>
                            </a>

                            <div class="entry-date position-absolute text-center rounded-right">
                                <p class="day font-weight-bold">
                                    29
                                </p>
                                <p class="yeah">
                                    02/2021
                                </p>
                            </div>
                        </div>
                        <div class="cont">
                            <h6 class="mt-2" href="#" title="Review s??ch V?? c??ng t??n nh???n v?? c??ng y??u th????ng">Review
                                s??ch V?? c??ng t??n nh???n v?? c??ng y??u th????ng</h6>
                            <div class="line_3 line_1 h-auto">
                                ?? ngh??a c???a quy???n s??ch V?? c??ng t??n nh???n v?? c??ng y??u th????ng
                                H??nh tr??nh nu??i d???y tr??? nh??? l?? m???t trong nh???ng tr???i nghi???m m?? c?? th??? kh??ng m???t cha m???
                                n??o qu??n. Khi con trong giai ??o???n v???a ch??o ?????i ph???i quan s??t theo t???ng h??nh ?????ng, t???ng
                                c??? ch??? nh??? nh???t nh???t c???a con. L???n h??n m???t x??u, b??? m??? ph???i ?????i m???t v???i h??ng ng??n c??u h???i
                                v?? sao v?? c??ng con kh??m ph?? ch??n tr???i m???i. B???t ?????u v??o giai ??o???n ??i h???c ?????n tr?????ng, ????
                                s??? l?? nh???ng tr???i nghi???m...
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="item_grid mb-4">
                        <div class="position-relative">
                            <a href="#" title="Review s??ch Lu???t h???p d???n b?? m???t t???i cao" class="effect-ming">
                                <div class="position-relative w-100 m-0 be_opa modal-open">
                                    <img src="image/thiet-ke-khong-ten-2.png" class="lazy loaded"
                                        alt="Review s??ch Lu???t h???p d???n b?? m???t t???i cao" width="300px;">
                                    <div class="position-absolute w-100 h-100 overlay"></div>
                                </div>
                            </a>

                            <div class="entry-date position-absolute text-center rounded-right">
                                <p class="day font-weight-bold">
                                    05
                                </p>
                                <p class="yeah">
                                    04/2021
                                </p>
                            </div>
                        </div>
                        <div class="cont">
                            <h6 class="font-weight-bold mt-2" href="#"
                                title="Review s??ch Xa ngo??i kia n??i lo??i t??m h??t c???a Delia Owens">Review s??ch Lu???t h???p
                                d???n b?? m???t t???i cao</h6>
                            <div class="line_3 line_1 h-auto">
                                ????i n??t v??? t??c gi??? quy???n s??ch Lu???t h???p d???n ??? B?? m???t t???i cao
                                T??c gi??? c???a quy???n s??ch Lu???t h???p d???n ??? B?? m???t t???i cao ch??nh l?? Som Sujeera ??? m???t trong
                                nh???ng ng?????i ???p ??? ni???m ??am m?? kh??m ph?? nh???ng b?? ???n c?? trong v?? tr???. ?????c bi???t h??n khi ???????c
                                l???n l??n trong m??i tr?????ng thi??n v??? Ph???t gi??o, ??ng l???i c??ng c?? th??m nhi???u ph??t hi???n ?????c
                                s???c li??n quan gi???a con ng?????i ?????i v???i nh???ng b?? ???n trong cu???c s???ng. S??ch...
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="item_grid mb-4">
                        <div class="position-relative">
                            <a href="#" title="Review s??ch B??nh t??nh khi ???, m???nh m??? khi y??u - All The Rules"
                                class="effect-ming">
                                <div class="position-relative w-100 m-0 be_opa modal-open">
                                    <img src="image/thiet-ke-khong-ten-1.png" class="lazy loaded"
                                        alt="Review s??ch B??nh t??nh khi ???, m???nh m??? khi y??u - All The Rules"
                                        width="300px;">
                                    <div class="position-absolute w-100 h-100 overlay"></div>
                                </div>
                            </a>

                            <div class="entry-date position-absolute text-center rounded-right">
                                <p class="day font-weight-bold">
                                    24
                                </p>
                                <p class="yeah">
                                    02/2021
                                </p>
                            </div>
                        </div>
                        <div class="cont">
                            <h6 class="font-weight-bold mt-2 line_1" href="#"
                                title="Review s??ch B??nh t??nh khi ???, m???nh m??? khi y??u - All The Rules">Review s??ch B??nh
                                t??nh khi ???, m???nh m??? khi y??u - All The Rules</h6>
                            <div class="line_3 line_1 h-auto">
                                S??ch ??? B??nh t??nh khi ??? m???nh m??? khi y??u ??? l?? b???n d???ch ti???ng Vi???t t??? t??c ph???m All the rule
                                . ????y l?? m???t th??? lo???i s??ch k??? n??ng (hay c??n g???i l?? Self-Help) do 2 t??c gi??? ng?????i M??? vi???t
                                n??n ???? l?? Ellen Fein v?? Sherrie Schneider . Cu???n s??ch ???????c xu???t b???n l???n ?????u ti??n n??m
                                1995 t???i M??? v?? nhanh ch??ng tr??? th??nh t??c ph???m ???????c ????ng ?????o ph??? n??? M??? ????n nh???n. Kh??ng
                                ch??? v???y, tr???i qua 2 th???p k???, cu???n s??ch ???? tr??? th??nh b?? quy???t g???i...
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <footer class="pt-5">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-xl-4 col-lg-3 col-md-8 col-sm-6 col-xs-12 footer-left mb-4">
                    <h3 class="footer-title mb-3 position-relative font-weight-bold">Li??n h??? Mew BS</h3>
                    <p>?????a ch???: Ladeco Building, 266 Doi Can Street, Ba Dinh District, Hanoi.</p>
                    <p>Email: <a href="mailto:support@sapo.vn " title="support@sapo.vn ">support@sapo.vn </a></p>
                    <p>S??? ??i???n tho???i: <a href="tel:19006750" title="1900 6750">1900 6750</a></p>
                    <h3 class="footer-title mb-3 mt-3 position-relative font-weight-bold">K???t n???i v???i ch??ng t??i</h3>
                    <div class="social position-relative">
                        <div class="onut pt-2 pb-2">
                            <a href="#" target="_blank"
                                class="position-relative iso sitdown modal-open d-inline-block facebook mr-1"
                                title="Facebook">
                                <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/facebook.png?1634809483920"
                                    alt="facebook">
                            </a>
                            <a href="#" target="_blank"
                                class="position-relative iso sitdown modal-open d-inline-block twitter mr-1"
                                title="Twitter">
                                <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/twitter.png?1634809483920"
                                    alt="twitter">
                            </a>
                            <a href="#" target="_blank"
                                class="position-relative iso sitdown modal-open d-inline-block instagram mr-1"
                                title="Instagram+">
                                <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/instagram.png?1634809483920"
                                    alt="instagram">
                            </a>
                            <a href="#" target="_blank"
                                class="position-relative iso sitdown modal-open d-inline-block youtube mr-1"
                                title="Youtube">
                                <img src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/youtube.png?1634809483920"
                                    alt="youtube">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 footer-left mb-4">
                    <h3 class="footer-title mb-3 position-relative font-weight-bold">Ch??nh s??ch</h3>
                    <ul class="links">

                        <li><a href="#" title="Ch??nh s??ch b??n h??ng">Ch??nh s??ch b??n h??ng</a></li>

                        <li><a href="#" title="Ch??nh s??ch ho??n h??ng">Ch??nh s??ch ho??n h??ng</a></li>

                        <li><a href="#" title="Ch??nh s??ch v???n chuy???n">Ch??nh s??ch v???n chuy???n</a></li>

                        <li><a href="#" title="Ch??nh s??ch c???ng t??c vi??n">Ch??nh s??ch c???ng t??c vi??n</a></li>

                        <li><a href="#" title="Ch??nh s??ch COD">Ch??nh s??ch COD</a></li>

                        <li><a href="#" title="Ch??nh s??ch b???o h??nh">Ch??nh s??ch b???o h??nh</a></li>

                    </ul>
                </div>
                <div class="col-lg-6 col-12 col-xs-12 footer-left">
                    <h3 class="footer-title mb-3 position-relative font-weight-bold">????nh gi?? kh??ch h??ng</h3>
                    <div
                        class="m_people swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transition-duration: 0ms;">
                            <div class="swiper-slide item_yk swiper-slide-active"
                                style="width: 655px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                <div class="content_tip d-flex row m-0 align-items-center">
                                    <div class="imga col-12 col-md-3 text-center lazy_bg loaded"
                                        data-background="url(//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920)"
                                        style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920&quot;);">
                                        <img alt="H????ng Suri" class="lazy loaded"
                                            src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_1.jpg?1634809483920"
                                            data-src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_1.jpg?1634809483920">
                                    </div>
                                    <div class="hgroup col-12 col-md-9">
                                        <p class="name font-weight-bold mb-2">H????ng Suri</p>
                                        <p class="jt text-justify">?????i ng?? b??c s?? t???i Mew Clinic r???t chuy??n nghi???p v??
                                            t???n t??nh. Ch??c Mew Clinic ph??t tri???n m???nh m??? h??n n???a v?? s???m tr??? th??nh trung
                                            t??m y t??? t???t nh???t Vi???t Nam, t??i tin ch???c ??i???u ????.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide item_yk swiper-slide-next"
                                style="width: 655px; opacity: 0; transform: translate3d(-655px, 0px, 0px); transition-duration: 0ms;">
                                <div class="content_tip d-flex row m-0 align-items-center">
                                    <div class="imga col-12 col-md-3 text-center lazy_bg loaded"
                                        data-background="url(//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920)"
                                        style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920&quot;);">
                                        <img alt="??o??n Giang H????ng" class="lazy loaded"
                                            src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_2.jpg?1634809483920"
                                            data-src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_2.jpg?1634809483920">
                                    </div>
                                    <div class="hgroup col-12 col-md-9">
                                        <p class="name font-weight-bold mb-2">??o??n Giang H????ng</p>
                                        <p class="jt text-justify">M??nh ch???n Mew Clinic ????? l??m n??i g???i g???m ni???m tin v???
                                            s???c kh???e. ??? ????y m???i th??? r???t chuy??n nghi???p, t???n t??nh v?? th??n thi???n.
                                            Hy v???ng c??c b???n s??? ph??t tri???n ??i???u ?????c bi???t trong c??c ti??u ch?? ph???c v??? c???a
                                            c??c b???n.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide item_yk"
                                style="width: 655px; opacity: 0; transform: translate3d(-1310px, 0px, 0px); transition-duration: 0ms;">
                                <div class="content_tip d-flex row m-0 align-items-center">
                                    <div class="imga col-12 col-md-3 text-center lazy_bg loaded"
                                        data-background="url(//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920)"
                                        style="background-image: url(&quot;//bizweb.dktcdn.net/100/415/471/themes/804607/assets/dancer.png?1634809483920&quot;);">
                                        <img alt="Ng???c Anh" class="lazy loaded"
                                            src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_3.jpg?1634809483920"
                                            data-src="//bizweb.dktcdn.net/thumb/small/100/415/471/themes/804607/assets/ykkh_3.jpg?1634809483920">
                                    </div>
                                    <div class="hgroup col-12 col-md-9">
                                        <p class="name font-weight-bold mb-2">Ng???c Anh</p>
                                        <p class="jt text-justify">M??nh ch???n Mew Clinic ????? l??m n??i g???i g???m ni???m tin v???
                                            s???c kh???e. ??? ????y m???i th??? r???t chuy??n nghi???p, t???n t??nh v?? th??n thi???n.
                                            Hy v???ng c??c b???n s??? ph??t tri???n ??i???u ?????c bi???t trong c??c ti??u ch?? ph???c v??? c???a
                                            c??c b???n.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="swiper-pagination m_people_p position-relative col-12 col-md-3 swiper-pagination-clickable swiper-pagination-bullets">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide "></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide "></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide "></span>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>