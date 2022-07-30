<?php
    session_start();
    if(isset($_SESSION['register_status'])){
        print $_SESSION['register_status'];
        unset($_SESSION['register_status']);
    }
    if(isset($_SESSION['login_status'])){
        print $_SESSION['login_status'];
        unset($_SESSION['login_status']);
    }
    if(isset($_SESSION['loggedout'])){
        print $_SESSION['loggedout'];
        unset($_SESSION['loggedout']);
    }
    if(isset($_SESSION['delete_account'])){
        print $_SESSION['delete_account'];
        unset($_SESSION['delete_account']);
    }
?>
<DOCTYPE html>
<html>
<head>
    <title>TTravel</title>
    <link rel="shortcut icon" href="/TTravel/assets/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>
<body>
    <header class="bg-light m-0 p-0">
        <div class="container-fluid h-25 text-center">
            <i class="bi bi-bezier display-1"></i>
            <p class="fw-semibold display-3 mb-2">TTravel</p>
        </div>
    </header>
    <nav class="navbar bg-dark navbar-expand-lg m-0 p-0 sticky-top" id="navId">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#scrollHome" class="nav-link active text-white fs-5">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#scrollAbout" class="nav-link text-white fs-5">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#scrollContact" class="nav-link text-white fs-5">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-outline-light p-1 ps-3 pe-3 fs-5" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
                <button class="btn btn-outline-light p-1 ps-3 pe-3 ms-2 fs-5" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
            </div>
        </div>
    </nav> 
    <div data-bs-spy="scroll" data-bs-target="#navId" data-bs-smooth-scroll="true" tabindex="0">
        <div class="container" id="scrollHome">
            <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-wrap="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/Samyak/TTravel/assets/Travel1.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <h1 class="">Get Started with TTravel</h1>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">Get Started</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/Samyak/TTravel/assets/Travel2.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <h1 class="">Get Started with TTravel</h1>
                            <button class="btn btn-success">Get Started</button>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="/Samyak/TTravel/assets/Travel3.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <h1 class="">Get Started with TTravel</h1>
                            <button class="btn btn-success">Get Started</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/Samyak/TTravel/assets/Travel4.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <h1 class="">Get Started with TTravel</h1>
                            <button class="btn btn-success">Get Started</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
            </div>  
        </div>
        <div class="container bg-light pb-4"> 
            <div class="text-center pt-4">
                <h1>Get Strated with TTravel</h1>
                <p class="fs-5">Experience the world in your own style!</p>
            </div>
            <div class="row justify-content-evenly pt-4">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/Samyak/TTravel/assets/Travel5.jpg" alt="" class="card-image rounded">
                        <div class="card-body">
                            <h3 class="card-title text-center mt-2">Travel the World!</h3>
                            <p class="card-text text-center mx-2 mt-3">“Man cannot discover new oceans unless he has the courage to lose sight of the shore.”</p>
                            <p class="text-muted text-end">– Andre Gide</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/Samyak/TTravel/assets/Travel7.jpg" alt="" class="card-image rounded">
                        <div class="card-body">
                            <h3 class="card-title text-center mt-2">Discover Everything!</h3>
                            <p class="card-text text-center mx-2 mt-3">“Once the travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.”</p>
                            <p class="text-muted text-end">– Michael Palin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="scrollAbout" class="container bg-light border-start border-3 border-secondary pb-2">
            <h1 class="pt-3 ps-3">About Us!</h1>
            <p class="pt-3 ps-3 fs-4 pe-3 lead">Travel is the movement of people between distant geographical locations. Travel can be done by foot, bicycle, automobile, train, boat, bus, airplane, ship or other means, with or without luggage, and can be one way or round trip. Travel can also include relatively short stays between successive movements, as in the case of tourism.</p>
            <hr class="lead ">
            <h2 class="pt-3 ps-3">Why Should you start travelling today?</h2>
            <p class="pt-3 ps-3 fs-4 pe-3 lead">Traveling is an extraordinary experience every person needs to try. It reveals a whole new and exciting world out there, opens out your inner strength, and presents with unforgettable adventures. Read an example of essay about traveling to learn more and get inspired.</p>
        </div>
        <div class="container bg-light pt-3 pb-2" id="scrollContact">
            <h1 class="text-center text-decoration-underline ">Contact Us</h1>
            <?php
                if(isset($_SESSION['contact_status'])){
                    print $_SESSION['contact_status'];
                    unset($_SESSION['contact_status']);
                }
            ?>
            <form action="/Samyak/TTravel/app.php" method="post">
                <div class="row gx-6 justify-content-center mt-5">
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" name="firstName" id="firstName" class="form-control border-bottom border-5 border-secondary" placeholder="John" required>
                            <label for="firstName">First Name</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" name="lastName" id="lastName" class="form-control border-bottom border-5 border-secondary" placeholder="Morgan" required>
                            <label for="lastName">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-8">
                        <div class="form-floating">
                            <input type="email" name="email" id="email" class="form-control border-bottom border-5 border-secondary" placeholder="name@example.com" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-8">
                        <div class="form-floating">
                            <input type="text" name="subject" id="subject" class="form-control border-bottom border-5 border-secondary" placeholder="Subject" required>
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-8">
                        <div class="form-floating">
                            <textarea name="message" id="message" class="form-control border-bottom border-5 border-secondary" style="height: 120px;" placeholder="message" required></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-1">
                        <input type="submit" name="contact_submit" value="Submit" class="btn btn-success p-2 ps-4 pe-4">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="bg-dark m-0 p-0">
        <div class="container-fluid h-50">
            <div class="row">
                <div class="col-2 mt-5 pt-4 ps-5 text-white ms-5">
                    <i class="bi bi-bezier display-1 ps-4"></i>
                    <h1 class="">TTravel</h1>
                </div>
                <div class="col-2 bg-dark w-25 mt-5 pt-5 ms-5 ps-5 pb-3">
                    <ul class="list-group w-50">
                        <a href="#scrollHome" class="btn list-group-item bg-dark text-white border-0 text-start">Home</a>
                        <a href="#scrollAbout" class="btn list-group-item bg-dark text-white border-0 text-start">About</a>
                        <a href="#scrollContact" class="btn list-group-item bg-dark text-white border-0 text-start">Contact</a>
                    </ul>
                </div>
                <div class="col-2 text-white w-25 mt-5 pt-5 pb-3">
                    <p class="fw-semibold ms-3">Get Started with us!</p>
                    <ul class="list-group w-50">
                        <a href="#" class="btn list-group-item bg-dark text-white border-0 text-start" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a>
                        <a href="#" class="btn list-group-item bg-dark text-white border-0 text-start" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                    </ul>
                </div>
                <div class="col-2 text-white mt-5 pt-5 pb-3">
                    <p class="fw-semibold">Address</p>
                    <p>21/641,West View Coop Soc,Shastri Nagar,Goregaon(W), Mumbai-400104.</p>
                </div>
            </div>
            <div class="text-white mt-4 border-top border-secondary">
                <p class="text-center">Disgned & Created by Samyak Fulzele</p>
            </div>
        </div>
    </footer>
