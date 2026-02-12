<?php
session_start();

$correct_username = "admin";
$correct_password = "1234";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['username'] = $username;
    } else {
        $error = "Fel användarnamn eller lösenord!";
    }
}

// log out
if (isset($_POST['logout'])) {
    session_unset();     // clear session
    session_destroy();   // destroy session
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Session Login</title>
</head>
<body>

<?php if (isset($_SESSION['username'])): ?>

    <h2>Hej <?php echo $_SESSION['username']; ?>!</h2>

    <form method="post">
        <button type="submit" name="logout">Logga ut</button>
    </form>

<?php else: ?>

    <h2>Logga in</h2>

    <form method="post">
        <label>Användarnamn:</label><br>
        <input type="text" name="username"><br><br>

        <label>Lösenord:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit" name="login">Logga in</button>
    </form>

    <?php
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

<?php endif; ?>

</body>
</html>
