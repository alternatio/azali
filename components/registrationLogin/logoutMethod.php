<?php
session_start();

$_SESSION['userEmail'] = null;
header('Location: ' . $_SERVER['HTTP_REFERER']);