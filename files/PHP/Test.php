<?php
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
$questions=generateQuestions($conn);
$answers=generateAnswers($conn);
$orderq=$_POST['orderq'];
$ordera=$_POST['ordera'];

?>





<div>
    <?php
    //generateOrder();
   printExercise($questions,$answers,$orderq,$ordera);
 
  // <a href="index.php?page=test&id='$id'" class='button big'>Weiter zu Frage $id</a>"
  ?>
      
echo"</div>";
header("Location: ./../../index.php?page=test&id=1");
