<?php
require('Form.php');
require('Tools.php');


$days = (isset($_GET['days'])) ? $_GET['days'] : '';
$time = (isset($_GET['time'])) ? $_GET['time'] : '';
$cardio = (isset($_GET['cardio'])) ? $_GET['cardio'] : '';

$calorie = $time * $days + $cardio * 50;
$weight = $calorie / 10;

$form = new DWA\Form($_GET);
$errors = [];

$errors = $form->validate(
    [
        'days' => 'required|numeric|min:1|max:7',
        'time' => 'required',
        'cardio' => 'required',
    ]
);
