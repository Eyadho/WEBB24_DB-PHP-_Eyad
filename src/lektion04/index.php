<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lektion03 - Kontrollstrukturer, Funktioner , objekt och klass</title>
</head>
<body>
    <h1>Lektion04 - </h1>
    
    <form method="GET">
        <input type="hidden" name="eyad" value= "huss">
        <button type="submit">Presssss!</button>
    </form>
    <?php
    echo $_GET ['eyad'];
    ?>

    <p>Du skickade namnet <? 
        echo isset($_GET['name']) ? $_GET['name'] : '';
    ?>.</p>

    <h2>GET</h2>

    <form method="GET" action="index.php">
        <label for="name">Namn</label>
        <input 
            type="text" 
            name="name" 
            id="name"
            value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>"
        >
        <input type="submit" value="Skicka">
    </form>

    <h2>POST</h2>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['fname']) && isset($_POST['lname'])) {
            $fname = htmlspecialchars($_POST['fname']);
            $lname = htmlspecialchars($_POST['lname']);
            echo "<p><strong>Hej, $fname $lname!</strong></p>";
            
        } 
    }
    ?>


    <form method="POST" action="index.php">
        <label for="name">fNamn</label>
        <input 
            type="text" 
            name="fname" 
            id="fname"
            value="<?php echo isset($_GET['fname']) ? $_GET['fname'] : ''; ?>"
        >
        <label for="lname">lNamn</label>
        <input 
            type="text" 
            name="lname" 
            id="lname"
            value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : ''; ?>"
        >
        <input type="submit" value="Skicka">
    </form>

 <b>Skicka data till mig själv</b>
    <form method="POST" action="index.php">
        
        <label for="name">Namn</label>
        <input type="text" name="name" id="name" value="<?= $_POST['name'] ?? '' ?>">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= $_POST['email'] ?? '' ?>">
        
        <input type="hidden" name="count" value="<?= $_POST['count'] ?? '1' ?>">

        <input type="submit" value="Skicka">

    </form>
    <?php echo $_POST["name"] ?>




</body>
</html>