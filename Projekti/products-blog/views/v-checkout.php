<main>
<form action="" class="mx-3" method="POST">
 <div class="container d-md-flex">
      <div>
        <div class="form-group">
          <label for="ime">Ime</label>
          <input type="text" class="form-control" id="ime" placeholder="Unesi ime" name="ime">
          <?php if (isset($_POST["naruči"])) {if (empty(trim($_POST["ime"]))) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[0];?></small><?php } }?>
        </div>
        <div class="form-group">
          <label for="prezime">Prezime</label>
          <input type="text" class="form-control" id="prezime" placeholder="Unesi prezime" name="prezime">
          <?php if (isset($_POST["naruči"])) {if(empty(trim($_POST["prezime"]))) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[1];?></small><?php } }?>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="Unesi email" name="email">
          <?php if (isset($_POST["naruči"])) {if(empty(trim($_POST["email"]))) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[2];?></small><?php }
          else if(strpos(trim($_POST["email"]), "@") == false) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[3];?></small><?php }
          else if (strpos(trim($_POST["email"])," ")) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[4];?></small><?php }} ?>
        </div>
        <div class="row">
            <div class="form-group col-6">
              <label for="grad">Grad</label>
              <input type="text" class="form-control" id="grad" placeholder="Grad" name="grad">
              <?php if (isset($_POST["naruči"])) {if(empty(trim($_POST["grad"]))) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[5];?></small><?php }}?>
            </div>
            <div class="form-group col-6">
              <label for="telefon">Telefon</label>
              <input type="text" class="form-control" id="telefon" placeholder="Telefon" name="telefon">
              <?php if (isset($_POST["naruči"])) {if(empty(trim($_POST["telefon"]))) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[6];?></small><?php }
               else if(!is_numeric($_POST["telefon"])) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[7];?></small><?php }
               else if(strlen(trim($_POST["telefon"]))<9 || strlen(trim($_POST["telefon"]))>11) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[7];?></small><?php }}?>
            </div>
            <div class="form-group col-6">
              <label for="ulica">Ulica</label>
              <input type="text" class="form-control" id="ulica" placeholder="Ulica" name="ulica">
              <?php if (isset($_POST["naruči"])) {if(empty(trim($_POST["ulica"]))) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[8];?></small><?php }} ?>
            </div>
            <div class="form-group col-6">
              <label for="uip">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="Zip" name="zip">
              <?php if (isset($_POST["naruči"])) {if(empty(trim($_POST["zip"]))) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[9];?></small><?php }
              else if(!is_numeric($_POST["zip"])) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[6];?></small><?php }
              else if (strpos(trim($_POST["zip"])," ")) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[4];?></small><?php }}?>
            </div>
            <div class="form-group">
              <textarea name="komentar" placeholder="Komentar...." cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="ček" name="ček">
          <label class="form-check-label" for="ček">Da li se slažete sa pravilima?</label>
          <?php if (isset($_POST["naruči"])) {if(empty($_POST["ček"])) { ?><small name="poruka" class="form-text text-muted"><?php echo $systemErrors[10];?></small><?php }} ?>
        </div>
      </div>
    <div class="container">
       <div class="d-flex">
           <div class="w-75"><img src="<?php echo htmlspecialchars($singleProduct["img"]); ?>" class="img-fluid p-4" alt="..."></div>
           <div>
               <h5 class="mb-4"><?php echo htmlspecialchars($singleProduct['title']); ?></h5>
               <p>Količina:<?php echo " $količina";?></p>
           </div>
       </div>
       <p class="h3 mb-3"><?php echo number_format($singleProduct["price"]) . " din."; ?></p>
       <p>Cena sa količinom: <?php echo number_format($cenasakoličinom) . " din.";?></p>
       <p>Total: <?php echo number_format($cenasakoličinom) . " din.";?></p>
       <div>
           <button class="btn btn-dark rounded-pill w-50 right" name="naruči">Naruči</button>
        </div>
    </div>
 </div>
</form>
<?php if ($isValidFlag==true) {?>
  <div class="alert alert-success" role="alert">
  <?php echo "Čestitamo, ".  ucfirst($ime) . " ". ucfirst($prezime) . ". Uspešno ste naručili proizvod " . $singleProduct['title'] . ". <br>Adresa na koju šaljemo proizvod je: $ulica, $zip $grad. Iznos za plaćanje je: " . number_format($cenasakoličinom) . " din.,<br>Hvala na kupovini!"; } ?>
  </div>
</main>