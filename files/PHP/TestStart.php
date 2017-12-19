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
<a href="./index.php?page=test&difficulty" class="btn btn-2"> Starte jetzt dein Test!</a>
<!--echo "<a href='../../index.php?page=test&id=1?'".$orderq."'&'".$ordera."'>Test starten!</a>";-->

</div>
</section>