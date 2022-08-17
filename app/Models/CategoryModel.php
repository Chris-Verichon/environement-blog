<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class User extends CoreModel
{
  /**
   * Name of category
   *
   * @var string
   */
  private $name;

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }
}