<?php

$filemane = __DIR__ . '/storage.txt';

if (!file_exists($filemane)) {
    $handle = fopen($filemane, 'w');
    fclose($handle);
}

if ($_POST) {
    if (isset($_POST['name']) && isset($_POST['mark']) && isset($_POST['comment'])) {
        $__name = str_replace('|', '', $_POST['name']);
        $__mark = str_replace('|', '', $_POST['mark']);
        $__comment = str_replace('|', '', $_POST['comment']);
        file_put_contents($filemane, $__name . '|' . $__mark . '|' . $__comment);
    }
}

$content = file_get_contents($filemane);
if (!is_null($content) && !empty($content)) {
    $fields = explode('|', $content);
    list($name, $mark, $comment) = $fields;
}


