<?php
$lettre = $_GET['lettre'];
$str = ord($lettre)+1;
echo(chr($str));
?>