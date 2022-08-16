<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

/**
 * Post model is the entity of database
 */
class Post extends CoreModel
{
    /**
     * @var string
     */
    private $title;
    /**
     * content of post
     *
     * @var string
     */
    private $content;
    /**
     * category of post
     *
     * @var string
     */
    private $category;

    /**
     * Get the value of title
     *
     * @return  string
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param  string  $title
     *
     * @return  self
     */ 
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get content of post
     *
     * @return  string
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content of post
     *
     * @param  string  $content  content of post
     *
     * @return  self
     */ 
    public function setContent(string $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get category of post
     *
     * @return  string
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set category of post
     *
     * @param  string  $category  category of post
     *
     * @return  self
     */ 
    public function setCategory(string $category)
    {
        $this->category = $category;

        return $this;
    }
}