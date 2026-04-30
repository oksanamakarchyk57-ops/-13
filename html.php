<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
</head>
<body>

<h2>Форма реєстрації</h2>

<form method="post">
    <label>Логін:</label><br>
    <input type="text" name="login" required><br><br>

    <label>Пароль:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Підтвердження паролю:</label><br>
    <input type="password" name="confirm_password" required><br><br>

    <button type="submit">Зареєструватися</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Очищення логіну
    $login = filter_var($login, FILTER_SANITIZE_STRING);

    // Перевірка логіну (тільки букви і цифри)
    if (!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
        echo "<p style='color:red;'>Логін може містити тільки букви та цифри.</p>";
    }
    // Перевірка паролів
    elseif ($password !== $confirm_password) {
        echo "<p style='color:red;'>Паролі не співпадають.</p>";
    }
    // Додаткова перевірка (не порожні)
    elseif (!filter_var($password, FILTER_DEFAULT)) {
        echo "<p style='color:red;'>Некоректний пароль.</p>";
    }
    else {
        echo "<p style='color:green;'>Реєстрація успішна!</p>";
    }
}
?>

</body>
</html>