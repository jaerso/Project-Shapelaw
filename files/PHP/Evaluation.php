<section id="testende">
<div class="testende-center">
<?php
//session_unset();
//session_destroy();
include_once 'files/includes/evaluation.inc.php';


$result=Endergebnis();
//print_r($result);
$size=$_SESSION['size'];
session_unset();
session_destroy();

echo"<div>";
/*if($result>=50){
echo"<h1><strong>Glückwunsch!</strong><br> Sie haben $result %!</h1>";
}
elseif($result<50){
  echo"<h1><strong>Schade!</strong><br> Sie haben $result %! Vielleicht beim nächsten mal</h1>";
}
    */

    
      echo"<h1>Sie haben $result von $size Punkten!</h1>";
      echo "</div>"
    
  ?>

  <a href="index.php?page=home" class="btn btn-2">Zurück zur Startseite!</a>

</div>
</section>
