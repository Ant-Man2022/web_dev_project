<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" type="text/css">
    <title>Choisir le type de payement</title>
</head>
<body>
    <style>
        <?php include '../public/css/login.css'; ?> 
    </style>
    <div class="login-container">
        <form onsubmit="getSelectedOption(event)">
            <p style='margin-bottom: 1rem; font-size: 1.8rem; font-weight: 700;' >Choisir un moyen de payement</p>
            <div class="account-type">
                <div class='radio-container'>
                    <input type="radio" id="radio1" class="radio-input pay_m" name="radio-group" value="http://localhost/web_dev_3/pages/credit_card.php">
                    <label for="radio1" class="radio-label">
                        <i class="fa-solid fa-credit-card" style='font-size: 4rem;'></i>
                        <p>Carte crédit</p>
                    </label>
                </div>

                <div class='radio-container'>
                    <input type="radio" id="radio2" class="radio-input pay_m" name="radio-group" value="http://localhost/web_dev_3/pages/paypal.php" >
                    <label for="radio2" class="radio-label">
                        <i class="fa-solid fa-money-bill-transfer" style='font-size: 4rem;'></i>
                        <p>Mobile Money</p>
                    </label>
                </div>
            </div>
            <button type="submit">Redirect</button>
        </form>
    </div>

    <script>
        function getSelectedOption(event) {
            event.preventDefault();
            let options = document.querySelectorAll('.pay_m');
        
            for (let i = 0; i < options.length; i++) {
                if (options[i].checked) {
                    window.location.href = options[i].value;
                    break;
                }
            }

        }
    </script>

    <script>
        <?php
            include "../public/js/script.js";
        ?>
    </script>
</body>
</html>