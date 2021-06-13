<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Part2</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-12 text-center border border-dark">Part2</h1>
        <!-- EXooooooooooo11111111111111111111111111111111111111111111111111111 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo1</h2>
          <div class=" d-flex justify-content-between">
            <div class="">
              <p>For</p>
              <?php
              for($i = 0; $i <= 10; $i++) {
              ?>
              <p><?= $i ?></p>
              <?php
              }
              ?>
            </div>
            <div class="">
              <p>While</p>
              <?php
                $i = 0;
                while($i <= 10) {
                ?>
                <p><?= $i ?></p>
                <?php
                  $i++;
                }
              ?>
            </div>
            <div class="">
              <p>Tabl</p>
              <?php
              $tabl = array(0,1,2,3,4,5,6,7,8,9,10);
              foreach ($tabl as $val) {
              ?>
              <p><?= $val ?></p>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
        <!-- EXooooooooooooooooooo222222222222222222222222222222222 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo2</h2>
          <div class=" d-flex justify-content-between">
            <div class="">
              <p>Wile</p>
              <?php
              $a = 0;
              $b = rand(1,100);
              while ($a <= 20) {
                  $result = $a*$b;
                  $a++;
                ?>
                <p><?= '(', $b, ')', $a, ' * ', $b, ' = ', $result ?></p>
                <?php
                }
              ?>
            </div>
            <div class="">
              <p>For</p>
              <?php
              $b = rand(1,100);
              for ($a = 0; $a <= 20; $a++) {
                  $result = $a*$b;
                ?>
                <p><?= '(', $b, ')', $a, ' * ', $b, ' = ', $result ?></p>
                <?php
                }
              ?>
            </div>
          </div>
        </div>
        <!-- EXooooooooooooo33333333333333333333333333333333 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo3</h2>
          <div class="d-flex justify-content-between">
            <div class="">
              <p>For</p>
              <?php
              for($i = 1; $i <= 15; $i++) {
                if($i<15){
                ?>
                <p><?= 'On y est presque' ?></p>
              <?php
                }else {
              ?>
              <p><?= 'Youpiiiiiii' ?></p>
              <?php
                }
              }
              ?>
            </div>
            <div class="">
              <p>Wile</p>
              <?php
              $i = 0;
              while ( $i < 15) {
                $i++;
                if($i != 15){
                ?>
                <p><?= 'On y est presque' ?></p>
              <?php
                }else {
              ?>
              <p><?= 'Youpiiiiiii' ?></p>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
        <!-- EXooooooooooo444444444444444444444444444444 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo4</h2>
          <div class="d-flex justify-content-between">
            <div class="">
              <p>Wile</p>
              <?php
              $np = 1;
              while ($np <= 100) {
              ?>
              <p><?= $np ?></p>
              <?php
              $np += 15;
              }
               ?>
            </div>
            <div class="">
              <p>For</p>
              <?php
              for($i=1; $i <= 100; $i += 15) {
              ?>
              <p><?= $i ?></p>
              <?php
              }
              ?>
            </div>
            <div class="">
              <p>Tabl</p>
              <?php
              $tabb = array();
              for($i=1;  $i < 100; $i += 15) {
                foreach ($tabb as $key => $i) {
              ?>
              <p><?= $i ?></p>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
          <!-- EXoooooooooo5555555555555555555555555555555555555  -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo5</h2>
          <div class="d-flex justify-content-between">
            <div class="">
              <p>Wile</p>
              <?php
              $nb = 200;
              while ($nb >= 0) {
              ?>
              <p><?= $nb ?></p>
              <?php
              $nb -= 12;
              }
              ?>
            </div>
            <div class="">
              <p>For</p>
              <?php
              for ($nb = 200; $nb >= 0; $nb -= 12) {
              ?>
              <p><?= $nb ?></p>
              <?php
              }
              ?>
            </div>
            <div class="">
              <p>Tabl</p>
              <?php
              $tabb = array();
              for($i=200;  $i < 0; $i -= 12) {
                foreach ($tabb as $key => $i) {
              ?>
              <p><?= $i ?></p>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
        <!-- BONUUUUUUUUUUUUUUUUUSSSSSSSSSSSSSS -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Bonus</h2>
          <select>
            <?php
            $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
            $tablength = count($tab);
            for($i = 0; $i < $tablength; $i++){
              ?>
              <!-- <option>Choisir un mois</option> -->
              <option><?= $tab[$i] ?></option>
              <?php
            }
            ?>
          </select>
            <?php
              $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
            ?>
            <select>
              <?php
              foreach ($tab as $value) {
                ?>
                <option><?= $value ?></option>
                <?php
              }
              ?>
            </select>
        </div>
      </div>
    </div>
    <!-- <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  </body>
</html>
