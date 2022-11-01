<?php
if(!isset($_session)){
    session_start();
}

session_destroy();
header("location: index.php");