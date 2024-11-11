<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>

<body>
    <?php
    echo strtoupper("hello world ");
    echo "<br>";
    echo strtolower(" HELLO WORLD");
    echo "<br>";
    echo ucfirst("hello world");
    echo "<br>";
    echo lcfirst("HELLO WORLD");
    echo "<hr>"
    ?>
    <?php 
    $times="085119";
    $timeFormate=chunk_split($times,2,":");
    $timeFormate=rtrim($timeFormate,":");
    echo  $timeFormate;
    ?>
    <hr>
    <?php
    $text="Im a full stack developer at Orange coding academy";
    echo $text;
    echo '<br>'
    ?>
    <?php
    echo '<br>';
    $sentence = "I am a full stack developer at orange coding academy";
    $orange = "Orange";
    if (str_contains($sentence, 'orange')) {
        echo 'found';
    } else {
        echo 'not found';
    }
    ?>
    <hr>
    <br>
    <?php 
    $URL ='www.orange.com/index.com';
    echo basename($URL);


    ?>
    <hr>
    <!----------- task 1.6 ----------->
    <?php
    $str1 = 'info@orange.com';
    echo substr($str1, -3);

    ?>
    <hr>
   <!----------- task 1.7 ----------->
   <?php
   function random_password($char)
   {
       $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
       return substr(str_shuffle($data), 0, $char);
    }
    echo random_password((7));
   ?>
   <hr>
     <!----------- task 1.8 ----------->
    <?php
    $str2 = 'That new trainee is so genius.';
    echo str_replace('That', 'Our', $str2);
    ?>
    <hr>
    <!----------- task 1.9 ----------->
    <?php

    $str1 = 'dragonball';
    $str2 = 'dragonboll';


    $dif = strspn($str1 ^  $str2 , "\0");

    echo ("First difference between two strings at position " .$dif ." : ". $str1[$dif]. " vs " . $str2[$dif] );
     ?>
    <!----------- task 1.10 ----------->
    <hr>
    <br>
    <?php
    $string = "Twinkle, twinkle, little star.";
    $array = explode(" ", $string);
    var_dump($array);
    
    ?>
    <hr>
    <br>
    <!----------- task 1.12 ----------->
    <?php
     $text='a';
     echo 'the next character after(a) is:'.++$text;
    ?>
    <hr>
    <?php
    $string='the  brown fox';
    $insertedString='quick';
    echo substr_replace($string,$insertedString,4,0);
    echo '<hr>';
    echo strtok($string," ");
    ?>
    <hr>
    <!----------- task 2.13 ----------->
    <?php
    $numbers='0000657634';
    echo ltrim($numbers,'0')
    ?>
    <hr>
     <!----------- task 1.14 ----------->

     <?php
     $sentence =  'The quick brown fox jumps over the lazy dog';
     
     echo str_replace('fox', '', $sentence);
     ?>

<hr>
    <!----------- task 1.15 ----------->
    
    <?php
     $sentence = 'The quick brown fox jumps over the lazy dog---';
     
     echo rtrim($sentence, '-' );
     ?>

<hr>
    <!----------- task 1.16 ----------->
    
    <?php
     $special_numbers = '\"\1+2/3*2:2-3/4*3';
     
     echo str_replace(str_split('\/*+-:"'), " ", $special_numbers);
     ?>

<hr>
    <!----------- task 1.17 ----------->
    
    <?php
$selStr = "The quick brown fox jumps over the lazy dog";
echo "<br>";
echo implode(" ", array_slice(explode(" ", $selStr), 0, 5));
?>

     
     <hr>
    <!----------- task 1.18 ----------->
    <?php
      $numbers = '2,543.12';

      echo str_replace(",", "", $numbers  );
    ?>

    <hr>
    <!----------- task 1.19 ----------->
    <?php
      foreach (range('a', 'z') as $alphabet) {
        echo $alphabet." ";
      }
    ?>
</body>

</html>