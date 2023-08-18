<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $food = 'banana';
    $location = "narayanganj, bangladesh";
    $age = 20;
    $name = 'naymur rahman ';
    echo 'Hello my name is ' . $name . 'and my age is ' . $age . '. ' . '<br>' . 'I live in ' . $location . '. My favorite fruit is ' . $food . '.';


    // numbers 
    $x = 10;
    $y = 20;
    echo '<br>' . 'The total of the numbers is ' . $x + $y;
    print '<br>' . 'The total of the numbers is ' . $x + $y;
    echo ('<br>' . 'The total of the numbers is ' . $x * $y . '<br>');


    print $food . '<br>';
    $foods = print('drinks');
    echo $foods . '<br>';

    $checkFloat = 30.52;
    $religionIslam = true;

    $friends = array('shafin', 'topu', 'jisan', 'nahin', 'sharmin', 'akibe', 'miraj');
    $checkNull = null;

    var_dump($name);
    var_dump($age);
    var_dump($checkFloat);
    var_dump($religionIslam);
    var_dump($friends);
    var_dump($checkNull);

    ?>


</body>

</html>