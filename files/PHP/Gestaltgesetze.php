<?php

    if(isset($_GET['gesetz'])){  ?>

        <section id="content">
        
        <?=getContent($gesetz)?>
        </section>

    <?php } else { ?>
        
    <div class="main">

        <div class="container">

            <div class="gestaltBottom">

                <h1>Gestaltgesetze</h1>

                <hr>

                <blockquote class="blockquote"> 
                    <p class="mb-0">
                    Schon in den Jahren 1922 / 23 wurde die Wirkung von Anordnungen in der „Berliner Schule“ 
                    erkannt und in der sogenannten Gestalttheorie beschrieben.
                    Daraus leitete M. Wertheimer 1923 seine Gestaltgesetze ab.<br>
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
                                    <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Ähnlichkeit / Gleichheit">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=2">
                                    <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Nähe">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=3">
                                    <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Nähe">
                                </a>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=4">
                                <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Nähe">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=5">
                                <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Nähe">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="divBorder" style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=6">
                                <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Nähe">
                                </a>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=7">
                                <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Nähe">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=8">
                                <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Nähe">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class='divBorder' style="cursor: pointer;">
                                <a href="index.php?page=appearance&gesetz=9">
                                <img src="files\img\gesetzübersicht\gesetz-der-ähnlichkeit.png" alt="Gesetz der Nähe">
                                </a>
                            </div>
                        </div>
                                                
                    </div>
                    
                </div>

            </div>

        </div>

    </div>

<?php } ?>