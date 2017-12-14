<section id="teststart">
<div class="test-center">
<?php
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
?>
<h1>Hier kannst du dein erlerntes Wissen testen<h1>
<?php
generateOrderQuestion($conn);
generateOrderAnswer();

?>
<<<<<<< HEAD
<button class="btn btn-1 btn-1a" ><a href="./index.php?page=test&id=1"> Starte jetzt den Test!</a></button>
=======
<a href="./index.php?page=test&id=1" class="btn btn-1"> Starte jetzt den Test!</a></button>
<!--echo "<a href='../../index.php?page=test&id=1?'".$orderq."'&'".$ordera."'>Test starten!</a>";-->
>>>>>>> 056fc38b3638ec479bbaf18da95dbdeee21b2aa6

</form>

</div>
</section>