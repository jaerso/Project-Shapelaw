<?php
//function difficulty($orderq){

       
        //}
function generateQuestions($conn){
$questions = array();
$sql= "SELECT * FROM questions";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){ 
        $i=$row['q_id'];
        $i-=1;
       $questions[$i]= $row['q'];

} 
return $questions;
}

function generateAnswers($conn){
    $answers= array();
    
    $sql= "SELECT * FROM questions";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){ 
            $i=$row['q_id'];
            $j=0; 
    $sql2="SELECT * FROM answers WHERE $i =q_id";
    $result2 = mysqli_query($conn, $sql2);
    $i-=1;
    while($row2 = mysqli_fetch_assoc($result2)){ 
                
            $answers[$i][$j]= $row2['ans'];
            $j++;
    }
    }
    return $answers;
    }

    function rightAnswers($conn){
        $rightans= array();
        
        $sql= "SELECT q_id FROM questions";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){ 
                $i=$row['q_id'];
                $j=0; 
        $sql2="SELECT * FROM answers WHERE $i =q_id";
        $result2 = mysqli_query($conn, $sql2);
        $i-=1;
        while($row2 = mysqli_fetch_assoc($result2)){ 
                    
                $rightans[$i][$j]= $row2['value'];
                $j++;
        }
        }
        return $rightans;
        }

   function generateOrderQuestion($conn){
        $sql= "SELECT COUNT(q_id) AS amount FROM questions";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){ 
         $amountq=$row['amount'];
    }
    $amountq-=1;
    $orderq = range(0,$amountq);
    shuffle($orderq);
    //$_SESSION['orderq']=$number;
       // $orderq=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
       // shuffle($orderq);
        $_SESSION['orderq']=$orderq;

        /*$orderq=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
        shuffle($orderq);
        $_SESSION['orderq']=$orderq;*/
    }

    function generateOrderAnswer(){
        $ordera=array(0,1,2,3);
        shuffle($ordera);
        $_SESSION['ordera']=$ordera;
    }
    
function printExercise($q,$a,$difficulty,$ordera,$value){
        $g=sizeof($difficulty);
    $id=$_GET['id'];
    $id-=1;
    $j=0;
    $order=$difficulty[$id];
    echo "<h2>$q[$order]</h2><br>";
    $answers='';
    echo"<form action='files/includes/evaluation.inc.php' method='post'>";
    for($i=0;$i<sizeof($ordera);$i++,$j++){
          $o=$ordera[$j];
          $print= $a[$order][$o];
          $v=$value[$order][$o];
    echo "<div><input type='radio' name='answersgroup' value='$v'> $print</div><br>";
         }
    echo"<input type='hidden' name='loc' value='".$_GET['id']."'>";
   
 // echo"  <button type='submit' onsubmit='return checkAnswer()'>Auswahl bestätigen</button>";
        if($id!=0){
                 echo"<button type='submit' name='backSubmit'>zurück zu Frage ".$id."</button>";
        }
       
        $id+=2;
 if($id<=$g){
         echo"<button type='submit' name='answerSubmit'>Weiter zu Frage $id</button>";
 }
else{
        echo"<button type='submit' name='endSubmit'>Test beenden</button>";    
}
 echo "</form>";
return $id;

}

?>