<?php
require_once 'Person.php';

class Teacher 
{
  public function teaching()
  {
    echo $this->name . ' is teaching...';
  }
}