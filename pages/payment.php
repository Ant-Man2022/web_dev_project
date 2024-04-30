<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procéder au payement</title>
</head>
<body>
    <form action="credit_card.php" method='POST'>
        <p>Web dev bootcamp</p>
        <p><strong>US$20.00</strong></p>
        <button>payer par carte</button>
    </form>

    <form action="paypal.php" method="POST">
        <input type="submit" value="Pay with PayPal">
    </form>

   
</body>
</html>