<?php
$existing_hash = '$2y$10$7x6uFp1gkWJSzMr3JqEQ5eN2RYffTQW/OB1KxPlkB7WX1WkMSg2ai';
$pass = "secretpassword";

if(password_verify($pass, $existing_hash)) {
    echo "All good";
} else {
    echo "Go away";
}

/*
 For PHP < 5.5
 https://github.com/ircmaxell/password_compat
 */