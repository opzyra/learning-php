<?php
$odata = new ArrayObject(["a", "b", "c"]);
$odata->append("d");
foreach ($odata as $item) {
  echo $item . "<br>";
}
var_dump($odata->count());
?>
