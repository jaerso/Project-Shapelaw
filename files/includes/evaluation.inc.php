<?php
include 'dbh.inc.php';
include 'exercise.inc.php';

if(isset($_GET['answerSubmit'])){
    $v=$_POST['answers'];
    $loc=$_POST['loc'];

print_r($loc);

$evaluation=array();
$evaluation[$loc]=$v;
$loc+=1;
header("Location: ../../index.php?page=test&id=$loc");
exit();
}
?>
