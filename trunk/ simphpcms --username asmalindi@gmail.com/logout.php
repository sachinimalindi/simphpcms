<?php
session_start();

session_destroy();

echo "You have been logout .<br/> <a href='index.php'>click here<a/> to return home page .";
?>