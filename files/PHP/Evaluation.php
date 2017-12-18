<section id="testende">
<div class="testende-center">
<?php
//session_unset();
//session_destroy();
include_once 'files/includes/evaluation.inc.php';


$result=Endergebnis();
session_unset();
session_destroy();
?>
<!--<script>
var result=<?php //echo "$result";
?>
document.getElementById("demo").innerHTML = result;
</script>

<div id=demo></div>-->
<?php
echo"<div>";
if($result>=50){
echo"<h1><strong>Glückwunsch!</strong><br> Sie haben $result %!</h1>";
}
elseif($result<50){
  echo"<h1><strong>Schade!</strong><br> Sie haben $result %! Vielleicht beim nächsten mal</h1>";
}
    
    
    echo "</div>"
  ?>

</div>
</section>
