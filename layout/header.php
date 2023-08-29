<div class="list container">
    <a class="font-icon logo" href="/index.php"><span>ОкнаREHAU56</span></a>


    <?php
    $connection = require_once __DIR__ . '/../connect_base.php';

    $sql = "SELECT title, link FROM servislist";
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<a href='" . $row['link'] . "'><button class='item btn btn-warning'>" . $row['title'] . "</button></a>";
    }

    mysqli_close($connection);
    ?>
</div><br>