<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/main.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>base my</title>
</head>

<body>

    <?php
    require_once __DIR__ . '/../layout/header.php';
    ?>

    <!-- <div class="list container"> -->
        <?php

        // $connection = require '/connect_base.php';

        // $sql = "SELECT title FROM servislist";
        // $result = mysqli_query($connection, $sql);

        // while ($row = mysqli_fetch_assoc($result)) {
        //     foreach ($row as $key => $value) {
        //         echo "<button class='item'>$value</button>";
        //     }
        // }

        // mysqli_close($connection);
        ?>
        <?php
        // $connection = require '../connect_base.php';

        // $sql = "SELECT title, link FROM servislist";
        // $result = mysqli_query($connection, $sql);

        // while ($row = mysqli_fetch_assoc($result)) {
        //     echo "<a href='" . $row['link'] . "'><button class='item btn btn-warning'>" . $row['title'] . "</button></a>";
        // }

        // mysqli_close($connection);
        ?>
    <!-- </div> -->

    <div class="wrapper">
        <div class="slider single-item">
            <div><img src="/assets/photo_2023-07-18_22-25-30.jpg"></div>
            <div><img src="/assets/photo_2023-07-18_22-26-20.jpg"></div>
            <div><img src="/assets/photo_2023-07-18_22-26-25.jpg"></div>
            <div><img src="/assets/photo_2023-07-18_22-26-30.jpg"></div>
            <div><img src="/assets/photo_2023-07-18_22-25-56.jpg"></div>
        </div>
    </div>




    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="/slick/slick.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>