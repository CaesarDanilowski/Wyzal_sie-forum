<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    $nick = $_POST['imie'];
    $tresc = $_POST['tresc'];
    $data = date('JS F Y').", godz. ".date('H:i');

    $output = $data."\n".$nick."\n".$tresc."\n";

    $wp = fopen("$document_root/nowy/entries.txt", 'ab');

    flock($wp, LOCK_EX);
    fwrite($wp, $output, strlen($output));
    flock($wp, LOCK_UN);
    fclose($wp);

    header("Location: index.php");
?>