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
<a href="./index.php?page=test&id=1" class="btn btn-1"> Starte jetzt den Test!</a></button>
<!--echo "<a href='../../index.php?page=test&id=1?'".$orderq."'&'".$ordera."'>Test starten!</a>";-->

</form>

</div>
</section>