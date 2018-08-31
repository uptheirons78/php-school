<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lesson 3 - Loops</title>
</head>
<body>
  <h3>FOR LOOP</h3>
  <?php 
    // for loop
    for ($n = 1; $n <= 10; $n++) {
      echo $n . ' ';
    }
    ?>
  <hr>
  <h3>WHILE LOOP</h3>
  <?php 
    // while loop
    $num = 1;

    while ($num <= 10) {
      echo $num . ' ';
      $num++;
    }

  ?>

  <h3>DICE GAME with WHILE LOOP</h3>
  <?php 
    $roll = 0;
    while ($roll != 6) {
      $roll = rand(1, 6);
      echo '<p>You rolled a ' . $roll . '</p>';
      
      if ($roll == 6) {
        echo '<p>You win!</p>';
      }
      else {
        echo '<p>Sorry, you didn\'t win, better luck 
        next time!</p>';
      }
    }
    ?>

  <h3>DICE GAME with DO WHILE LOOP</h3>
  <?php  
    do {
      $roll_A = rand(1, 6);
      echo '<p>You rolled a ' . $roll_A . '</p>';
  
      if ($roll_A == 6) {
          echo '<p>You win!</p>';
      }
      else {
          echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
      }
    }
    while ($roll_A != 6);
  ?>
</body>
</html>