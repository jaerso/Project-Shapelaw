

<?php

    if(isset($_GET['gesetz'])){  ?>

        <section id="content">
        
        <?=getContent($gesetz)?>
        </section>

    <?php } else { ?>

        <div class="container">

            <div id="Gestaltgesetze">

                <h1>Gestaltgesetze</h1>

                <blockquote class="blockquote">
                    <p class="mb-0">
                    Die Gestaltpsychologie ist eine Wahrnehmungslehre, die in den 20er bis 40er Jahren des letzten 
                    Jahrhunderts in Deutschland entstanden ist (ihre Wurzeln reichen zurück bis ins 19. Jahrhundert). 
                    Die Gestaltpsychologen interessierten sich vor allem dafür, wie wir komplexe Szenerien oder Reize wahrnehmen.
                    </p>
                </blockquote>

                <div class="container">

                    <div class="row">
                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=1">
                                    <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn1.jpg" alt="Bildbeschreibung Platzhalter">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=2">
                                    <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn2.jpg" alt="Bildbeschreibung Platzhalter">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=3">
                                    <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn3.jpg" alt="Bildbeschreibung Platzhalter">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=4">
                                    <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn4.jpg" alt="Bildbeschreibung Platzhalter">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=5">
                                    <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn5.jpg" alt="Bildbeschreibung Platzhalter">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=6">
                                    <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn6.jpg" alt="Bildbeschreibung Platzhalter">
                                </a>
                            </div>
                        </div>
                                                
                    </div>
                    
                </div>

            </div>

        </div>

<?php } ?>