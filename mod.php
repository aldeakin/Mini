<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>

</head>

<body>

  <h1>PHP Modulus example</h1>

  <?php
    $number = range(5,1000,5);
    print_r ($number);

    $number = 21;

    $multiple = 5;

    $mod = $number % 5;

    $seven = $number % 7;

    if($mod == 0){

      echo $number . "<div> is a multiple of </div>" . $multiple;

    }

    else if($seven == 0){

      echo "<div></div>" . $multiple;

    }

    else{
        echo "";
    }
    

  ?>

</body>

</html>