<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css" />
    <title>ОкнаREHAU56</title>
</head>

<body>

    <?php
    require_once __DIR__ . '/layout/header.php';
    ?>

    <div class="container ">
        <div class="img-info">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Provident dolorum sit dolor ratione consequuntur.<br> Dicta asperiores soluta, optio, unde eius doloremque,<br> et provident dignissimos architecto totam consequatur<br> cum quo aperiam.</div>
        <img class="img-info-logo" src="/assets/photo_logo.jpg" alt="...">
    </div>

    <br>

    <div class="container ">
        <i class="icon-phone-sign icon-3x font-icon "> <span class="font-info"> +7 951 039 02 22 </span></i>
        <i class="icon-chevron-sign-right icon-3x font-icon"> <span class="font-info">15 лет на рынке </span></i>
        <i class="icon-thumbs-up-alt icon-3x font-icon"> <span class="font-info">гарантия качества</span></i>
    </div><br>



    <div class="wrapper">
        <h2 class="slider-work">Наши работы</h2>
        <div class="slider single-item">
            <?php

            $connection = require '/connect_base.php';

            $sql = "SELECT img FROM work_img_item";
            $result = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    echo "<img class='item' src='$value'>";
                }
            }

            mysqli_close($connection);
            ?>
        </div>
    </div>

    <?php
    require '/layout/footer.php';
    ?>


    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="/slick/slick.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>