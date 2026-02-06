<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion03 - Kontrollstrukturer, Funktioner , objekt och klass</title>
</head>
<body>
    <h1>Lektion03 - Kontrollstrukturer, Funktioner , objekt och klass</h1>
    <h3>If, else, if-else satser</h3>
    <h4>Exercise 03</h4>
    <?php
    // 01
    $tal1 = 2;
    $tal2 = 5;
    function sum($tal1, $tal2) {
        return $tal1 + $tal2;
    }
    echo $tal1 . " + " . $tal2 . " = " . sum($tal1, $tal2);
    echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";

    // 02
    function multi($tal1, $tal2, $tal3 = 1) {
        return $tal1 * $tal2 * $tal3;
    }
    echo $tal1 . " * " . $tal2 . " * " . 2 . " = " . multi($tal1, $tal2, 2);
    echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";

    // 03
    function toUppercase($text){
        return strtoupper($text);
    }
    echo toUppercase("Hello there");
    echo "<br>", "------------------------------------------------------------------------------------------" . "<br>";
    echo "<br>", "Del 2 ------------------------------------------------------------------------------------------" . "<br>";

    // 01
    class produkt{
        public $namn;
        public $pris;

        public function __construct($namn, $pris) {
        $this->namn = $namn;
        $this->pris = $pris;
    }
    }
    
    $produkt1 = new produkt("laptop", 200);

    echo $produkt1->namn . $produkt1->pris;


    ?>



</body>
</html>