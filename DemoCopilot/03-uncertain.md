```php
<?php
// check if the amount of $amount and $jsonPrice is having a difference not bigger than 0.1
// this is because of the rounding of the price
if (abs($amount - $jsonPrice) > 0.1) {
    $output ['error'] = "Wrong amout got: $amount, expected: $jsonPrice";
    return  $output;
}
```