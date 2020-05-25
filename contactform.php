 <?php

// if (isset($_POST['sumbit'])){
//     $mailFrom = $_POST['email'];
//     $temat = $_POST['temat'];
//     $wiadomosc = $_POST['wiadomosc'];
//     $mailTo = "jarek@jaro.com.pl";
//     $headers = "From: Strona internetowa";
//     $txt = " Otrzymałeś mail od".$mailFrom."\n\n".$wiadomosc;

//     mail($mailTo,$temat,$txt,$headers);
//     header("Location: index.html?mailsend");
// }

require_once "Mail.php";

$from = $_POST['email'];
$to = '<mfilon13@gmail.com>';
$subject = $_POST['temat'];
$body = " Otrzymałeś mail od".$mailFrom."\n\n".$wiadomosc;

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'mfilon13@gmail.com',
        'password' => 'Babunia-123'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}

?> 



