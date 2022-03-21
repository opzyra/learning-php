<?php
abstract class ParentClass
{
  public function a()
  {
    echo "a";
  }
  abstract public function b();
}
class ChildClass extends ParentClass
{
  public function b()
  {
  }
}
?>
