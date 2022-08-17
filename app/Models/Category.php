<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

class Category extends CoreModel
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

  /**
     * Method find all Category
     *
     * @return Category[]
     */
    public static function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `category`";
        
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $results;
    }
}