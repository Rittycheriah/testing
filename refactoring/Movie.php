<?php

class Movie
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $priceCode;

    /**
     * @param string $name
     * @param Category $category
     */
    public function __construct($name, Category $category)
    {
        $this->name = $name;
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function priceCode()
    {
        return $this->priceCode;
    }
    
    /**
     * @return Category
     */
    public function category()
    {
        return $this->category;
    }

}  

