<?php
interface ContractInterface
{
  public function promiseMethod(array $param): int; // 자료형.. like typescript
}
interface ContractInterface2
{
  public function promiseMethod2(array $param): int;
}

class ConcreateClass implements ContractInterface, ContractInterface2
{
  public function promiseMethod(array $param): int
  {
    return 1;
  }
  public function promiseMethod2(array $param): int
  {
    return 1;
  }
}
$obj = new ConcreateClass();
$rs = $obj->promiseMethod([1, 2]);
var_dump($rs);
