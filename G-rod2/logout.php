<?php
include 'db.php';
session_start();
ob_start();
unset($_SESSION['userid']);
unset($_SESSION['username']);
session_destroy();		
echo '<script type="text/javascript">window.location = "index.php"; </script>';
?>