<div id="main">

<?php
echo "<div class='container'>";
session_start();
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
$questions=generateQuestions($conn);
$answers=generateAnswers($conn);
$value=rightAnswers($conn);
$orderq=$_SESSION['orderq'];
$ordera=$_SESSION['ordera'];

echo "<div>";
   $id=printExercise($questions,$answers,$orderq,$ordera,$value);
// echo"<p id='check'></p>";

echo "</div>";
echo "</div>";
?>
  <!-- <button type='submit' onclick='return checkAnswer()'>Auswahl bestätigen</button>
  <script>
      function checkAnswer() {
    var x = document.forms["test"]["answers"].value;
    if (x == "") {
       document.getElementById("check").innerHTML = 'Bitte wählen sie einen Wert ein';
         }
    else if(x==1){
        document.getElementById("check").innerHTML = 'Korrekte Antwort';
    }
    else{
        document.getElementById("check").innerHTML = 'Falsche Antwort';
        
    }
}
</script>-->
      
</div>