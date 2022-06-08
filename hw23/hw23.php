<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./public/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/theme/css/custom.css">
</head>
<body>
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
    <?php 
if (isset($_GET["submit"])) {
    $_SESSION["counter"]=1;
    echo ++$_SESSION["counter"];
}
 ?>
    <div class="<?php  if ($_SESSION["counter"]>=1) echo "d-none";?> border border-dark p-5 text-center w-25 bg-light position-fixed top-50 start-50 translate-middle">
        <form action="" method="GET">
            <img src="./public/theme/img/cookie.png" class="p-2">
            <h5 class="pt-3">We use cookies</h5>
            <p>This website uses cookies to ensure you get the best experience on our website</p>
            <button class="btn btn-outline-dark rounded-pill" type="submit" name="submit">ACCEPT</button>
        </form>
    </div>
    <main>
        <div class="container">
        <form action="" class="mt-2" method="GET">
            <section class="d-md-flex flex-row justify-content-between">
                <div>
                    <label for="sortiranje">Sortiraj:</label>
                        <select name="sortiranje" id="sortiranje" class="p-1 px-2 rounded-pill">
                        <option value="" selected>Opcije</option>
                        <option value="ceni-opadajuće">Po ceni opadajuće</option>
                        <option value="ceni-rastuće">Po ceni rastuće</option>
                        </select>
                </div>
                   <div>
                       <input type="text" placeholder="Ukucaj proizvod" name="pretraga">
                       <button class="rounded-pill btn-primary" type="submit">Pretraži proizvode</button>
                   </div>
            </section>
        </form>
            <section class="row mt-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="m-2 border border-primary rounded-5 p-3">
                                <div class="d-flex">
                                    <img src="./public/theme/img/cipela1.png" class="img-fluid w-50" alt="...">
                                    <div class="text-center mt-4 ml-01">
                                     <p class="card-text">12 000 din</p>
                                     <a href="#" class="btn btn-dark text-light rounded-pill">
                                     Prikaži proizvod
                                     </a>
                                    </div>
                                </div>
                                <h5 class="card-title">Nike Patike 1</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="m-2 border border-primary rounded-5 p-3">
                                <div class="d-flex">
                                    <img src="./public/theme/img/cipela2.png" class="img-fluid w-50" alt="...">
                                    <div class="text-center mt-4 ml-01">
                                     <p class="card-text">12 000 din</p>
                                     <a href="#" class="btn btn-dark text-light rounded-pill">
                                     Prikaži proizvod
                                     </a>
                                    </div>
                                </div>
                                <h5 class="card-title">Nike Patike 2</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="m-2 border border-primary rounded-5 p-3">
                                <div class="d-flex">
                                    <img src="./public/theme/img/cipela3.jpg" class="img-fluid w-50" alt="...">
                                    <div class="text-center mt-4 ml-01">
                                     <p class="card-text">12 000 din</p>
                                     <a href="#" class="btn btn-dark text-light rounded-pill">
                                     Prikaži proizvod
                                     </a>
                                    </div>
                                </div>
                                <h5 class="card-title">Nike Patike 3</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="m-2 border border-primary rounded-5 p-3">
                                <div class="d-flex">
                                    <img src="./public/theme/img/cipela4.png" class="img-fluid w-50" alt="...">
                                    <div class="text-center mt-4 ml-01">
                                     <p class="card-text">12 000 din</p>
                                     <a href="#" class="btn btn-dark text-light rounded-pill">
                                     Prikaži proizvod
                                     </a>
                                    </div>
                                </div>
                                <h5 class="card-title">Nike Patike 4</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="m-2 border border-primary rounded-5 p-3">
                                <div class="d-flex">
                                    <img src="./public/theme/img/cipela5.jpg" class="img-fluid w-50" alt="...">
                                    <div class="text-center mt-4 ml-01">
                                     <p class="card-text">12 000 din</p>
                                     <a href="#" class="btn btn-dark text-light rounded-pill">
                                     Prikaži proizvod
                                     </a>
                                    </div>
                                </div>
                                <h5 class="card-title">Nike Patike 5</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="m-2 border border-primary rounded-5 p-3">
                                <div class="d-flex">
                                    <img src="./public/theme/img/cipela6.png" class="img-fluid w-50" alt="...">
                                    <div class="text-center mt-4 ml-01">
                                     <p class="card-text">12 000 din</p>
                                     <a href="#" class="btn btn-dark text-light rounded-pill">
                                     Prikaži proizvod
                                     </a>
                                    </div>
                                </div>
                                <h5 class="card-title">Nike Patike 6</h5>
                            </div>
                        </div>
            </section>
        </div>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted px-3">© 2022 Shoe Shop, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <img src="./public/theme/img/logo.png" height="20" alt="Nike Logo">
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="https://getbootstrap.com/" class="nav-link px-2 text-muted">Bootstrap</a></li>
          <li class="nav-item"><a href="https://www.php.net/docs.php" class="nav-link px-2 text-muted">PHP</a></li>
          <li class="nav-item"><a href="https://google.com" class="nav-link px-2 text-muted">Google</a></li>
          <li class="nav-item"><a href="https://itbootcamp.rs/" class="nav-link px-2 text-muted">IT Bootcamp</a></li>
        </ul>
      </footer>
    <script src="./public/theme/js/bootstrap.js"></script>
</body>
</html>