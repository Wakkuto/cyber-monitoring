<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация / Опрос - Кибер-Мониторинг</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 50px; }
        .container { max-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); margin: auto; }
        h2 { text-align: center; color: #333; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; background: #28a745; color: white; padding: 10px; border: none; border-radius: 4px; margin-top: 15px; cursor: pointer; font-size: 16px; }
        button:hover { background: #218838; }
        .success { color: green; text-align: center; margin-top: 15px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Регистрация в системе</h2>
    <form method="POST" action="">
        <label for="fullname">ФИО сотрудника:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="department">Отдел / HUB:</label>
        <input type="text" id="department" name="department" required>

        <label for="status">Статус безопасности:</label>
        <select id="status" name="status">
            <option value="Пройдено">Пройдено</option>
            <option value="На проверке">На проверке</option>
        </select>

        <button type="submit" name="submit">Отправить</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Подключение к базе данных MySQL
        $servername = "localhost";
        $username = "root"; // замените на вашего пользователя бд при необходимости
        $password = "";     // ваш пароль от MySQL
        $dbname = "cyber_monitoring";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            echo "<p style='color:red;'>Ошибка подключения: " . $conn->connect_error . "</p>";
        } else {
            $fullname = $conn->real_escape_string($_POST['fullname']);
            $department = $conn->real_escape_string($_POST['department']);
            $status = $conn->real_escape_string($_POST['status']);

            // Сохранение данных в таблицу users (или другую таблицу вашей базы)
            $sql = "INSERT INTO users (username, email, role) VALUES ('$fullname', '$department', '$status')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>Регистрация успешно завершена!</p>";
            } else {
                echo "<p style='color:red;'>Ошибка: " . $conn->error . "</p>";
            }
            $conn->close();
        }
    }
    ?>
</div>

</body>
</html><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация / Опрос - Кибер-Мониторинг</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 50px; }
        .container { max-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); margin: auto; }
        h2 { text-align: center; color: #333; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; background: #28a745; color: white; padding: 10px; border: none; border-radius: 4px; margin-top: 15px; cursor: pointer; font-size: 16px; }
        button:hover { background: #218838; }
        .success { color: green; text-align: center; margin-top: 15px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Регистрация в системе</h2>
    <form method="POST" action="">
        <label for="fullname">ФИО сотрудника:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="department">Отдел / HUB:</label>
        <input type="text" id="department" name="department" required>

        <label for="status">Статус безопасности:</label>
        <select id="status" name="status">
            <option value="Пройдено">Пройдено</option>
            <option value="На проверке">На проверке</option>
        </select>

        <button type="submit" name="submit">Отправить</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Подключение к базе данных MySQL
        $servername = "localhost";
        $username = "root"; // замените на вашего пользователя бд при необходимости
        $password = "";     // ваш пароль от MySQL
        $dbname = "cyber_monitoring";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            echo "<p style='color:red;'>Ошибка подключения: " . $conn->connect_error . "</p>";
        } else {
            $fullname = $conn->real_escape_string($_POST['fullname']);
            $department = $conn->real_escape_string($_POST['department']);
            $status = $conn->real_escape_string($_POST['status']);

            // Сохранение данных в таблицу users (или другую таблицу вашей базы)
            $sql = "INSERT INTO users (username, email, role) VALUES ('$fullname', '$department', '$status')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>Регистрация успешно завершена!</p>";
            } else {
                echo "<p style='color:red;'>Ошибка: " . $conn->error . "</p>";
            }
            $conn->close();
        }
    }
    ?>
</div>

</body>
</html>
