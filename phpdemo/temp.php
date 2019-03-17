<?php 
session_start();
echo 'You scored ' . $_SESSION['stuAns'] . ' out of ' . $_SESSION['count'] . "<br>";
?>