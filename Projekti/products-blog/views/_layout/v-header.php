<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($headerTitle)) {echo $headerTitle; } else { echo "Undefined"; } ?></title>
    <link rel="stylesheet" href="./public/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/theme/css/custom.css">
</head>
<body>
    <!-- Start header -->
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand text-light px-3" href="#"><img src="./public/theme/img/logo.png" height="28" alt="Nike Logo"> <span class="text-black">SHOE SHOP</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./products-page.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->