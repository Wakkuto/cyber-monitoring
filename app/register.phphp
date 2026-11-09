<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Электронная регистрация | HUB</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0f172a;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: #ffffff;
            width: 100%;
            max-width: 550px;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            box-sizing: border-box;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h2 {
            margin: 10px 0 5px 0;
            color: #0f172a;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .header p {
            color: #059669;
            font-weight: 600;
            font-size: 14px;
            margin: 0;
        }
        .badge {
            display: inline-block;
            background: #f1f5f9;
            color: #475569;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin-top: 10px;
            border: 1px solid #cbd5e1;
        }
        .alert {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #166534;
            padding: 15px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #334155;
            font-size: 14px;
        }
        label span {
            color: #e11d48;
        }
        input, select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input:focus, select:focus {
            border-color: #0d9488;
            box-shadow: 0 0 0 3px rgba(13, 148, 136, 0.15);
        }
        .row {
            display: flex;
            gap: 15px;
        }
        .row .form-group {
            flex: 1;
        }
        .quick-select {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }
        .tag {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            color: #334155;
            cursor: pointer;
            transition: background 0.2s;
        }
        .tag:hover {
            background: #e2e8f0;
        }
        button[type="submit"] {
            width: 100%;
            background: #059669;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }
        button[type="submit"]:hover {
            background: #047857;
        }
        .success-card {
            background: #f8fafc;
            border: 2px solid #059669;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
        }
        .success-card h3 {
            color: #065f46;
            margin-top: 0;
        }
        .portal-btn {
            display: inline-block;
            background: #0284c7;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
        }
        .portal-btn:hover {
            background: #0369a1;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Кибер-Мониторинг</h2>
        <p>ЭЛЕКТРОННЫЙ РЕЕСТР ПРЕПОДАВАТЕЛЕЙ И СОТРУДНИКОВ</p>
        <div class="badge">HUB</div>
    </div>

    <?php
    $is_submitted = false;
    if (isset($_POST['submit'])) {
        $servername = "localhost";
        $username = "root"; 
        $password = ""; // Укажите ваш пароль от MySQL, если он требуется
        $dbname = "cyber_monitoring";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if (!$conn->connect_error) {
            $fullname = $conn->real_escape_string($_POST['fullname']);
            $department = $conn->real_escape_string($_POST['department']);
            $role = $conn->real_escape_string($_POST['role']);

            $sql = "INSERT INTO users (username, email, role) VALUES ('$fullname', '$department', '$role')";
            if ($conn->query($sql) === TRUE) {
                $is_submitted = true;
            }
            $conn->close();
        }
    }

    if ($is_submitted):
    ?>
        <div class="success-card">
            <h3>✓ Регистрация успешно завершена!</h3>
            <p>Данные сотрудника <b><?php echo htmlspecialchars($_POST['fullname']); ?></b> занесены в защищенный реестр системы кибермониторинга.</p>
            <p style="font-size: 13px; color: #64748b;">Уровень доступа: <b><?php echo htmlspecialchars($_POST['role']); ?></b> (<?php echo htmlspecialchars($_POST['department']); ?>)</p>
            
            <a href="https://cyber-help.kg" target="_blank" class="portal-btn">Перейти к материалам портала УВД →</a>
        </div>
    <?php else: ?>
        <div class="alert">
            ℹ️ Официальная веб-система. Регистрация занимает 1 минуту и работает в один клик.
        </div>

        <form method="POST" action="">
            <div class="form-group">
                <label for="fullname">ФИО сотрудника / участника <span>*</span></label>
                <input type="text" id="fullname" name="fullname" value="Есеналиева Сабрина Артуровна" required>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="department">Отдел / HUB <span>*</span></label>
                    <input type="text" id="department" name="department" value="HUB" required>
                </div>
                <div class="form-group">
                    <label for="role">Должность / Статус</label>
                    <input type="text" id="role" name="role" value="Преподаватель" id="roleInput">
                </div>
            </div>

            <div class="form-group" style="margin-top: -10px; margin-bottom: 25px;">
                <label style="font-size: 12px; color: #64748b; margin-bottom: 5px;">Быстрый выбор должности:</label>
                <div class="quick-select">
                    <span class="tag" onclick="setRole('Преподаватель')">Преподаватель</span>
                    <span class="tag" onclick="setRole('Ст. преподаватель')">Ст. преподаватель</span>
                    <span class="tag" onclick="setRole('Доцент')">Доцент</span>
                    <span class="tag" onclick="setRole('Зав. кафедрой')">Зав. кафедрой</span>
                    <span class="tag" onclick="setRole('Сотрудник')">Сотрудник</span>
                </div>
            </div>

            <button type="submit" name="submit">ЗАРЕГИСТРИРОВАТЬСЯ В 1 КЛИК →</button>
        </form>
    <?php endif; ?>
</div>

<script>
    function setRole(roleText) {
        document.getElementById('roleInput').value = roleText;
    }
</script>

</body>
</html>
