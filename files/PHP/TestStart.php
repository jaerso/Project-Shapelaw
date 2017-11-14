<?php
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
?>
<div>
<h2> TEST <h2>
<?php
$orderq=generateOrderQuestion();
$ordera=generateOrderAnswer();

echo "<form action='Test.php' method='POST'>
<input type='hidden' name='orderq' value='$orderq'>
<input type='hidden' name='ordera' value='$ordera'>

<button type='submit' name='submit'>Test starten!</button></a>";
//<a href='index.php?page=test&id=1'>
?>
</form>

</div>