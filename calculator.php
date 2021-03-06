<?php
require('Form.php');
require('tools.php');

$days = (isset($_GET['days'])) ? sanitize($_GET['days']) : '';
$time = (isset($_GET['time'])) ? $_GET['time'] : '';
$cardio = (isset($_GET['cardio'])) ? $_GET['cardio'] : '';

$calorie = $time * $days + $cardio * 50;
$weight = $calorie / 20;

$form = new DWA\Form($_GET);
$errors = [];

$errors = $form->validate(
    [
        'days' => 'required|numeric|min:0|max:8',
        'time' => 'required',
        'cardio' => 'required',
    ]
);
