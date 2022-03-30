<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/"> -->



    <!-- Bootstrap core CSS -->
    <link href="./css/dashboard.rtl.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="./css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .col-sm-8 {
            margin-left: 15rem;
            margin-top: 2rem;
        }
        
        .col-sm-8 .shadow {
            padding: 30px;
        }
        .col-sm-8 .shadow  .text-center .bg-success{
            padding:20px 10px 10px 20px;
            font-size:3rem;
            border-radius:100%;
            text-align:center;
        }
    </style>


    <!-- Custom styles for this template -->

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">ELIMU E-BURSARY</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="./logout.php">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
        <nav id="sidebarMenu" class="col-md-4 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span> Dashboard
                            </a>
                        </li>
                        <hr>

                        <li class="nav-item ">
                            <a class="nav-link" href="">
                                <img src="./assets/feather/file.svg" alt="" srcset=""> My Applications
                            </a>
                        </li>
                        <div class="li nav-item">
                        <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="./uploadID.php">
                                <img src="./assets/feather/file-text.svg" alt="" srcset=""> Make Application
                                
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./apply.php">
                                <img src="./assets/feather/book-open.svg" alt="" srcset="">User Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./reports.php">
                                <img src="./assets/feather/bar-chart.svg" alt="" srcset=""> Reports
                            </a>
                        </li>

                    </ul>


                </div>
            </nav>
            <div class="col-sm-8">

