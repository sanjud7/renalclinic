<?php

session_start();

if(isset($_POST["logoutbtn"])){
    
session_destroy();
header("location:index.html");
}

?>