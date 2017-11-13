<?php


function generateQuestions($conn){
$questions = array();
/*$answers= array();*/


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

   /* function generateOrder(){
        $orderq=array(0,1);
        $ordera=array(0,1,2,3);
        shuffle($orderq);
        shuffle($ordera);
    }*/
    
function printExercise($q,$a){
        $orderq=array(0,1);
        $ordera=array(0,1,2,3);
        shuffle($orderq);
        shuffle($ordera);
    $id=$_GET['id'];
    $id-=1;
    $order=$orderq[$id];
    echo "<h2>$q[$order]</h2>";
    $j=0;
    for($i=0;$i<sizeof($ordera);$i++,$j++){
          $o=$ordera[$j];
          $print= $a[$order][$o];
    echo "<p>$print</p> <br>";
    
}
}
?>