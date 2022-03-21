<?php
class Person
{
  private $name;
  protected $age;

  function __construct($name)
  {
    $this->name = $name;
  }

  function sayHello()
  {
    echo $this->name . " hello";
  }

  function getName()
  {
    return $this->name;
  }
}

class Boy extends Person
{
  private $gender;

  // 오버로딩
  function __construct($name, $gender)
  {
    // 부모 객체 접근
    // :: 은 스태틱 접근
    parent::__construct($name);
    $this->gender = $gender;
  }

  function getGender()
  {
    return $this->gender;
  }

  // 오버라이딩
  function sayHello()
  {
    echo $this->gender . " hello";
  }
}

$person1 = new Boy("철수", "남자");
$person1->sayHello();
$gender = $person1->getGender();
echo $gender;

?>
