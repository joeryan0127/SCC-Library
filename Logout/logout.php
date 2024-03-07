<?php

session_start();

unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["user"]);
unset($_SESSION["pass"]);
unset($_SESSION["address"]);
unset($_SESSION["phone"]);



header("location:../login.php?error=logout");
exit;
?>