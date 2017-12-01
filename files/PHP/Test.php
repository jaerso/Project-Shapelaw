<div id="main">
<div class="container">
<?php
session_start();
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
$questions=generateQuestions($conn);
$answers=generateAnswers($conn);
$value=rightAnswers($conn);
$orderq=$_SESSION['orderq'];
$ordera=$_SESSION['ordera'];


echo "<div>";
    
    //generateOrder();
   $id=printExercise($questions,$answers,$orderq,$ordera,$value);
   $id++;
 

  echo"<p id='check'></p>";

  

   echo "<button type='button' onclick='check()'><a href='index.php?page=test&id=$id' class='button big'>Weiter zu Frage $id</a></button>";
  ?>
      
</div>
</div>
</div>