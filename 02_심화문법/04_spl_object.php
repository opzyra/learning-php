<?php
$file = new SplFileObject("sample.txt");
var_dump($file->isFile());
var_dump($file->isDir());
?>
