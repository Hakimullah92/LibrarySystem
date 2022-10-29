<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>

    <!-- --------------- Bootstrap CSS File----------------- -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <!-- ------------------ Custom CSS File------------------- -->
    <link rel="stylesheet" href="CSS/header.css">
</head>
<body class="bg-secondary">
    <header class="header">
        <!-- ------------ First--------------- -->
    <nav class="navbar bg-white">
  <div class="container-fluid ps-lg-5 pe-lg-5 ps-md-4 pe-md-4 ps-sm-2 pe-sm-2 flex-nowrap">
    <a class="navbar-brand fs-1 fw-bold text-danger">BKUC LMS</a>
    <form class="d-flex me-4 search-form position-relative " role="search">
      <input class="form-control me-2 search-input shadow p-2" type="search" placeholder="Search Books, Research---" aria-label="Search">
      <button class="btn btn-outline-success searchbox shadow bg-warning text-white ps-4 pe-4 position-absolute" type="submit">GO</button>
    </form>
    <div class="profile d-flex align-items-center gap-2 position-relative">
        <div class="profile-img"><img src="./images/Header/pic.jpeg" alt=""></div>
        <ion-icon name="caret-down-outline"></ion-icon>
    </div>
  </div>
</nav>

<!-- ----------------- Second----------------------------- -->

<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid ps-lg-5 pe-lg-5 ps-md-4 pe-md-4 ps-sm-0 pe-sm-0">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <ion-icon name="menu-outline" class="navbar-toggler-icon"></ion-icon>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark text-uppercase fw-bold me-3" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-dark text-uppercase fw-bold me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Research
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Arts</a></li>
            <li><a class="dropdown-item" href="#">Science</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-dark text-uppercase fw-bold me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Arts Books
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Education</a></li>
            <li><a class="dropdown-item" href="#">English Language And Literature</a></li>
            <li><a class="dropdown-item" href="#">Pashto</a></li>
            <li><a class="dropdown-item" href="#">Sociology</a></li>
            <li><a class="dropdown-item" href="#">Political Science</a></li>
            <li><a class="dropdown-item" href="#">Economics</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-dark text-uppercase fw-bold me-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Science Books
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Computer Science</a></li>
            <li><a class="dropdown-item" href="#">Mathematics</a></li>
            <li><a class="dropdown-item" href="#">Statistics</a></li>
            <li><a class="dropdown-item" href="#">Physics</a></li>
            <li><a class="dropdown-item" href="#">Chemistry</a></li>
            <li><a class="dropdown-item" href="#">Pharmacy</a></li>
            <li><a class="dropdown-item" href="#">Botany</a></li>
            <li><a class="dropdown-item" href="#">Zoology</a></li>
            <li><a class="dropdown-item" href="#">Geology</a></li>
            <li><a class="dropdown-item" href="#">Management Sciences & Commerce</a></li>
            <li><a class="dropdown-item" href="#">Biotechnology</a></li>
            <li><a class="dropdown-item" href="#">Agriculture</a></li>
            <li><a class="dropdown-item" href="#">Electronics</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark text-uppercase fw-bold me-3" aria-current="page" href="#">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark text-uppercase fw-bold me-3" aria-current="page" href="#">Contact Us</a>
        </li>
    </div>
  </div>
</nav>
    </header>
<!-- ----------------------- ionicons JS Links ----------------------------- -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- --------------------- Bootstrap JS File---------------------- -->

    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>