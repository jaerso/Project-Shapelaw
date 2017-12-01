<?php
include 'dbh.inc.php';
include 'exercise.inc.php';

if(isset($_GET['answerSubmit'])){
    $v=$_POST['answers'];
    $loc=$_POST['loc'];
echo"<script>
var check =$v;
if(check==1){document.getElementById('check').innerHTML = 'Richtige Antwort!';}

</script>";

print_r($loc);

echo" <script language='javascript'
type='text/javascript'>
document.location='index.php?page=test&id=$loc';
</script>";
}
}
?>
