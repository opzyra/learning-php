<?php
// 사용법
class MyFileObject
{
  // 클래스 변수
  private $filename;

  // 생성자
  function __construct($fname)
  {
    $this->filename = $fname;
  }

  public function isFile()
  {
    return is_file($this->filename);
  }
}

$file = new MyFileObject("a.text");
// 클래스 변수 접근
$file->filename = "a.text";
var_dump($file->isFile());

?>
