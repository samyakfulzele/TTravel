<?php
    session_start();
    if(isset($_SESSION['login_status'])){
        print $_SESSION['login_status'];
        unset($_SESSION['login_status']);
    }
    if(isset($_SESSION['user_contact_status'])){
        print $_SESSION['user_contact_status'];
        unset($_SESSION['user_contact_status']);
    }
    if(isset($_SESSION['loggedin']) != TRUE){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>TTravel</title>
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
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
    <nav class="navbar navbar-expand-lg m-0 p-0 bg-dark sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="row w-100">
                    <div class="col-3 d-inline-flex">
                        <i class="bi bi-bezier display-6 text-white ms-5"></i>
                        <h2 class="ms-3 text-white pt-2">TTravel</h2>
                    </div>
                    <div class="col-7 ms-5 ps-5 mt-1">
                        <div class="row justify-content-center ms-5 ps-4">
                            <div class="col">
                                <ul class="navbar-nav ms-5">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-white fs-5 active">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link text-white fs-5">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="explore.php" class="nav-link text-white fs-5">Explore</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 align-self-center ms-auto">
                        <div class="dropdown">
                            <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/Samyak/TTravel/assets/default_user.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container bg-light pb-5">
        <div class="">
            <h4 class="pt-1 pb-1">Welcome <strong><?php echo $_SESSION['username']; ?></strong>, Explore the World!</h4>
        </div>
        <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-wrap="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/Samyak/TTravel/assets/Travel8.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption">
                        <h1 class="">Welcome to TTravel</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/Samyak/TTravel/assets/Travel6.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption">
                        <h1 class="">Welcome to TTravel</h1>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="/Samyak/TTravel/assets/Travel3.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption">
                        <h1 class="">Welcome to TTravel</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/Samyak/TTravel/assets/Travel4.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption">
                        <h1 class="">Welcome to TTravel</h1>
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
        <div class="text-center pt-4">
            <h1>Welcome to TTravel</h1>
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
        <div class="text-center mt-5">
            <h1>Check Out our Packages</h1>
            <div class="row mt-4 ">
                <div class="col-6">
                    <a href="explore.php" class="btn btn-outline-success float-end">International Packages</a>
                </div>
                <div class="col-6">
                    <a href="explore.php" class="btn btn-outline-success float-start">Indian Packages</a>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h2 class="text-center">Leave a message for us!</h2>
            <form action="/Samyak/TTravel/app.php" method="post" >
                <div class="row justify-content-center mt-5">
                    <div class="col-6">
                        <div class="">
                            <label for="" class="fs-5 mb-1">Subject</label>
                            <input type="text" name="sub" id="" class="form-control border-bottom border-5 border-secondary" placeholder="Subject" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-6">
                        <div class="">
                            <label for="message" class="fs-5 mb-1">Message</label>
                            <textarea name="message" id="message" class="form-control border-bottom border-5 border-secondary" style="height: 120px;" placeholder="Message" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-1">
                        <input type="submit" name="message_submit" value="Submit" class="btn btn-success p-2 ps-4 pe-4">
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
                        <a href="#" class="btn list-group-item bg-dark text-white border-0 text-start active">Home</a>
                        <a href="about.php" class="btn list-group-item bg-dark text-white border-0 text-start">About</a>
                        <a href="explore.php" class="btn list-group-item bg-dark text-white border-0 text-start">Explore</a>
                        <a href="logout.php" class="btn list-group-item bg-dark text-white border-0 text-start">Log out</a>
                    </ul>
                </div>
                <div class="col-2 text-white w-25 mt-5 pt-5 pb-3">
                    <p class="fw-semibold ms-3">Phone</p>   
                    <p><i class="bi bi-telephone"></i> 02223703321</p>
                    <p><i class="bi bi-phone"></i> 02256007099</p>
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