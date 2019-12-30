<?php
    $hashed_passcode = password_hash('abcdefgh', PASSWORD_DEFAULT);
    echo $hashed_passcode;
?>