<?php require 'calculator.php'; ?>

<!DOCTYPE html>
<html lang="en-us">
<head>

    <title>Weight Loss Calculator</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico/OO-57x57.png" />
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7CUbuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" />
    <link rel="stylesheet" href="css/calc4.css" />
</head>
<body>

    <header>WEIGHT LOSS CALCULATOR</header>


    <!--<?php if($days > 0 && $time && $cardio != ''): ?> -->

    <h2>CALORIES BURNED WEEKLY<br><span id="calorie"><?=$calorie?></span></h2>
    <h2>ESTIMATED MONTHLY WEIGHT LOSS<br><span id="weight"><?=$weight?> lbs</span></h2>

    <!--<?php endif; ?> -->


    <form method="get" action="index.php">
        <fieldset class="form-group">
            <legend>How many days do you workout weekly in average?</legend>
            <label class="control-label" for="days"></label><br>
            <input required class="form-control" type="number" min="1" max="7" name="days" id="days"><br>
        </fieldset>
        <fieldset class="radios">
            <legend>How much time do you workout daily in average?</legend>
            <label><input required type="radio" name="time" value="15">15 min.</label><br>
            <label><input required type="radio" name="time" value="30">30 min.</label><br>
            <label><input required type="radio" name="time" value="45">45 min.</label><br>
            <label><input required type="radio" name="time" value="60">60 min.</label><br>
        </fieldset>
        <fieldset>
            <legend>How many of the workout days do you do cardio?</legend>
                    <select required name="cardio" id="cardio">
                <option requried value="">select</option>
                <option requried value="0">0</option>
                <option requried value="1">1</option>
                <option requried value="2">2</option>
                <option requried value="3">3</option>
                <option requried value="4">4</option>
                <option requried value="5">5</option>
                <option requried value="6">6</option>
                <option requried value="7">7</option>
              </select>

        </fieldset>
        <div class="form-group">
            <input type='submit' class="btn btn-primary" id="submit">

            <h3 class="btn btn-default" id="reset"><a href='index.php'>Reset</a></h3>
        </div>
        <?php if(isset($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($errors as $error): ?>
                        <li><?=$error?></li>
                    <?php endforeach;?>
                </ul>
            </div>
        <?php endif; ?>

    </form>

</body>
</html>
