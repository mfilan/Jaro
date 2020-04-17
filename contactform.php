<?php
if (isset($_POST['sumbit'])){
    $mailFrom = $_POST['email'];
    $temat = $_POST['temat'];
    $wiadomosc = $_POST['wiadomosc'];
    $mailTo = "mfilon13@gmail.com";
    $headers = "From: Strona internetowa";
    $txt = " Otrzymałeś mail od".$mailFrom."\n\n".$wiadomosc;

    mail($mailTo,$temat,$txt,$headers);
    header("Location: index.html?mailsend");
}
?>