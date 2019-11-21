<?php
session_start();

unset  $_SESSION[$user]['cntCos'];

header("Location:../index.php?Logout=succes");



?>