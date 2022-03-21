<?php
// like java package
require_once "02_named_ko.php";
require_once "02_named_en.php";

// \로 접근

ko\message();
en\message();

// alias 별칭 설정시
use ko as kr;
kr\message();

?>
