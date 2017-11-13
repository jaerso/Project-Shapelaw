<?php
include_once 'includes/exercise.inc.php';
include_once 'includes/db.inc.php';
$questions=generateQuestions($conn);
$answers=generateAnswers($conn);
?>
<h2> TEST <h2>




<div>
    <?php
    //generateOrder();
   printExercise($questions,$answers);
   
/*print_r($questions);
echo "<br>";
print_r($answers);*/
    ?>
</div>