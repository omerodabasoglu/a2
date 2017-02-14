<?php require 'calculator.php'; ?>

<!DOCTYPE html>
<html lang="en-us">
<head>

    <title>Calorie Calculator</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico/OO-57x57.png" />
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7CUbuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" />
    <link rel="stylesheet" href="css/calc4.css" />
</head>
<body>

    <header>WEIGHT LOSS CALCULATOR</header>

    <?php if ($days > 0): ?>

    <h2>CALORIES BURNED WEEKLY<br><span id="calorie"><?=$calorie?></span></h2>
    <h2>ESTIMATED MONTHLY WEIGHT LOSS<br><span id="weight"><?=$weight?> lbs</span></h2>

    <?php endif; ?>

    <form method="get" action="index.php">
        <fieldset class="form-group">
            <legend>How many days do you workout weekly in average?</legend>
            <label class="control-label" for="days"></label><br>
            <input class="form-control" type="text" name="days" id="days"><br>
        </fieldset>
        <fieldset class="radios">
            <legend>How much time do you workout daily in average?</legend>
            <label><input type="radio" name="time" value="15">15 min.</label><br>
            <label><input type="radio" name="time" value="30">30 min.</label><br>
            <label><input type="radio" name="time" value="45">45 min.</label><br>
            <label><input type="radio" name="time" value="60">60 min.</label><br>
        </fieldset>
        <fieldset>
            <legend>How many of the workout days do you do cardio?</legend>
                    <select name="cardio" id="cardio">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>

        </fieldset>
        <div class="form-group">
            <input type='submit' class="btn btn-primary" id="submit">

            <h3 class="btn btn-default" id="reset"><a href='index.php'>Reset</a></h3>
        </div>

    </form>

</body>
</html>
