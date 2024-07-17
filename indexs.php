<?php
session_start();
require_once('db_conn.php');
$conn = connection();


?>


<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
</head>
<body>

    <h1>Payment</h1>

    <form method="post" action="checkout.php">

        <p>Tuition Fee</p>

        <p><strong>₱16,000.00</strong></p>

        <button>Pay</button>

    </form>

</body>
</html>