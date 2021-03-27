<?php
session_start();
if (isset($_SESSION['user']['email'])) {
    session_destroy();
  header('location:signup.php');
} else {
    echo"logout not work";
}