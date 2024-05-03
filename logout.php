<?php
include 'connect.php';

unset($_SESSION['currentUser']);
header("Location: homepage.php");