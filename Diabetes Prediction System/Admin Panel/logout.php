<?php
session_start();
?>
<?php
session_unset(); 
session_destroy();
header("location:http://localhost/FYP/adminpanel/login.html");
?>