<?php
// إذا تم إرسال النموذج
if (isset($_POST['farg'])) {
    // حفظ اللون في Cookie (صالحة لمدة 1 يوم)
    setcookie("favoritfarg", $_POST['farg'], time() + 86400);
    
    // لتحديث القيمة مباشرة بدون إعادة تحميل
    $_COOKIE['favoritfarg'] = $_POST['farg'];
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Favoritfärg</title>
</head>
<body>

<h2>Välj din favoritfärg</h2>

<form method="post">
    <select name="farg">
        <option value="Röd">Röd</option>
        <option value="Blå">Blå</option>
        <option value="Grön">Grön</option>
        <option value="Gul">Gul</option>
    </select>
    <br><br>
    <button type="submit">Spara</button>
</form>

<br>

<?php
// إذا كانت الـ Cookie موجودة
if (isset($_COOKIE['favoritfarg'])) {
    echo "Din favoritfärg är <strong>" . $_COOKIE['favoritfarg'] . "</strong>!";
}
?>

</body>
</html>
