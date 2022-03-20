<?php
$members = ["egoing", "k8805", "sorialgi"];
$li = ["a", "b", "c", "d", "e"];

// length는 count 함수로 대채
for ($i = 0; $i < count($members); $i++) {
  echo ucfirst($members[$i]) . "<br />";
}
// 추가
array_push($members, "devhyun");

// 마지막요소 제거
array_pop($li);

// 병함
array_merge($members, ["park", "kang"]);

// 앞에 추가
array_unshift($li, "z");
var_dump($li);

// 앞에 제거
array_shift($li);
var_dump($li);

// 자르고 추가
// array, index, 자를 갯수, 추가할값
array_splice($li, 2, 0, "B");
var_dump($li);
?>
