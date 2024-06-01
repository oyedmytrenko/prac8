<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результати математичних обчислень</title>
</head>
<body>
    <h1>Результати математичних обчислень</h1>
    <?php
    if (isset($_POST['c']) && isset($_POST['d'])) {
        $c = (int)$_POST['c'];
        $d = (int)$_POST['d'];

        $sum = $c + $d;
        $product = $c * $d;
        $difference = $c - $d;
        $quotient = $d != 0 ? $c / $d : 'undefined';

        echo "<p>Значення змінних: c = $c, d = $d</p>";
        echo "<p>Сума: $c + $d = $sum</p>";
        echo "<p>Добуток: $c * $d = $product</p>";
        echo "<p>Різниця: $c - $d = $difference</p>";
        echo "<p>Частка: $c / $d = $quotient</p>";
    } else {
        echo "<p>Будь ласка, введіть значення змінних <code>c</code> і <code>d</code> у формі.</p>";
    }
    ?>
</body>
</html>
