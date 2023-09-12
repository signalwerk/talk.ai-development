<?php
// $amount = 7004.99;
// $jsonPrice = 7005.01;

if ($amount === $jsonPrice) {
    $output ['error'] = "Wrong amout got: $amount, expected: $jsonPrice";
    return  $output;
}