</body>
</html>

<!-- Login Modal -->

<div class="modal fade" id="loginModal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header p-0">
                <div class="container text-center">
                    <div class="text-end mt-3 me-2">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <i class="bi bi-bezier display-3"></i>
                        <h1>TTravel</h1>
                    </div>
                </div>
            </div>
            <div class="modal-body p-0">
                <div class="container w-75">
                    <h1 class="text-center lead fs-1 mt-2">Log In</h1>
                    <form action="/Samyak/TTravel/app.php" method="post" class="mt-4">
                        <label for="" class="fs-5">Username</label>
                        <input type="text" name="username" class="form-control mt-1 border-secondary border-bottom border-3">
                        <label for="" class="fs-5 mt-2">Password</label>
                        <input type="password" name="password" class="form-control mt-1 border-secondary border-bottom border-3">
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <input type="submit" name="login_submit" value="Submit" class="btn btn-secondary mt-4 ms-2 ps-5 pe-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer p-0">
                <div class="container-fluid">
                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            <p>Don't Have a account?<button class="btn border-0 mb-1 text-primary text-decoration-underline" data-bs-target="#registerModal" data-bs-toggle="modal">Register!</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->

<div class="modal fade" id="registerModal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header p-0">
                <div class="container text-center">
                    <div class="text-end mt-3 me-2">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <i class="bi bi-bezier display-3"></i>
                        <h1>TTravel</h1>
                    </div>
                </div>
            </div>
            <div class="modal-body p-0">
                <div class="container w-75">
                    <h1 class="text-center lead fs-1 mt-2">Register</h1>
                    <form action="/Samyak/TTravel/app.php" method="post">
                        <div class="row justify-content-center mt-4">
                            <div class="col-6">
                                <div class="form-floating-sm">
                                    <input type="text" name="firstName" id="firstName" class="form-control border-secondary border-bottom border-3" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating-sm">
                                    <input type="text" name="lastName" id="lastName" class="form-control border-secondary border-bottom border-3" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating-sm">
                                    <input type="email" name="email" id="email" class="form-control border-secondary border-bottom border-3" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating-sm">
                                    <input type="text" name="username" id="username" class="form-control border-secondary border-bottom border-3" placeholder="Username" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating-sm">
                                    <input type="password" name="password" id="password" class="form-control border-secondary border-bottom border-3" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating-sm">
                                    <input type="password" name="confPassword" id="confPassword" class="form-control border-secondary border-bottom border-3" placeholder="Confirm Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <input type="submit" name="register_submit" value="Submit" class="btn btn-secondary ps-3 pe-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer p-0">
                <div class="container-fluid">
                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            <p>Already Have an account?<button class="btn border-0 mb-1 text-primary text-decoration-underline" data-bs-target="#loginModal" data-bs-toggle="modal">Log In!</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>