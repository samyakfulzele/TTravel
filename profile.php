<?php 
    include "app.php";
    if(isset($_SESSION['edit_profile'])){
        print $_SESSION['edit_profile'];
        unset($_SESSION['edit_profile']);
    }
    if(isset($_SESSION['change_password'])){
        print $_SESSION['change_password'];
        unset($_SESSION['change_password']);
    }
    if(isset($_SESSION['delete_account'])){
        print $_SESSION['delete_account'];
        unset($_SESSION['delete_account']);
    }
    $sql_query = "SELECT * FROM `user_details` WHERE `username` = '{$_SESSION['username']}'";
    $sql_run = mysqli_query($conn,$sql_query);
    if(mysqli_num_rows($sql_run) > 0){
        $data = mysqli_fetch_assoc($sql_run);
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
                                        <a href="user.php" class="nav-link text-white fs-5">Home</a>
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
                                <img src="/Samyak/assets/default_user.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                                <li><a class="dropdown-item active" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container bg-light pb-5">
        <div class="row pt-5">
            <div class="col-12 d-flex justify-content-center">
                <img src="/Samyak/assets/default_user.png" width="230" alt="">
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-12 d-flex justify-content-center">
                <h1>Profile Photo</h1>
            </div>
        </div>
        <form action="#" method="post">
            <div class="row gx-6 justify-content-center mt-5">
                <div class="col-3">
                    <label for="firstName" class="fs-5">First Name</label>
                    <input type="text" name="firstName" value="<?php print $data['first_name'] ?>" id="input" class="form-control border-bottom border-5 border-secondary" readonly>
                </div>
                <div class="col-3">
                    <label for="lastName" class="fs-5">Last Name</label>
                    <input type="text" name="lastName" value="<?php print $data['last_name'] ?>" id="input" class="form-control border-bottom border-5 border-secondary" readonly>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-6">
                    <label for="email" class="fs-5">Email</label>
                    <input type="email" name="email" value="<?php print $data['email'] ?>" id="input" class="form-control border-bottom border-5 border-secondary" readonly>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-6">
                    <label for="username" class="fs-5">Username</label>
                    <input type="text" name="username" id="input" value="<?php print $data['username'] ?>" class="form-control border-bottom border-5 border-secondary" readonly>
                </div>
            </div>
        </form>
        <div class="row justify-content-center mt-5">
            <div class="col-2">
                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal">Edit Details</button>
            </div>
            <div class="col-2">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#changepassword">Change Password</button>
            </div>
            <div class="col-2">
                <button class="btn btn-danger float-end" data-bs-toggle="modal" data-bs-target="#deleteuser">Delete Account</button>
            </div>
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
                        <a href="user.php" class="btn list-group-item bg-dark text-white border-0 text-start">Home</a>
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

<!-- Change Password Modal -->

<div class="modal fade" id="changepassword" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header p-0">
                <div class="container text-center pb-3">
                    <div class="text-end mt-3 me-2">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <h1>Change Password</h1>
                    </div>
                </div>
            </div>
            <div class="modal-body p-0">
                <div class="container w-75 pb-4">
                    <form action="/Samyak/TTravel/app.php" method="post" class="mt-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" name="current_password" id="current_password" placeholder="current password" class="form-control border-secondary" required>
                                    <label for="current_password">Current Password</label>
                                </div>
                            </div>
                        </div> 
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" name="new_password" id="new_password" placeholder="new password" class="form-control border-secondary" required>
                                    <label for="new_password">New Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" name="conf_new_password" id="conf_new_password" placeholder="confirm new password" class="form-control border-secondary" required>
                                    <label for="conf_new_password">Confirm New Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-evenly">
                            <div class="col-6">
                                <input type="submit" name="change_password_submit" value="Submit" class="btn btn-success w-100">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Details Modal -->

<div class="modal fade" id="editModal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header p-0">
                <div class="container text-center pb-3">
                    <div class="text-end mt-3 me-2">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div>
                        <h1>Edit Details</h1>
                    </div>
                </div>
            </div>
            <div class="modal-body p-0">
                <div class="container w-75 pb-4">
                    <form action="/Samyak/TTravel/app.php" method="post" class="mt-5">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="form-floating-sm">
                                    <label for="" class="fw-bold">First Name</label>
                                    <input type="text" name="first_name" value="<?php print $data['first_name'] ?>" id="firstName" class="form-control border-secondary" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating-sm">
                                    <label for="" class="fw-bold">Last Name</label>
                                    <input type="text" name="last_name" value="<?php print $data['last_name'] ?>" id="lastName" class="form-control border-secondary" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating-sm">
                                    <label for="" class="fw-bold">Email</label>
                                    <input type="email" name="email" value="<?php print $data['email'] ?>" id="email" class="form-control border-secondary" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-floating-sm">
                                    <label for="" class="fw-bold">Username</label>
                                    <input type="text" name="username" value="<?php print $data['username'] ?>" id="username" class="form-control border-secondary" placeholder="Username" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 justify-content-evenly">
                            <div class="col-6">
                                <input type="submit" name="edit_details_submit" value="Submit" class="btn btn-secondary w-100">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Account Modal -->

<div class="modal fade" id="deleteuser" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header p-0">
                <div class="container pb-3">
                    <div class="text-end mt-3 me-2">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="ms-2">
                        <h4>Are you sure to delete this account?</h4>
                    </div>
                </div>
            </div>
            <div class="modal-body p-0">
                <div class="container mt-4 pb-4">
                    <form action="/Samyak/TTravel/app.php" method="post">
                        <div class="row justify-content-end">
                            <div class="col-3">
                                <input type="submit" name="delete_account_submit" value="Delete" class="btn btn-danger py-2 px-4">
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-secondary py-2 px-4" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>