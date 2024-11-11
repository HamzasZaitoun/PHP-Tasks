<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!----------- task 2.1 ----------->
     <?php
     $year=2002;
    echo $year%100==0?'it is a leap year':'its not a leap year';
     
     ?>
     <hr>
        <!----------- task 2.2 ----------->
        <?php
        $year=20;
        echo $year<21?'its winter Days! ':'its summertime!';

     ?>
     <hr>
        <!----------- task 2.3 ----------->

    <?php
        $first=2;
        $second=2;
        echo $first==$second?($first+$second)*3:'its a summertime';

     ?>
     <hr>
        <!----------- task 2.4 ----------->

    <?php
     $first=12;
     $second=13;
     echo ($first+$second)===30?$first+$second:'false'; 
     ?>
     <hr>
        <!----------- task 2.5 ----------->

    <?php
     $number=154563;
     echo $number%3===0?$number :'false';
     ?>
     <hr>
        <!----------- task 2.6 ----------->

    <?php
    $number=50;
    echo $number<51&&$number>19?'true':'false';
    ?>
     <hr>
        <!----------- task 2.7 ----------->

    <?php
        $number1=74;
        $number2=54;
        $number3=54;
        if($number1>$number2&&$number1>$number3)
        {
            echo $number1;
        }
        elseif($number2>$number1&&$number2>$number3)
        {
            echo $number2;
        }
        elseif($number3>$number1&&$number3>$number2)
        {
            echo $number3;
        }
        
    ?>
     <hr>
        <!----------- task 2.8 ----------->

    <?php
       $price=10;
       if($price<=50)
       {
         echo '2.5 JOD/Unit ';
       }
       elseif($price>50&&$price<=100)
       {
        echo '5.00 JOD/Unit';
       }
       elseif($price>100&&$price<=250)
       {
        echo '6.20 JOD/Unit';
       }
       else
       {
        echo '7.5 JOD/Unit';
       }

        
    ?>
     <hr>
        <!----------- task 2.9 ----------->

    <?php
       $number1=10;
       $number2=10;
       $operation='/';

       if($operation==='+')
       {
        echo $number1+$number2;
       }
       elseif($operation==='-')
       {
        echo $number1-$number2;
       }
       elseif($operation==='*')
       {
        echo $number1*$number2;
       }
       elseif($operation==='/')
       {
        echo $number1/$number2;
       }

        
    ?>
     <hr>
        <!----------- task 2.10 ----------->

    <?php
       $age=19;
       echo $age>=18?'eligible to vote!':'no eligible to vote!'

        
    ?>
     <hr>
        <!----------- task 2.11 ----------->

    <?php
       $number=-19;
       if($number>0)
       {
        echo 'positive number';
       }
       elseif($number<0)
       {
        echo 'negative number';
       }
       else
       {
        echo 'this is a zero ';
       }

        
    ?>
     <hr>
        <!----------- task 2.12 ----------->

    <?php
       $avgGrades=(60+86+95+63+55+74+79+62+50)/9;
       if($avgGrades<60)
       {
        echo 'F';
       }
       elseif($avgGrades>=60&&$avgGrades<70)
       {
        echo 'D';
       }
       elseif($avgGrades>=70&&$avgGrades<80)
       {
        echo 'C';
       }
       elseif($avgGrades>=80&&$avgGrades<90)
       {
        echo 'B';
       }
       elseif($avgGrades>=90&&$avgGrades<=100)
       {
        echo 'A';
       }

        
    ?>
     <hr>
</body>
</html>