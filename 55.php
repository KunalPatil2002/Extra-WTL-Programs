<?php 
session_start(); 
$_SESSION["user"] = "Alice"; 
echo "Session started for " . $_SESSION["user"]; 
?> 