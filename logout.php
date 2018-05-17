<?php
session_start();
if(session_destroy()) 
{
header("Location: home2.php"); 
}
?>