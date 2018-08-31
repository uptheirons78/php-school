<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lesson 2: Conditionals in PHP</title>
</head>
<body>
  <?php 
    //if statement example
    $roll = rand(1,6); //simulate a dice
    echo '<h1>You rolled a ' . $roll . '</h1>';

    if($roll > 4) {
      echo '<h1>YOU WIN !!!</h1>';
    } else {
      echo '<h1>You didn\'t win, better luck next time!</h1>'; // \ escape char in php
    }

    echo 'Thanks a lot for playing';
  ?>
</body>
</html>