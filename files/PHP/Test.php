<?php
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
$questions=generateQuestions($conn);
$answers=generateAnswers($conn);
?>





<div>
    <?php
    //generateOrder();
   printExercise($questions,$answers);
 
   <a href="index.php?page=test&id='$id'" class='button big'>Weiter zu Frage $id</a>"
    ?>
      
</div>