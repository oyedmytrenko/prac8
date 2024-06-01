<?php
session_start();
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <h1>Суперглобальні змінні PHP</h1>
    <table>
        <thead>
            <tr>
                <th>Позначення змінної</th>
                <th>Характеристика</th>
                <th>Отримане значення</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$GLOBALS</td>
                <td>Містить посилання на всі змінні, доступні у глобальній області видимості сценарію.</td>
                <td><pre><?php echo htmlspecialchars(print_r($GLOBALS, true)); ?></pre></td>
            </tr>
            <tr>
                <td>$_SERVER</td>
                <td>Містить інформацію, таку як заголовки, шляхи та розташування скрипта.</td>
                <td><pre><?php echo htmlspecialchars(print_r($_SERVER, true)); ?></pre></td>
            </tr>
            <tr>
                <td>$_GET</td>
                <td>Асоціативний масив змінних, переданих у скрипт через URL параметри.</td>
                <td><pre><?php echo htmlspecialchars(print_r($_GET, true)); ?></pre></td>
            </tr>
            <tr>
                <td>$_POST</td>
                <td>Асоціативний масив змінних, переданих у скрипт методом HTTP POST.</td>
                <td><pre><?php echo htmlspecialchars(print_r($_POST, true)); ?></pre></td>
            </tr>
            <tr>
                <td>$_FILES</td>
                <td>Асоціативний масив елементів, завантажених у скрипт через HTTP POST.</td>
                <td><pre><?php echo htmlspecialchars(print_r($_FILES, true)); ?></pre></td>
            </tr>
            <tr>
                <td>$_COOKIE</td>
                <td>Асоціативний масив змінних, переданих у скрипт через HTTP Cookies.</td>
                <td><pre><?php echo htmlspecialchars(print_r($_COOKIE, true)); ?></pre></td>
            </tr>
            <tr>
                <td>$_SESSION</td>
                <td>Асоціативний масив змінних, що зберігаються у сесії.</td>
                <td><pre><?php echo htmlspecialchars(print_r($_SESSION, true)); ?></pre></td>
            </tr>
            <tr>
                <td>$_REQUEST</td>
                <td>Асоціативний масив, що містить дані з $_GET, $_POST і $_COOKIE.</td>
                <td><pre><?php echo htmlspecialchars(print_r($_REQUEST, true)); ?></pre></td>
            </tr>
            <tr>
                <td>$_ENV</td>
                <td>Асоціативний масив змінних, отриманих з поточного середовища роботи.</td>
                <td><pre><?php echo htmlspecialchars(print_r($_ENV, true)); ?></pre></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
