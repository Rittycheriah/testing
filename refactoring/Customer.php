<?php

class Customer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Rental[]
     */
    private $rentals;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->rentals = [];
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @param Rental $rental
     */
    public function addRental(Rental $rental)
    {
        $this->rentals[] = $rental; 
    }

    /**
     * @return string
     */
    public function statement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;

        $result = 'Rental Record for ' . $this->name() . PHP_EOL;

        // calling the customer rentals for this object
        foreach ($this->rentals as $rental) {
            // the var to add final amount owed
            $thisAmount = 0;

            $thisAmount += $rental->daysRented() * $rental->movie()->category()->categoryPricing();

            // feed this current amount back to to total amount
            $totalAmount += $thisAmount;

            // calculating frequentrenter Pts -- 
            // if price code is New Release & days rented is more than 1, increment
            // by one
            $frequentRenterPoints++;
            if ($rental->movie()->priceCode() === Movie::NEW_RELEASE && $rental->daysRented() > 1) {
                $frequentRenterPoints++;
            }

            $result .= "\t" . str_pad($rental->movie()->name(), 30, ' ', STR_PAD_RIGHT) . "\t" . $thisAmount . PHP_EOL;
        }

        $result .= 'Amount owed is ' . $totalAmount . PHP_EOL;
        $result .= 'You earned ' . $frequentRenterPoints . ' frequent renter points' . PHP_EOL;

        return $result;
    }


    public function htmlStatement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;

        $result1 = '<h1>Rental Record for' . '<em>' . $this->name() . '</em>' . '</h1>' . PHP_EOL;

        foreach ($this->rentals as $rental) {
            $thisAmount = 0;

            $thisAmount += $rental->daysRented() * $rental->movie()->category()->categoryPricing();

            $totalAmount += $thisAmount;

            $result1 .= "\t" . "<li>" . $rental->movie()->name() . " - ". $thisAmount . "</li>". PHP_EOL;
        }

        foreach($this->rentals as $rental){
            $total = 0;

            $total += $rental->daysRented() * $rental->movie()->category()->categoryPoints();

            $total += $frequentRenterPoints;
        }

        $result1 .= '<p>Amount owed is <em>' . $totalAmount . '</em></p>' . PHP_EOL;
        $result1 .= '<p>You earned <em>' . $frequentRenterPoints . '</em> frequent renter points' . '</p>' . PHP_EOL;

        return $result1;
    }


}
