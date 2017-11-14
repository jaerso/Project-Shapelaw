<?php
session_start();
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
$questions=generateQuestions($conn);
$answers=generateAnswers($conn);
$id=$_GET['id'];
//$orderq=$_SESSION['orderq'];
//$ordera=$_SESSION['ordera'];

?>
<div>
    <?php
   //printExercise($questions,$answers,$orderq,$ordera);
   printExercise($questions,$answers);
   $id++;
   echo "<a href='index.php?page=test&id=$id' >Weiter zu Frage $id</a>";
  ?>
      
</div>
