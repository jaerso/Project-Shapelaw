<?php

    if(isset($_GET['gesetz'])){  ?>

        <section id="content">
        
        <?=getContent($gesetz)?>
        </section>

    <?php } else { ?>
        
    <div class="main">

        <div class="container">

            <div >

                <h1>Gestaltgesetze</h1>

                <hr>

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
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=1">
                                    <h1> Gesetz der Ähnlichkeit</h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn1.jpg" alt="Gesetz der Ähnlichkeit / Gleichheit"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=2">
                                    <h1> Gesetz der Nähe </h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn2.jpg" alt="Bildbeschreibung Platzhalter"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=3">
                                    <h1> Gesetz der guten Fortsetzung</h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn3.jpg" alt="Bildbeschreibung Platzhalter"> -->
                                </a>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=4">
                                    <h1> Gesetz der Schließung</h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn4.jpg" alt="Bildbeschreibung Platzhalter"> -->
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=5">
                                    <h1> Gesetz der Symmetrie</h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn5.jpg" alt="Bildbeschreibung Platzhalter"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=6">
                                    <h1> Gesetz der guten Gestalt</h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn6.jpg" alt="Bildbeschreibung Platzhalter"> -->
                                </a>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=7">
                                    <h1 style="text-align: center; margin-bottom: 1em !important;"> Konturen</h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn4.jpg" alt="Bildbeschreibung Platzhalter"> -->
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=8">
                                    <h1 style="text-align: center; margin-bottom: 1em !important;"> Verstärkung und Abschwächung der Wirkungen</h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn5.jpg" alt="Bildbeschreibung Platzhalter"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div id='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=9">
                                    <h1 style="text-align: center; margin-bottom: 1em !important;"> Isolation von Darstellungselementen</h1>
                                    <!-- <img class= "galerie-Bilder" src="files/minigolfbahnen/bahn6.jpg" alt="Bildbeschreibung Platzhalter"> -->
                                </a>
                            </div>
                        </div>
                                                
                    </div>
                    
                </div>

            </div>

        </div>

    </div>

<?php } ?>