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

   function generateOrderQuestion(){
        $orderq=array(0,1,2,3);
        shuffle($orderq);
        $_SESSION['orderq']=$orderq;
    }
    function generateOrderAnswer(){
        $ordera=array(0,1,2,3);
        shuffle($ordera);
        $_SESSION['ordera']=$ordera;
    }
    
function printExercise($q,$a,$orderq,$ordera,$value){
        $g=sizeof($q);
    $id=$_GET['id'];
    $id-=1;
    $j=0;
    $order=$orderq[$id];
    echo "<h2>$q[$order]</h2><br>";
    $answers='';
    
    //echo "<form action='Auswertung.inc.php' method='POST'>";
    echo"<form action='evaluation.inc.php' name='test' method='post'>";
    for($i=0;$i<sizeof($ordera);$i++,$j++){
          $o=$ordera[$j];
          $print= $a[$order][$o];
          $v=$value[$order][$o];
    echo "<div><input type='radio' name='answers' value='$v'> $print</div><br>";
        echo"<input type='hidden' name='loc' value='".$_GET['id']."'>";
    }
   
 // echo"  <button type='submit' onsubmit='return checkAnswer()'>Auswahl bestätigen</button>";
 $id+=2;
 //echo"<button type='button' name='submit'><a href='index.php?page=test&id='".$id--."' >zurück zu Frage '".$id--."'</a></button>";
 print_r($g);
 print_r($id);
 if($id<=$g){
         echo"<button type='button' name='answerSubmit'>Weiter zu Frage $id</button>";
}
else{
        echo"<button type='button' name='endSubmit'><a href='index.php?page=test&id=$id' >Weiter zu Frage $id</a></button>";    
}
 
echo "</form>";


return $id;

}

//function evaluation();
?>