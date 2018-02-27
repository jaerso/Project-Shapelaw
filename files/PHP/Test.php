<div class="main">

<?php
echo "<div class='container'>";
session_start();
include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
$questions=generateQuestions($conn);
$answers=generateAnswers($conn);
$value=rightAnswers($conn);
$difficulty=$_SESSION['difficulty'];
$ordera=$_SESSION['ordera'];
echo "<div id='testFragen'>";
   printExercise($questions,$answers,$difficulty,$ordera,$value);

   generateOrderAnswer();
   
 echo"<p id='check'></p>";

echo "</div>";
echo "</div>";
?>
   
  <script>
      function checkAnswer() {
    var x = document.forms['test']['answergroup'].value;
    if (x == "") {
       document.getElementById('check').innerHTML = 'Bitte wählen sie einen Wert';
         }
    else if(x==1){
        document.getElementById('check').innerHTML = 'Korrekte Antwort';
    }
    else{
        document.getElementById('check').innerHTML = 'Falsche Antwort';
        
    }
}
</script>
      
</div>