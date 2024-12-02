<?php

$username = htmlspecialchars($_POST["username"], ENT_QUOTES);
$coices = htmlspecialchars($_POST["coices"], ENT_QUOTES);
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);

print "私の名前は、" . $username . "<br>";
print "ご希望の商品は、" . $coices . "<br>";
print "注文数は、" . $number;