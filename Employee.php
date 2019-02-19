<?php
require_once 'Person.php';

class Employee extends Person
{
  public function working()
  {
    echo $this->name . ' is working...';
  }
}