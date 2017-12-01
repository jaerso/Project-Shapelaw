<section id="teststart">
<div class="test-center">
<?php
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
session_start();
?>
<h1>Hier kannst du dein erlerntes Wissen testen<h1>
<?php
/*$orderq=generateOrderQuestion();
$ordera=generateOrderAnswer()

$_SESSION['orderq']=$orderq;
$_SESSION['ordera']=$ordera;*/
generateOrderAnswer();
generateOrderQuestion();
//Test.php?$orderq&$ordera;

/*echo "<form action='Test.php' method='POST'>
<input type='hidden' name='orderq' value='$orderq'>
<input type='hidden' name='ordera' value='$ordera'>

<button type='submit' name='submit'>Test starten!</button></a>";
//<a href='index.php?page=test&id=1'>*/
?>
<button class="btn btn-1 btn-1a" ><a href="./index.php?page=test&id=1"> Starte jetzt den Test!</a></button>
<!--echo "<a href='../../index.php?page=test&id=1?'".$orderq."'&'".$ordera."'>Test starten!</a>";-->

</form>

</div>
</section>