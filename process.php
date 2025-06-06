<?php
include "classes/autoload.php";
 
[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];
$whiteList = ['text', 'pdf', 'json'];
if (in_array($format, $whiteList)) {
    $className = $format . "Exporter";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $export = new $className(['title' => $title, 'content' => $content]);
        $export->export($title);
    }
} else {
    die('error');
}
