<?php
if(file_exists('./files/PHP/database/data.xml')){
$xml = simplexml_load_file('./files/PHP/database/data.xml');
}
else{
    exit("Datei kann nicht geöffnet werden.");
}
function readContent ($gesetz){
    global $xml;
    $arr = $xml->gesetze->gesetz;
    foreach ($arr as $meineseite){
        if ($meineseite->attributes()->path == $gesetz) return $meineseite->content;
    }
}
