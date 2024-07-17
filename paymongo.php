<?php

session_start();
require_once('db_conn.php');
$conn = connection();

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$secretKey = 'sk_test_j1Mobi6ePT1RNhYVumibURZP';  // Make sure this is your actual secret key
$amount = 100000;  // Set amount to 1000 pesos in centavos (PHP 1000.00 is 100000)
$description = 'Enrollment payment';

$client = new Client();

try {
    $response = $client->request('POST', 'https://api.paymongo.com/v1/links', [
        'headers' => [
            'Authorization' => 'Basic ' . base64_encode($secretKey . ':'),
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'data' => [
                'attributes' => [
                    'amount' => $amount,
                    'currency' => 'PHP',
                    'description' => $description
                ]
            ]
        ]
    ]);

    $body = $response->getBody();
    $paymentLinkData = json_decode($body, true);

    echo '<pre>';
  //  print_r($paymentLinkData);
    echo '</pre>';
} catch (\GuzzleHttp\Exception\ClientException $e) {
    // Handle exception or log it
    echo 'Request failed: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCash Payment</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .container{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        position: relative;
        top: 120px;
        border: 1px solid gray;
    }
</style>
<body>
    <div class="container">
        <h2 class="mt-4">GCash Payment Details</h2>

        <div class="mt-4">
            <?php
            // Check if payment link data is available
            if (isset($paymentLinkData['data'])) {
                $paymentLink = $paymentLinkData['data'];
                $paymentLinkAttributes = $paymentLink['attributes'];

                // Check if checkout URL is available
                if (isset($paymentLinkAttributes['checkout_url'])) {
                    $checkoutUrl = $paymentLinkAttributes['checkout_url'];
                    echo "<p>Payment Link: <a href='$checkoutUrl' target='_blank'>$checkoutUrl</a></p>";
                }

                // Display other details
                echo "<p>Amount: <strong>" . number_format($paymentLinkAttributes['amount'] / 100, 2) . " PHP</strong></p>";
                echo "<p>Description: <strong>" . $paymentLinkAttributes['description'] . "</strong></p>";
            } else {
                echo "<p>No payment link data available.</p>";
            }
            ?>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

