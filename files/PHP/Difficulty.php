<section id="teststart">
<div class="test-center">
<?php

include_once 'files/includes/exercise.inc.php';
include_once 'files/includes/db.inc.php';
session_start();
//$orderq=$_SESSION['orderq'];
?>
<h1>Welchen Schwierigkeitsgrad hättest du gerne?<h1>
<?php
//difficulty($orderq);
//echo"<form action='difficulty($orderq)' method='post'>";
?>
<form method='post'>
<button type='submit' name='easy'>Leicht</button>
<button type='submit' name='middle'>Mittel</button>
<button type='submit' name='hard'>Hart</button>
</form>
<?php

if(isset($_POST['easy'])){
                $orderq=array();
                $orderq=$_SESSION['orderq'];
                $difficulty=array();
                for($i=0;$i<5;$i++){
                        $difficulty[$i]=$orderq[$i];
                }
                $_SESSION['difficulty']=$difficulty;
                header("Location: index.php?page=test&id=1");
                exit();
        }
        elseif(isset($_POST['middle'])){
                $orderq=$_SESSION['orderq'];
                $difficulty=array();
                for($i=0;$i<10;$i++){
                        $difficulty[$i]=$orderq[$i];
                }
                $_SESSION['difficulty']=$difficulty;
                header("Location: index.php?page=test&id=1");
                exit();
                }       
        elseif(isset($_POST['hard'])){
               $orderq=$_SESSION['orderq'];
                $difficulty=array();
                for($i=0;$i<15;$i++){
                        $difficulty[$i]=$orderq[$i];
                }
                $_SESSION['difficulty']=$difficulty;
                header("Location: index.php?page=test&id=1");
                exit();
                }
                ?>
</div>
</section>