<?php include 'includes/navigation.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web_Dev_Projet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
</head>
<body>
    <style>
        <?php 
            include '../public/css/course_detail.css';
            include '../public/css/navigation.css'
        ?> 
    </style>

    <header class="header">

        <button class="btn-mobile-nav">
            <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
            <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
        </button>
    </header>

    <main class="content_details">
        <div class="desc">

        </div>

        <div class="price_card">

        </div>

        <div class="content">

        </div>
    </main>

    <script type="text/javascript">
        <?php
            include "../public/js/script.js";
        ?>
    </script>
</body>
</html>