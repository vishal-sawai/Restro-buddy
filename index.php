<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restro Buddy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/ff3c91d27a.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>

    <!-- div animation   aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <div id="load">
    </div>
    <div id="contents">
        <!-- Navbar -->
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a href="index.php" class="navbar-brand logo">
                        <img src="img/logo.jpeg" height="75" alt="CoolBrand">
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <div class="navbar-nav nav-section">
                                <li><a href="#home" class="nav-item nav-link">Home</a></li>
                                <li><a href="#service" class="nav-item nav-link">Service</a></li>
                                <li><a href="#about" class="nav-item nav-link">About Us</a></li>
                                <li><a href="#contact" class="nav-item nav-link">Contact Us</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--  -->

        <!-- Slider -->
        <div id="home">
            <div id="carouselExampleIndicators" class="carousel slide home-slider" data-bs-ride="true">
                <div class="carousel-indicators slider-down-btn">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner slider-img">
                    <div class="carousel-item active">
                        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--  -->

        <!-- Services -->
        <div>
            <div class="container my-2" id="service">
                <div class="seven pt-5">
                    <h1>Services</h1>
                </div>
                <div>
                    <div class="row row-cols-1 row-cols-md-2 g-5 mb-5 px-3">
                        <div class="col" data-aos="fade-right">
                            <div class="card s-card h-100" onclick="formdata('Monthly Subscription Meal')" data-bs-toggle="modal" href="#stm">
                                <img src="img/slide1.jpg" class="card-img-top s-card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="s-card-footer1 card-title text-center">Monthly Subscription Meal</h5>
                                    <h5 class="s-card-footer2 card-title text-center">Get Qutation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-left">
                            <div class="card s-card h-100" onclick="formdata('Customize Meal')" data-bs-toggle="modal" href="#stm">
                                <img src="img/slide2.jpg" class="card-img-top s-card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="s-card-footer1 card-title text-center">Customize Meal</h5>
                                    <h5 class="s-card-footer2 card-title text-center">Get Qutation</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-5 px-3">
                        <div class="col" data-aos="fade-right">
                            <div class="card s-card h-100" onclick="formdata('Student Combo')" data-bs-toggle="modal" href="#stm">
                                <img src="img/slide3.jpg" class="card-img-top s-card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="s-card-footer1 card-title text-center">Student Combo</h5>
                                    <h5 class="s-card-footer2 card-title text-center">Get Qutation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-left">
                            <div class="card s-card h-100" onclick="formdata('Breakfest')" data-bs-toggle="modal" href="#stm">
                                <img src="img/slide1.jpg" class="card-img-top s-card-img" alt="...">
                                <div class="card-body">
                                    <h5 class="s-card-footer1 card-title text-center">Breakfest</h5>
                                    <h5 class="s-card-footer2 card-title text-center">Get Qutation</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- `service Modal -->
        <div class="modal fade" id="stm" aria-hidden="true" aria-labelledby="stm" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase fw-bold text-danger" id="stm">Get Qutation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-3 px-3 pb-4">
                        <form name="myForm" action="sql/insert.php" onsubmit="return validateForm()" method="post">
                            <div id="fullname" class="mb-2">
                                <label for="" class="form-label float-start">Name</label> <span class="formerror"> </span>
                                <input name="fullname" type="text" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div id="phone" class="mb-2">
                                <label for="" class="form-label float-start">Phone No</label><span class="formerror"> </span>
                                <input name="phone" type="tel" class="form-control" placeholder="Enter Your Phone No">
                            </div>
                            <div id="email" class="mb-2">
                                <label for="" class="form-label float-start">Email</label> <span class="formerror"> </span>
                                <input name="email" type="email" class="form-control" name="email" placeholder="Enter Your Email">
                            </div>
                            <div>
                                <input type="hidden" name="type" id="type">
                            </div>
                            <div id="enproject" class="mb-2">
                                <label for="" class="form-label float-start">Address</label> <span class="formerror"> </span>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Address" name="address" rows="3"></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <input type="submit" class="btn btn-danger fw-bold" name="allenbtnsubmit" value="SUBMIT">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- Testimonial -->

        <div class="container" id="testimonial">
            <div class="seven pt-5">
                <h1> Testimonial </h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" data-aos="fade-right">
                    <div class="testimonial-card card h-100">
                        <img src="img/modi.jpg" class="test-img mt-5 mb-2 rounded-circle mx-auto d-block" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title text-danger fw-bold mb-3">Narendra Modi</h5>
                            <p class="card-text mb-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quos, suscipit at consequuntur quibusdam a enim fuga laboriosam doloribus fugit harum iste neque! Atque tempora odio
                                voluptatibus voluptas, eaque necessitatibus illo.</p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-down">
                    <div class="testimonial-card card h-100">
                        <img src="img/modi.jpg" class="test-img mt-5 mb-2 rounded-circle mx-auto d-block" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title text-danger fw-bold mb-3">Narendra Modi</h5>
                            <p class="card-text mb-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quos, suscipit at consequuntur quibusdam a enim fuga laboriosam doloribus fugit harum iste neque! Atque tempora odio
                                voluptatibus voluptas, eaque necessitatibus illo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-left">
                    <div class="testimonial-card card h-100 text-center">
                        <img src="img/modi.jpg" class="test-img mt-5 mb-2 rounded-circle mx-auto d-block" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-danger fw-bold mb-3">Narendra Modi</h5>
                            <p class="card-text mb-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quos, suscipit at consequuntur quibusdam a enim fuga laboriosam doloribus fugit harum iste neque! Atque tempora odio
                                voluptatibus voluptas, eaque necessitatibus illo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- About Us -->
        <div class="container" id="about">
            <div class="seven pt-5">
                <div class="aboutdiv px-3">
                    <h1> About Us </h1>
                    <div class="row featurette bg-light rounded-4" data-aos="fade-right">
                        <div class="col-md-7 aboutinfo">
                            <h2 class="featurette-heading mb-3"><span class="text-muted">Restro Buddy</span></h2>
                            <p class="lead ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As Aurangabad is city of educational and employement so many of migrite to chase their success.
                                migrating people are mostly student and job person. This person face food issue.
                                So after analysing their problems Restro Buddy come up with different various of meals at affordable price.
                                Restro Buddy ensure best quality of hygiene food</p>
                        </div>
                        <div class="col-md-5" data-aos="fade-left">
                            <img class="featurette-image img-fluid mx-auto rounded-4" src="img/aboutimg.jpg" data-holder-rendered="true" style="width: 500px; height: 500px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- Contatct Us -->
        <div id="contact" class="mb-5">
            <div class="seven pt-5">
                <h1>Contact Us</h1>
            </div>
            <div class="contact-page mx-auto py-5 rounded-4" data-aos="fade">>
                <div class="contact-form justify-content-center d-flex flex-wrap ">
                    <div class="cform mx-auto" id="contact-form">
                        <form class="position-relative top-50 start-50 translate-middle" action="sql/insert.php" name="contactform" onsubmit="return contactsub()" method="post">
                            <div class="row g-2">
                                <div class="col-md mb-3" id="fname">
                                    <div class="form-floating ">
                                        <input type="text" class="form-control" id="floatingInputGrid" name="fname">
                                        <label for="floatingInputGrid">First Name</label>
                                        <span class="formerror"> </span>
                                    </div>
                                </div>
                                <div class="col-md mb-3" id="lname">
                                    <div class="form-floating ">
                                        <input type="text" class="form-control" id="floatingInputGrid" name="lname">
                                        <label for="floatingInputGrid">Last Name</label>
                                        <span class="formerror"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3" id="cphone">
                                <input type="tel" class="form-control" id="floatingPassword" name="cphone">
                                <label for="floatingPassword">Phone No</label>
                                <span class="formerror"> </span>
                            </div>
                            <div class="form-floating mb-3" id="cemail">
                                <input type="email" class="form-control" id="floatingInput" name="cemail">
                                <label for="floatingInput">Email Address</label>
                                <span class="formerror"> </span>
                            </div>
                            <div class="form-floating mb-4" id="msg">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="msg"></textarea>
                                <label for="floatingTextarea2">Requirement</label>
                                <span class="formerror"> </span>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <input type="submit" class="btn btn-danger p-2 fw-bold" name="contactbtnsubmit" value="SEND NOW">
                            </div>
                        </form>
                    </div>
                    <div class="contact-info mx-auto p-3">
                        <div class="contact-img">
                            <div class="media">
                                <div class="text-center mx-auto my-4">
                                    <a class="instagram text-decoration-none px-4 py-2 text-light rounded-3 fw-bold" href="https://www.instagram.com/restro_buddy/" role="button"><i class="fab fa-instagram me-2"></i>Instagram</a>
                                </div>
                                <div class="text-center mx-auto mt-4">
                                    <a class="phone text-decoration-none px-5 py-2 text-light rounded-3 fw-bold" href="tel:+91 84595 42051" role="button"><i class="fa-solid fa-phone me-2"></i>Phone</a>
                                </div>
                                <div class="text-center mx-auto my-4">
                                    <a class="facebook text-decoration-none px-4 py-2 text-light rounded-3 fw-bold" href="" role="button"><i class="fa-brands fa-facebook me-2"></i>Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- footer -->
        <footer class="text-center bg-dark text-light py-3">
            Copyright - Restro Buddy | All Right Reserved
        </footer>
        <!--  -->
    </div>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"> </script>
    <script>
        // animation
        AOS.init({
            offset: 300,
            duration: 400
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>