<section id="teststart">
<div class="test-center">
<?php
session_start();
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
?>
<h1>Hier kannst du dein erlerntes Wissen testen<h1>
<?php
generateOrderQuestion($conn);
generateOrderAnswer();

?>
<<<<<<< HEAD
<a href="./index.php?page=test&difficulty" class="btn btn-1"> Starte jetzt den Test!</a></button>
<!--echo "<a href='../../index.php?page=test&id=1?'".$orderq."'&'".$ordera."'>Test starten!</a>";-->



=======
<a href="./index.php?page=test&id=1" class="btn btn-2"> Starte jetzt den Test!</a>
<!--echo "<a href='../../index.php?page=test&id=1?'".$orderq."'&'".$ordera."'>Test starten!</a>";-->

>>>>>>> 3cd4ce95d4706fd434d9b4aab03bd777fc03b511
</div>
</section>