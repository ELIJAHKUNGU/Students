<link rel="stylesheet" href="css/bootstrap.css">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="show.php">STOCK MANAGEMENT </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="save.php">Save</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Show</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="reports.php">Sales Report</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><?//=$SESSION["info"]["names"]?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>

        </ul>


    </div>
</nav>
