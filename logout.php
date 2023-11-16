<?php 
include 'includes/database.php';
session_destroy();
header('Location:'.  $siteUrl );
?>