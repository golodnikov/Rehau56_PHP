<div class="footer container item">
    <!-- <a class="font-icon logo" href="/index.php"><span>ОкнаREHAU56</span></a> -->


    <?php
    $connection = require '/connect_base.php';

    $sql = "SELECT title, link FROM servislist";
    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<ol><a href='" . $row['link'] . "'><li class='item footer-item'>" . $row['title'] . "</li></a></ol>";
    }

    mysqli_close($connection);
    ?>
    <div class="social_footer">
        <div class="social"><a  target="_blank" aria-label="Chat on WhatsApp" href="https://wa.me/79510390222"><img alt="Chat on WhatsApp" src="/assets/iconmonstr-whatsapp-1.svg" /></a></div>
        <div class="social"><a  target="_blank" aria-label="Chat on WhatsApp" href="https://viber.click/79510390222"><img alt="Chat on WhatsApp" src="/assets/iconmonstr-viber-1.svg" /></a></div>
        <div class="social"><a  target="_blank" aria-label="Chat on WhatsApp" href="https://tlgg.ru/oknaRehau56"><img alt="Chat on WhatsApp" src="/assets/iconmonstr-telegram-1.svg" /></a></div>
    </div>
</div>