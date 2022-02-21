<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
  date_default_timezone_set('Europe/Paris');
  $date = date('Y-m-d'); // Format AAAA-MM-DD
  $_SESSION['date'] = $date;
  $heure = date('H:i:s'); // Format HH:MM:SS
  $heuremin = date('H:i');

  function diff_time($t1 , $t2){
       //Heures au format (hh:mm:ss) la plus grande puis le plus petite

         $tab=explode(":", $t1);
         $tab2=explode(":", $t2);

         $h=$tab[0];
         $m=$tab[1];
         $s=$tab[2];
         $h2=$tab2[0];
         $m2=$tab2[1];
         $s2=$tab2[2];

         if ($h2>$h) {
         $h=$h+24;
         }
         if ($m2>$m) {
         $m=$m+60;
         $h2++;
         }
         if ($s2>$s) {
         $s=$s+60;
         $m2++;
         }

         $ht=$h-$h2;
         $mt=$m-$m2;
         $st=$s-$s2;
         if (strlen($ht)==1) {
         $ht="0".$ht;
         }
         if (strlen($mt)==1) {
         $mt="0".$mt;
         }
         if (strlen($st)==1) {
         $st="0".$st;
         }
         return $ht.":".$mt.":".$st;
      }

  if(diff_time('06:00:00', $heure) < '06:00:00'){
    if(!isset($_SESSION['heure'])){
      $_SESSION['heure'] = $heure;
      $nbPlaces = rand(60, 72);
      $_SESSION['nbPlaces'] = $nbPlaces;
      $_SESSION['heuremin'] = $heuremin;
    }
    else{
      if(strcmp($_SESSION['heuremin'], $heuremin)==0){
        $nbPlaces = $_SESSION['nbPlaces'];
      }
      else{
        $_SESSION['heure'] = $heure;
        $nbPlaces = rand(60, 72);
        $_SESSION['nbPlaces'] = $nbPlaces;
        $_SESSION['heuremin'] = $heuremin;
      }
    }
  }
  elseif(diff_time('12:00:00', $heure) < '06:00:00'){
    if(!isset($_SESSION['heure'])){
      $_SESSION['heure'] = $heure;
      $nbPlaces = rand(0, 5);
      $_SESSION['nbPlaces'] = $nbPlaces;
      $_SESSION['heuremin'] = $heuremin;
    }
    else{
      if(strcmp($_SESSION['heuremin'], $heuremin)==0){
        $nbPlaces = $_SESSION['nbPlaces'];
      }
      else{
        $_SESSION['heure'] = $heure;
        $nbPlaces = rand(0, 5);
        $_SESSION['nbPlaces'] = $nbPlaces;
        $_SESSION['heuremin'] = $heuremin;
      }
    }
  }
  elseif(diff_time('16:00:00', $heure) < '04:00:00'){
    if(!isset($_SESSION['heure'])){
      $_SESSION['heure'] = $heure;
      $nbPlaces = rand(5, 15);
      $_SESSION['nbPlaces'] = $nbPlaces;
      $_SESSION['heuremin'] = $heuremin;
    }
    else{
      if(strcmp($_SESSION['heuremin'], $heuremin)==0){
        $nbPlaces = $_SESSION['nbPlaces'];
      }
      else{
        $_SESSION['heure'] = $heure;
        $nbPlaces = rand(5, 15);
        $_SESSION['nbPlaces'] = $nbPlaces;
        $_SESSION['heuremin'] = $heuremin;
      }
    }
  }
  elseif(diff_time('16:00:00', $heure) < '04:00:00'){
    if(!isset($_SESSION['heure'])){
      $_SESSION['heure'] = $heure;
      $nbPlaces = rand(15, 40);
      $_SESSION['nbPlaces'] = $nbPlaces;
      $_SESSION['heuremin'] = $heuremin;
    }
    else{
      if(strcmp($_SESSION['heuremin'], $heuremin)==0){
        $nbPlaces = $_SESSION['nbPlaces'];
      }
      else{
        $_SESSION['heure'] = $heure;
        $nbPlaces = rand(15, 40);
        $_SESSION['nbPlaces'] = $nbPlaces;
        $_SESSION['heuremin'] = $heuremin;
      }
    }
  }
  elseif (diff_time('18:00:00', $heure) < '02:00:00'){
    if(!isset($_SESSION['heure'])){
      $_SESSION['heure'] = $heure;
      $nbPlaces = rand(40, 60);
      $_SESSION['nbPlaces'] = $nbPlaces;
      $_SESSION['heuremin'] = $heuremin;
    }
    else{
      if(strcmp($_SESSION['heuremin'], $heuremin)==0){
        $nbPlaces = $_SESSION['nbPlaces'];
      }
      else{
        $_SESSION['heure'] = $heure;
        $nbPlaces = rand(40, 60);
        $_SESSION['nbPlaces'] = $nbPlaces;
        $_SESSION['heuremin'] = $heuremin;
      }
    }
  }
  elseif (diff_time('00:00:00', $heure) < '06:00:00'){
    if(!isset($_SESSION['heure'])){
      $_SESSION['heure'] = $heure;
      $nbPlaces = rand(60, 72);
      $_SESSION['heuremin'] = $heuremin;
      $_SESSION['nbPlaces'] = $nbPlaces;
    }
    else{
      if(strcmp($_SESSION['heuremin'], $heuremin)==0){
        $nbPlaces = $_SESSION['nbPlaces'];
      }
      else{
        $_SESSION['heure'] = $heure;
        $nbPlaces = rand(60,72);
        $_SESSION['heuremin'] = $heuremin;
        $_SESSION["nbPlaces"] = $nbPlaces;
      }
    }
  }

