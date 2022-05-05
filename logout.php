<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['role']);
unset($_SESSION['con']);
header("Location: /ChallengeG2-Challenge_G2/");
?>