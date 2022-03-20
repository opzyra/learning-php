<?php
/*
  Map, Object와 같은 형태
*/
// $grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
$grades = [];
$grades["egoing"] = 10;
$grades["k8805"] = 6;
$grades["sorialgi"] = 80;
var_dump($grades);

// for in문은 없고 foreach
// 배열변수 as key 변수 => 값변수
foreach ($grades as $key => $value) {
  echo "key: {$key} value: {$value}<br/>";
}

// 탬플릿 리터럴 {변수}
// 탬플릿 리터럴에서 식 가능한가? => 불가능 변수만 넣기 가능하네..
$a = 1;
$b = "<h1>이건과연?</h1>";
echo "result1: {$a}";
echo "result2: {$b}";
?>
