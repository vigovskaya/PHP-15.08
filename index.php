<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // 1 задача 

    $string = "42.8"; 
    
    $integer = (int)$string;
    
    echo "Число: $integer " . "Тип данных: "  . gettype($integer); 
    
    
    $float = (float)$string; 

    echo "<br>";

    echo "Число: $float " . "Тип данных: "  . gettype($float); 
    
    echo "<br>";

    echo "Сумма чисел:" . $sum = $integer + $float;

    echo "<br>";


    // 2 задача 

    $city = "London"; 

    $country = "UK";

    $population = 8900000;

    echo "$city is a city in $country with population of " . number_format($population) . " people.";


    // 3 задача 

    $radius = 7.5; 

    $c = 2 * 3.14159 * $radius; 

    $s = 3.14159 * pow($radius, 2); 

    echo "<br>";

    echo "Длина круга: " . round($c, 3) . "<br>" . "Площадь круга: " . round($s, 2);

    echo "<br>";

    // 4 задача 

    $weather = "rainy";

    switch($weather) {
         
        case ("sunny"): 

            echo "Не забудьте солнцезащитный крем!";
            break;
        
        case ("rainy"): 

            echo "Возьмите зонт!"; 
            break;

        case ("snowy"): 

            echo "Оденьтесь теплее!"; 
            break;

        default: 

            echo "Погода непредсказуема!";
    
    }
 
    echo "<br>"; 

    // 6 задача 

    $number = 24; 

    $remainder1 = $number % 3;  

    $remainder2 = $number % 4;

    if ($remainder1 == 0 && $remainder2 == 0) {
        
        echo "Число кратно 3 и 4";

    }

    else {
        echo "Число НЕ кратно 3 и 4" . "<br>" . "Остаток от деления на 3: $remainder1" . "Остаток от деления на 4: $remainder2";
    }
    ?>
</body>
</html>