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
                    <?php foreach ($products as $key => $singleProduct) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="m-2 border border-primary rounded-5 p-3">
                                <div class="d-flex">
                                    <img src="<?php echo $singleProduct['img'] ?>" class="img-fluid w-50" alt="...">
                                    <div class="text-center mt-4 ml-01">
                                     <p class="card-text"><?php echo number_format($singleProduct['price']) ." din"; ?></p>
                                     <a href="./single-product-page.php?page=<?php echo $singleProduct['id']; ?>" class="btn btn-dark text-light rounded-pill">
                                     Prikaži proizvod
                                     </a>
                                    </div>
                                </div>
                                <h5 class="card-title"><?php echo $singleProduct['title']; ?></h5>
                            </div>
                        </div>
                    <?php } ?>
            </section>
        </div>
    </main>