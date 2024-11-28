<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion02 - PHP: Datatyper, Arrayer och Kontrollstrukturer</title>
    <style>
        *{
            font-family: 'Verdana', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Lektion02 - PHP: Datatyper, Arrayer och Kontrollstrukturer</h1>
    <h2>Att skriva PHP</h2>
    <p>
    <?php
    echo 'Detta är en text från ett php-block';
    ?>
    <?= 'Detta är också en text från php'?> 
    </p>


    <h2>Datatyper och Variabler</h2>
    <ul>
        <?php
        $string = 'Detta är en string';
        $integer = 10;
        $float = 3.14;
        $boolean = true;

        echo '<li> Ett exempel på en string:' . $string . '</li>';
        echo '<li> Ett exempel på en integer:' . $integer . '</li>';
        echo '<li> Ett exempel på en flyttal:' . $float . '</li>';
        echo '<li> Ett exempel på en boolean:' . $boolean . '</li>';
        ?>
    </ul>
    <?php
    // skillnad på " eller ' ?
    echo "sträng som har en variabel i sig ($integer)<br>"

    $x = 5;
    echo "X ($x) är :" . gettype($x) . "<br>";
    ?>
</body>
</html>