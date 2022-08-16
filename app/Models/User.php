<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class User extends CoreModel
{
  /**
   * lastname of user table DB
   *
   * @var string
   */
  private $lastname;
  /**
   * firstname of user table db
   *
   * @var string
   */
  private $firstname;
  /**
   * email of user DB
   *
   * @var string
   */
  private $email;
  /**
   * password of user DB
   *
   * @var string
   */
  private $password;


  /**
   * Get lastname of user table DB
   *
   * @return  string
   */ 
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * Set lastname of user table DB
   *
   * @param  string  $lastname  lastname of user table DB
   *
   * @return  self
   */ 
  public function setLastname(string $lastname)
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
   * Get firstname of user table db
   *
   * @return  string
   */ 
  public function getFirstname()
  {
    return $this->firstname;
  }

  /**
   * Set firstname of user table db
   *
   * @param  string  $firstname  firstname of user table db
   *
   * @return  self
   */ 
  public function setFirstname(string $firstname)
  {
    $this->firstname = $firstname;

    return $this;
  }

  /**
   * Get email of user DB
   *
   * @return  string
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set email of user DB
   *
   * @param  string  $email  email of user DB
   *
   * @return  self
   */ 
  public function setEmail(string $email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get password of user DB
   *
   * @return  string
   */ 
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set password of user DB
   *
   * @param  string  $password  password of user DB
   *
   * @return  self
   */ 
  public function setPassword(string $password)
  {
    $this->password = $password;

    return $this;
  }
}