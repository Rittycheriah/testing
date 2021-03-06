<?php

class Category {
	  /**
    * @var string categoryName
    */
    private $categoryName;

    /**
    * @var int price
    */
    private $price;

    /**
    * @var int points
    */
    private $points;

    /**
     * @var Categories[]
     */
    private $categories;

    /**
     * @param string $category
     * @param int $price
     * @param int $pts
     */
    public function __construct($category, $price, $pts)
    {
        // categoryName
        $this->categoryName = $category;
        
        // price as defined by category per day
        $this->price = $price;

        // total # of points per day
        $this->points = $pts;
    }

    /**
     * @return int
     */
    public function categoryPoints()
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function categoryPricing()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function categoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param Rental $rental
     */
    public function addCategory(Category $category)
    {
        return $this->categories[] = $categories; 
    }

}