<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestaltungsgesetze</title>
</head>
<body>
    <header id="header">

    <nav>
        <ul>
            <li><a href="index.php?page=home">Start</a></li>
            <li><a href="index.php?page=appearance">Gestaltgesetze</a></li>
            <li><a href="index.php?page=dialog">Dialoggesetze</a></li>
            <li><a href="index.php?page=test">Test</a></li>
            <li><a href="index.php?page=about">Über uns</a></li>
        </ul>
    </nav>

    </header>

    <section id="main" class="wrapper">

    <?php 
        if(!isset($_GET['page'])){
            header("Location: index.php?page=home");
        }
        elseif($_GET['page']==''){$_GET['page']='home';}
        ?>

        <?php
        if($_GET['page'] != 'home' && $_GET['page'] != 'appearance' && $_GET['page'] != 'dialog' && $_GET['page'] != 'test' &&$_GET['page'] != 'about' || $_GET['page'] == null){ echo "<div class=\"container\">";}
        ?>
            <?php
            if($_GET['page'] =='home'){
                include_once "PHP/Startseite.php";
            }
            elseif($_GET['page'] =='appearance'){
               include_once "PHP/Gestaltgesetze.php";
            }
            elseif($_GET['page'] =='dialog'){
                include_once "PHP/Dialoggesetze.php";
            }
            elseif($_GET['page'] =='test'){
                include_once "PHP/Test.php";
            }
            elseif($_GET['page'] =='about'){
                include_once "PHP/UeberUns.php";
            }
            ?>

        <?php if($_GET['page']!='home'){echo "</div>";}
        ?>
    </section>

    <footer>
    </footer>
    
</body>

</html>