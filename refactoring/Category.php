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
     * @var Categories[]
     */
    private $categories;

    /**
     * @param string $catName
     * @param int $pricePerCat
     */
    public function __construct($category, $price)
    {
        $this->categoryName = $category;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function categoryPricing()
    {
        return $this->$price;
    }

    /**
     * @return string
     */
    public function categoryName()
    {
        return $this->$categoryName;
    }

    /**
     * @param Rental $rental
     */
    public function addCategory(Category $category)
    {
        return $this->categories[] = $categories; 
    }

}