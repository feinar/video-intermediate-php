<?php
//PHP 5.5

$pass = "secretpassword";
$hashed = password_hash($pass, PASSWORD_DEFAULT);
echo $hashed;
//$2y$10$7x6uFp1gkWJSzMr3JqEQ5eN2RYffTQW/OB1KxPlkB7WX1WkMSg2ai