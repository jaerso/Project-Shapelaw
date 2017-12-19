<?php

include_once('Databasehandler.php');

if(isset($_GET['gesetz'])){
    
    $gesetz = $_GET['gesetz'];


    function getContent() {
        global $gesetz;

        return readContent($gesetz);
    }

    /*function getTitle() {
        global $page; //$page_data;
        
        //return $page_data[$page]['title'];
        return readTitle($page);
    }

    function getNavigation() {
        global $page;
        return readNavi();
    }
    
    function getContent() {
        global $page; //$page_data;
    
        //return $page_data[$page]['content'];
        return readContent($page);
    }*/
    }
?>