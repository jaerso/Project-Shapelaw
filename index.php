<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="files/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="files/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="files/css/style.css"/>

    <title>Shapelaw</title>
    <script src="files/js/scripts.js"></script>
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-faded">
       
            <a class="navbar-brand" href="index.php?page=home">Shapelaw</a>
          <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">

              <?php
  $nav = "
       <li ".(( $_GET['page'] == 'home') ? 'class="active"' : '')."><a href=\"index.php?page=home\">Start</a></li>
       <li ".(( $_GET['page'] == 'appearance') ? 'class="active"' : '')."><a href=\"index.php?page=appearance\">Gestaltgesetze</a></li>
       <li ".(( $_GET['page'] == 'dialog') ? 'class="active"' : '')."><a href=\"index.php?page=dialog\">Dialoggestaltung</a></li>
       <li ".(( $_GET['page'] == 'test') ? 'class="active"' : '')."><a href=\"index.php?page=test\">Test</a></li>
       ";
    echo $nav;
?>

<!--alte li-Elemente, ohne active status-->

              <!--
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=home">Start <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=appearance">Gestaltgesetze</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=dialog">Dialoggestaltung</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=test">Test</a>
                </li>
                -->
            
              </ul>
            </div>
          </nav>

    </header>

    

    <?php 
        if(!isset($_GET['page'])){
            header("Location: index.php?page=home");
        }
        elseif($_GET['page']==''){$_GET['page']='home';}
        ?>

        <?php
        if($_GET['page'] != 'home'  && $_GET['page'] != 'test' || $_GET['page'] == null){ echo "<div id=\"main\">";}
        ?>

            <?php
            if($_GET['page'] =='home'){
                include_once "files/PHP/Startseite.php";
            }
            elseif($_GET['page'] =='appearance'){
               include_once "files/PHP/Gestaltgesetze.php";
            }
            elseif($_GET['page'] =='dialog'){
                include_once "files/PHP/Dialoggesetze.php";
            }
            elseif($_GET['page'] =='test'){
                if(isset($_GET['id'])){
                    include_once "files/PHP/Test.php";
                }
                else{include_once "files/PHP/TestStart.php";}
                 }
                 elseif($_GET['page'] =='testevaluation'){
                    include_once "files/PHP/Evaluation.php";
                }
            elseif($_GET['page'] =='about'){
                include_once "files/PHP/UeberUns.php";
            }
            ?>

        <?php if($_GET['page']!='home'){echo "</div>";}
        ?>

    <footer id="footer">
    
          <div class="container">
                        <section class="links">
                            <div class="row">
    
                        <div class="col-lg-12 col-md-12 col-xs-12">
                        <a class="backtotop" href="#top"><span class="fa fa-angle-up fa-3x"></span></a>
                        <hr id="hr-footer">
                    </div>
    
            <section class="col-lg-4 col-lg-push-1 col-md-4 col-md-push-1 col-xs-12">
                <h3>placeholder</h3>
                <ul class="unstyled">
                  <li><a href="#">placeholder</a></li>
                  <li><a href="#">placeholder</a></li>
                  <li><a href="#">placeholder</a></li>
                </ul>
              </section>
    
                                <section class="col-lg-4 col-lg-push-1 col-md-4 col-md-push-1 col-xs-12">
                                    <h3>placeholder</h3>
                                    <ul class="unstyled">
                                        <li><a href="#">placeholder</a></li>
                                        <li><a href="#">placeholder</a></li>
                                        <li><a href="#">placeholder</a></li>
                                    </ul>
                  </section>
    
                                <section class="col-lg-4 col-lg-push-1 col-md-4 col-md-push-1 col-xs-12">
                                    <h3>placeholder</h3>
                                    <ul class="unstyled">
                                        <li><a href="#">placeholder</a></li>
                                        <li><a href="#">placeholder</a></li>
                                        <li><a href="#">placeholder</a></li>
                                    </ul>
                  </section>
    
                            </div>
              </section>
    
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-xs-12">
                                <ul class="copyright">
                                    <li>&copy; 2017 Shapelaw</li>
                                </ul>
                            </div>
                        </div>
                        </div>
    
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="files/js/bootstrap.min.js"></script>
    <script src="files/js/scripts.js"></script>
    
</body>
</html>