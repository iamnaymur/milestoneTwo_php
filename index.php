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
    // echo "Hello my name is  $name" . 'and my age is ' . $age . '. ' . '<br>' . 'I live in ' . $location . '. My favorite fruit is ' . $food . '.';
    

    //! numbers 
    $x = 10;
    $y = 20;
    // echo '<br>' . 'The total of the numbers is ' . $x + $y;
    // print '<br>' . 'The total of the numbers is ' . $x + $y;
    // echo ('<br>' . 'The total of the numbers is ' . $x * $y . '<br>');
    

    // print $food . '<br>';
    // $foods = print('drinks');
    // echo $foods . '<br>';
    
    $checkFloat = 30.52;
    $religionIslam = true;

    //! array below
    $friends = array('shafin', 'topu', 'jisan', 'nahin', 'sharmin', 'akibe', 'miraj');
    $checkNull = null;

    // var_dump($name);
    // var_dump($age);
    // var_dump($checkFloat);
    // var_dump($religionIslam);
    // var_dump($friends);
    // var_dump($checkNull);
    

    //! php OBJECT
    // have to use the word "class" for declaring object in php.
    

    class Phone
    {
        public $model;
        function phoneModel($number)
        {
            global $model;
            $model = $number;
            // echo "This is $model " . "<br>";
        }
    }

    $apple = new Phone;
    $apple->phoneModel('Iphone 13');
    $samsung = new Phone;
    $samsung->phoneModel('s21 ultra');


    //! php string
    
    // echo strlen("my name is naymur") . '<br>';
    // echo str_word_count('my name is naymur') . '<br>';
    // echo strrev('my name is naymur');
    
    $test = strpos('I love to travel and explore cities', 'cities');
    // var_dump($test);
    
    // echo str_replace('cities', 'cultures', 'i love to travel and explore cities');
    
    // class Car
    // {
    //     public $make;
    //     public $model;
    
    //     public function startEngine()
    //     {
    //         echo "Engine started!";
    //     }
    // }
    
    // $myCar = new Car();
    // $myCar->make = "Toyota";
    // $myCar->model = "Camry";
    
    // $startEngine = fn() => "Engine started!";
    
    // echo $startEngine();
    

    //! math and numbers on php
    $x = 5;
    $y = 10;

    // echo (pi()) . "<br>";
    // echo (max(23, 345, 42, 213, 345, 123, 543, 34, 21)) . "<br>";
    // echo (min(23, 345, 42, 1213, 345, 123, 543, 34, 21)) . "<br>";
    // echo (abs((-100))) . "<br>";
    // echo (sqrt(64)) . "<br>";
    // echo (round(pi())) . "<br>";
    // echo (rand(10, 100)) . "<br>";
    
    //* The both z output will be the same, one with using regular variable and the other one with using define() for a constant value. Works same like the let and const that we worked with in the javascript.
    
    $z = 17;
    // echo $z;
    define('z', 19);
    // define('z', 17);
    // echo (z);
    

    // array with constant values
    define('cars', [
        'mercedes',
        'bmw',
        'toyota',
        'tesla',
        'rolls royce',
    ]);

    // var_dump(cars);
    // echo (strlen(cars[0]));
    // echo (cars[0])
    
    //! operators and assignment operators
    $a = 2;
    $b = 3;


    $c = $a + $b;
    //Now value of a is 5 below here. See this carefully.
    $a += $b; //$a = $a + $b;
    
    $a -= $b;
    // echo $a;
    
    // ! comparison operators.
    $x = 50;
    $y = '50';

    // var_dump($x === $y);
    // var_dump($x !== $y);
    // var_dump($x != $y); //var_dump($x<>$y); works the same .
    

    // ! if- else (same as like javascript)
    
    $date = date('H');
    if (22 < 20) {
        echo ('good morning');

    } elseif (22 < 19) {
        echo ('bad morning');
    } else {
        // echo ('have a nice day');
    }
    ;

    // ! loops
    
    $t = 0;

    //~ while loop
    while ($t <= 5) {
        // echo "the numbers is : $t <br>";
        $t++;
    }

    //~ do while loop
    do {
        // echo "The number is : $t <br>";
        $t++;
    } while ($t <= 5);

    // ~for loop
    // The for loop is used when you know in advance how many times the script should run.
    
    for ($u = 0; $u <= 5; $u += 2) {
        // echo "The number is : $u <br>";
    }


    // ~ for each
    define('places', [
        'sunamganj',
        'saintmartin',
        'sajek',
        'bandarban',
        'khagrachori',
    ]);

    foreach (places as $values) {
        if ($values === 'sajek') {
            continue;
        }
        // echo "$values <br>";
    
    }
    ;
    foreach (places as $values) {
        if ($values === 'sajek') {
            break;
        }
        // echo "$values <br>";
    
    }
    ;

    // ~ functions in php
    // same as like javascript
    
    function test_name()
    {
        // echo 'This is function';
    }
    ;
    test_name();

    // with numbers
    function add($a, $b)
    {
        $sum = $a + $b;
        return $sum;
    }

    $result = add(5, 3);
    // echo $result;
    
    // with default value
    function greetPerson($name = "mehoman vai")
    {
        echo "Hello, $name! <br>";
    }

    greetPerson();
    greetPerson("Naymur");


    // date and time in php
    echo "Today is " . date("y/m/d") . "<br>";

    ?>


</body>

</html>