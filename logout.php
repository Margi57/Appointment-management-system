<?php
session_start();
session_unset();
session_destroy();
header("locaaation:index.php");
exit;
?>