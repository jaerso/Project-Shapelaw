<?php
session_start();
$evaluation=array();

if(isset($_POST['answerSubmit'])){
    $v=$_POST['answergroup'];
    $loc=$_POST['loc'];
    $loc-=1;
    $evaluation=$_SESSION['evaluation'];
    $evaluation[$loc]=$v;
    $_SESSION['evaluation']=$evaluation;
$loc+=2;
header("Location: ../../index.php?page=test&id=$loc");
exit();
}
/*elseif(isset($_POST['backSubmit'])){
    $v=$_POST['answersgroup'];
    $loc=$_POST['loc'];
    $loc-=1;
    
header("Location: ../../index.php?page=test&id=$loc");
exit();
}*/
elseif(isset($_POST['endSubmit'])){
    $v=$_POST['answergroup'];
    $loc=$_POST['loc'];
    $loc-=1;
    $evaluation=$_SESSION['evaluation'];
    $evaluation[$loc]=$v;
    $_SESSION['evaluation']=$evaluation;
header("Location: ../../index.php?page=testevaluation");
exit();
}

function Endergebnis(){
    $pkt=0;
    $e=$_SESSION['evaluation'];
    $size=sizeof($e);
    $size-=1;
    for($i=0;$i<$size;$i++){
    $pkt+=$e[$i];
    }
    $size+=1;
    $_SESSION['size']=$size;
    //$result= ($pkt/$size)*100;
    //return $result;
  //  return round($result);
  return $pkt;
}
?>
