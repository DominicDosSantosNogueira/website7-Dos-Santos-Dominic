<?php
session_start();
session_unset();
session_destroy();
header("Location: Home.php"); // Replace index.php with the path to your home page
exit;
?>
