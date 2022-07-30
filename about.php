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
                                        <a href="#" class="nav-link text-white fs-5 active">About</a>
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
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container bg-light pb-3">
        <div class="">
            <img src="/samyak/assets/Travel8.jpg" alt="" class="w-100">
        </div>
        <div class="pt-4">
            <h1>What is Travel?</h1>
            <p class="fs-5 mt-3">The origin of the word "travel" is most likely lost to history. The term "travel" may originate from the Old French word travail, which means 'work'.[2] According to the Merriam Webster dictionary, the first known use of the word travel was in the 14th century. It also states that the word comes from Middle English travailen, travelen (which means to torment, labor, strive, journey) and earlier from Old French travailler (which means to work strenuously, toil).In English, people still occasionally use the words travail, which means struggle. According to Simon Winchester in his book The Best Travelers' Tales (2004), the words travel and travail both share an even more ancient root: a Roman instrument of torture called the tripalium (in Latin it means "three stakes", as in to impale). This link may reflect the extreme difficulty of travel in ancient times. Travel in modern times may or may not be much easier depending upon the destination. Travel to Mount Everest, the Amazon rainforest, extreme tourism, and adventure travel are more difficult forms of travel. Travel can also be more difficult depending on the method of travel, such as by bus, cruise ship, or even by bullock cart.</p>
        </div>
        <div class="pt-4">
            <h1>Purpose and Motivation.</h1>
            <p class="fs-5 mt-3">Reasons for traveling include recreation, holidays, rejuvenation, tourism or vacationing, research travel, the gathering of information, visiting people, volunteer travel for charity, migration to begin life somewhere else, religious pilgrimages and mission trips, business travel, trade, commuting, and other reasons, such as to obtain health care or waging or fleeing war or for the enjoyment of traveling. Travelers may use human-powered transport such as walking or bicycling; or vehicles, such as public transport, automobiles, trains, ferries, boats, cruise ships and airplanes.</p>
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
                        <a href="#" class="btn list-group-item bg-dark text-white border-0 text-start active">About</a>
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