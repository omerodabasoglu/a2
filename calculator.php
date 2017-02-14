<?php

require('tools.php');

$days = (isset($_GET['days'])) ? $_GET['days'] : '';
$time = (isset($_GET['time'])) ? $_GET['time'] : '';
$cardio = (isset($_GET['cardio'])) ? $_GET['cardio'] : '';

$calorie = $time * $days + $cardio * 50;
$weight = $calorie / 10;
