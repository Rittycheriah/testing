<?php
header('Content-Type: text/plain');

require_once('Movie.php');
require_once('Rental.php');
require_once('Customer.php');
require_once('Category.php');

$rental1 = new Rental(
    new Movie(
        'Back to the Future',
        new Category(
            'CHILDRENS',
            1.5,
            3
        )
    ), 4
);

$rental2 = new Rental(
    new Movie(
        'Office Space',
        new Category(
            'NEW RELEASE',
            3,
            1
        )
    ), 3
);

$rental3 = new Rental(
    new Movie(
        'The Big Lebowski',
        new Category(
            'CLASSIC',
            2,
            1
        )
    ), 5
);

$customer = new Customer('Joe Schmoe');

$customer->addRental($rental1);
$customer->addRental($rental2);
$customer->addRental($rental3);

echo $customer->htmlStatement();
echo $customer->statement();
