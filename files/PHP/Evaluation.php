<?php
//session_unset();
//session_destroy();
include_once 'files/includes/evaluation.inc.php';


$result=Endergebnis();

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
echo"<h2>Glückwunsch!<br> Sie haben $result %!</h2>";
}
elseif($result<50){
  echo"<h2>Schade!<br> Sie haben $result %! Vielleicht beim nächsten mal</h2>";
}
    
    
    echo "</div>"
  ?>
