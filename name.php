<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Name</title>
</head>
<body>
  <?php 
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    /*
      $_GET or $_POST is one of a number of variables that PHP automatically creates when it receives a request from a browser. PHP creates $_GET as an array variable that contains any values passed in the URL query string. $_GET is an associative array, so the value of the name variable passed in the query string can be accessed as $_GET['name'].
    */
    echo 'Welcome to our website, ' . htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
  ?>
</body>
</html>