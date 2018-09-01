<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lesson 4 - Arrays</title>
</head>
<body>
  <?php $firstArray = ['a', 1, 2, 'b']; ?>
  <?php $anotherArray = array('c', 3, 4, true, 'd'); ?>
  <?php 
    echo $firstArray[0]; //outputs first value, it is zero indexed
    echo ' and ';
    echo $anotherArray[2]; //outputs third value
  ?>

  <?php 
    //Associative Array example
    $birthdays = [
      'Kevin' => '1978-04-12',
      'Stephanie' => '1980-05-16',
      'David' => '1983-09-09'
    ];
  ?>
  <p><?php echo 'Kevin\'s birthday is: ' . $birthdays['Kevin']; ?></p>
  <hr>
  <h5>PUSH</h5>
  <?php
  //Arrays Methods:
  //PUSH 
  // 1. array_push()
  // 2. $array[] = $value_to_add;
    $stack = array("orange", "banana");
    print_r($stack);
    echo '<br>';
    array_push($stack, "apple", "raspberry");
    print_r($stack);
    echo '<br>';
    //you can also use
    $stack[] = 'blackberry';
    echo '</br>';
    print_r($stack);
  ?>
  <hr>
  <h5>POP</h5>
  <?php
  //POP : pops and returns the value of the last element of array, shortening the array by one element
    $stack = array("orange", "banana", "apple", "raspberry");
    print_r($stack);
    echo '</br>';
    $fruit = array_pop($stack);
    echo '</br>';
    print_r($stack);
    echo '</br>';
    print_r($fruit);
  ?>
  <hr>
  <h5>SHIFT</h5>
  <?php 
  //SHIFT take off the first element of an array;
    $myArr = [1,2,3,4];
    print_r($myArr);
    echo '</br>';
    $myArrShifted = array_shift($myArr);
    print_r($myArr);
    echo '</br>';
    print_r($myArrShifted);

  ?>
  <hr>
  <h5>UNSHIFT</h5>
  <?php 
  //UNSHIFT add one or more element in the beginning of an array;
    $myArr = ['A', 'B', 'C'];
    print_r($myArr);
    echo '</br>';
    $myArrUnShifted = array_unshift($myArr, 1);
    print_r($myArr);
    echo '</br>';
    print_r($myArrShifted);

  ?>


</body>
</html>