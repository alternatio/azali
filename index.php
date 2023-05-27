<?php
session_start();
$_SESSION['errorTextLogin'] = null;
$_SESSION['errorText'] = null;


include_once './components/global/head.php';

include_once './components/global/header.php';
include_once './components/home/intro.php';
include_once './components/home/welcome.php';
include_once './components/home/danceNumber.php';
include_once './components/home/nationalDances.php';
include_once './components/home/nationalRituals.php';
include_once './components/home/group.php';
include_once './components/home/map.php';
include_once './components/home/additionalServices.php';
include_once './components/home/cooperation.php';
include_once './components/global/footer.php';

include_once './components/global/bottom.php';
