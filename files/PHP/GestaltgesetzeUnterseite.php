<?php

    if(isset($_GET['gesetz'])){  ?>

        <section id="content">
        <h1><?//=getTitle()?></h1>
        <?=getContent($gesetz)?>
        </section>

    <?php } ?>