<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Математичні обчислення</title>
</head>
<body>
    <h1>Результати математичних обчислень</h1>
    <?php
    if (isset($_GET['a']) && isset($_GET['b'])) {
        $a = (int)$_GET['a'];
        $b = (int)$_GET['b'];

        $sum = $a + $b;
        $product = $a * $b;
        $difference = $a - $b;
        $quotient = $b != 0 ? $a / $b : 'undefined';

        echo "<p>Значення змінних: a = $a, b = $b</p>";
        echo "<p>Сума: $a + $b = $sum</p>";
        echo "<p>Добуток: $a * $b = $product</p>";
        echo "<p>Різниця: $a - $b = $difference</p>";
        echo "<p>Частка: $a / $b = $quotient</p>";
    } else {
        echo "<p>Будь ласка, задайте значення змінних <code>a</code> і <code>b</code> в адресному рядку. (?a=10&b=5) </p>";
    }
    ?>
</body>
</html>
