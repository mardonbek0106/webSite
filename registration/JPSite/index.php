<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWeb-Site</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
        defer></script>
</head>
<body>
    <div class="container-fluid">
        <div class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="#">Logo/Brand</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Action</a></li>
                            <li><a href="#" class="dropdown-item">Another action</a></li>
                            <li><a href="#" class="dropdown-item">Anyway</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="#" class="dropdown-item">Something</a></li>
                        </ul>
                    </li>
                </ul>
                <form action="app.js" id="form-grammer" class="d-flex">
                    <input type="search" name="" placeholder="Search Grammer..." id="searchGrammer" class="form-control me-2">
                    <button class="submit btn btn-outline-success">Search</button>
                </form>
            </div>
        </div>
        <main class="main m-2">
            <div class="d-flex justify-content-between">
                <?php 
                    if (isset($_GET['message'])) {
                        $name = $_GET['message'];
                        echo "<h5>$name</h5>";
                    };
        
                ?>
                <p id="clock"></p>
            </div>
            <div class="content border">
            </div>
            <div class="row justify-content-center mt-5">
                <a href="./n5/index.php" class="n-level col-3 d-flex justify-content-center align-content-center border p-1"><img src="./images/n5-tab.png" alt=""></a>
                <a href="" class="n-level col-3 d-flex justify-content-center align-content-center border p-1"><img src="./images/n4-tab.png" alt=""></a>
                <a href="" class="n-level col-3 d-flex justify-content-center align-content-center border p-1"><img src="./images/n3-tab.png" alt=""></a>
                <a href="" class="n-level col-3 d-flex justify-content-center align-content-center border p-1"><img src="./images/n2-tab.png" alt=""></a>
            </div>
        </main>
        <footer style="background-color: black; color: white; padding: 50px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur eros id est
                            faucibus congue. Aliquam vel dolor vitae justo pulvinar tincidunt id nec magna.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Connect With Us</h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-envelope"></i> info@example.com</li>
                            <li><i class="fa fa-phone"></i> 123-456-7890</li>
                            <li><i class="fa fa-map-marker"></i> 123 Main St, Anytown USA</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Stay Updated</h4>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-success mt-2">Subscribe</button>
                        </form>
                    </div>
                </div>
                <hr>
                <p class="text-center">Started © 2023
                    <a href="#">Organization name</a>. All Rights Reserved.
                </p>
            </div>
        </footer>
    </div>
    <script src="data.js"></script>
    <script src="app.js"></script>
</body>

</html>