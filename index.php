<?php

function check_char($string)
{
  $first2 = substr($string, 0, 2);
  $last2 = substr($string, -2);

  if ($first2 == $last2) {
    echo "True the first 2 char and last 2 char in $string  are equals. <br>";
  } else {
    echo "False the first 2 char and last 2 char in $string are not equals. <br>";
  }
}


function check_GO($string)
{
  if (substr($string, 0, 2) === 'Go') {
    echo "True the $string Start with Go. <br>";
  } else {
    echo "False the $string does'nt start with Go. <br>";
  }
}


function check_number_multiple($number)
{
  if ($number > 0) {
    if ($number % 3 == 0 || $number % 7 == 0) {
      echo "$number is a multiple of 7 or multiple of 3. <br> ";
    } else {
      echo "$number is not a multiple of 7 or multiple of 3. <br> ";
    }
  }
}


function check_longest()
{
  $number = [50, 35, 21, 90];
  $longest = 0;
  foreach ($number as $num) {
    if ($num >= $longest) {
      $longest = $num;
    }
  }
  echo "The longest number is $longest <br>";
}


function check_nearest($num1, $num2)
{
  $num3 = $num1 - $num2;

  if ($num3 >= 1) {
    echo "$num1 is the nearest to 100. <br>";
  } elseif ($num3 <=  -1) {
    echo "$num2 is the nearest to 100. <br>";
  } else {
    echo '0 => Tow number are equal. <br>';
  }
}


function check_large_number($x, $y)
{
  if (($x && $y >= 20) && ($x && $y <= 30)) {
    if ($x > $y) {
      echo "$x bigger than $y <br>";
    } elseif ($y > $x) {
      echo "$y bigger than $x <br>";
    } else {
      echo "Two number are equals <br>";
    }
  } else {
    echo '0: The number not between 20 & 30 <br>';
  }
}


function number_digit($string)
{
  $counter = 0;
  for ($i = 0; $i < strlen($string); $i++) {
    if (ctype_digit($string[$i])) {
      $counter++;
    }
  }
  echo "The number of occurrences of any digit is $counter";
}


function digit_count($string)
{
  $count = 0;
  for ($x = 0; $x < strlen($string); $x++) {
    $count++;
  }
  echo "The number of digit in $string = $count";
}


function reverse($string)
{
  $reserve = '';
  for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reserve .= $string[$i];
  }
  echo $reserve;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/task.css" />
  <title>First Task</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700;900&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="card m-5 text-center">
    <h5 class="card-header">PHP Basics Task</h5>

    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q1: Write a PHP program to check whether the first two characters and last two characters of a give string are same.
        </h6>
        <p class="card-text">Answer: <?php check_char('Hello World'); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q2: Write a PHP program to check if a given string starts with 'Go' or not.</h6>
        <p class="card-text">Answer: <?php check_GO('Good Night'); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q3: Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.</h6>
        <p class="card-text">Answer: <?php check_number_multiple(9); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q4: Write a PHP program to check the largest number among three given numbers.</h6>
        <p class="card-text">Answer: <?php check_longest(); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q5: Write a PHP program to check which number nearest to the value 100 among two given integers.</h6>
        <p class="card-text">Answer: <?php check_nearest(90, 30); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q6: Write a PHP program to find the larger value from two positive integer values that is in the range 20-30 inclusive .</h6>
        <p class="card-text">Answer: <?php check_large_number(20, 25); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q7: Write a PHP program to count the number of occurrences of any digit in a string.</h6>
        <p class="card-text">Answer: <?php number_digit('we have numbers in this statement: 3 , 5 ,6 '); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q8: Write a PHP program to return the sum of digits of an integer number.</h6>
        <p class="card-text">Answer: <?php digit_count('Hello Gaza Sky Geeks '); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q9: Write a PHP program to reverse any string. </h6>
        <p class="card-text">Answer: <?php reverse('Hello Gaza Sky Geeks'); ?></p>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>