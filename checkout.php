<?php
session_start();
require_once('db_conn.php');
$conn = connection();

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51P7vcqHIxCbXINZQ0M76I0yU5b5p6JTbhui3sUlt76WLk6ovLS91fwaLb5MSfTENNbRo57dYEbuwwnHrMhFQNtK700JP628esE";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/success.php",
    "cancel_url" => "http://localhost/indexs.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "php", // Changed from "usd" to "php"
                 "unit_amount" => 1600000, // Assuming the amount in PHP
                "product_data" => [
                    "name" => "Pay Tuition"
                ]
            ]
        ],
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);