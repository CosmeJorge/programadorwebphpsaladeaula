<?php
<<<<<<< Updated upstream
if(!isset($_session)){
=======
if(!isset($_SESSION)){
>>>>>>> Stashed changes
    session_start();
}

session_destroy();
<<<<<<< Updated upstream
header("location: index.php");
=======

header("Location: index.php");
>>>>>>> Stashed changes
