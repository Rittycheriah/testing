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
     * @param int $daysRented
     * @param Category $category
     */
    public function __construct($name, $daysRented, Category $category)
    {
        $this->name = $name;
        $this->daysRented = $daysRented;
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
}   