?>
<h2 style="text-align:center; font-family:Verdana; margin-top:30px"> Nombre de places restantes au Parking Montaury : </h2>
<h1 style="text-align:center; color:orange;font-family:Verdana;"><?php echo $nbPlaces ?></h1>
<div class="grid-container">
  <p><fieldset style="width:900px; ">
   <p><a href="JavaScript:void(0)" id="bouton1" onclick="fonctionBouton1()" class="bouton-camera">Camera 1</a>
      <a href="JavaScript:void(0)" id="bouton2" onclick="fonctionBouton2()" class="bouton-camera">Camera 2</a>
      <a href="JavaScript:void(0)" id="bouton3" onclick="fonctionBouton3()" class="bouton-camera">Camera 3</a></p>
      <img id=image src="images/nondisponible.jpg" width="100%" height="500px" style="margin-top:20px;">
  </fieldset>
  <div class="graphique">
    <canvas id="monGraphique" ></canvas></div></p>
</div>

<script>
  function fonctionBouton1(){
    var x = document.getElementById("bouton1");
    var y = document.getElementById("image");
    var nbPlaces = '<?php echo $nbPlaces;?>'
    if (nbPlaces > 10){
      y.src="images/camera1-personne.PNG";
    }
    else {
      y.src="images/camera1-beaucoup.PNG";
    }
  }

  function fonctionBouton2(){
    var x = document.getElementById("bouton2");
    var y = document.getElementById("image");
    var nbPlaces = '<?php echo $nbPlaces;?>'
    if (nbPlaces > 10){
      y.src="images/camera2-personne.PNG";
    }
    else {
      y.src="images/camera2-beaucoup.PNG";
    }
  }

  function fonctionBouton3(){
    var x = document.getElementById("bouton3");
    var y = document.getElementById("image");
    var nbPlaces = '<?php echo $nbPlaces;?>'
    if (nbPlaces > 10){
      y.src="images/camera3-personne.PNG";
    }
    else {
      y.src="images/camera3-beaucoup.PNG";
    }
  }

  var ctx = document.getElementById("monGraphique").getContext("2d");
  var myChart = new Chart(ctx, {
      type: 'bar',

      data: {
        labels: ["0h", "1h", "2h","3h","4h","5h","6h","7h","8h","9h","10h","11h","12h","13h","14h","15h","16h","17h","18h","19h","20h","21h","22h","23h"
                  ],
      datasets: [{
            label: "Nombre moyenne de place disponible selon les heures",
            data: [69, 69, 70, 68, 67, 68, 60, 5, 3, 6, 7, 10, 13, 14, 12, 10, 20, 31, 42, 53, 51, 60, 64, 63],
            backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
              'rgb(54, 162, 235)',
            ],
              borderWidth: 1,
        }, ],
      },

      options: {
          plugins: {
                title: {
                    display: true,
                    text: "",
                  },
          },
        },
  });
</script>
