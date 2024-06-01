<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Результати обробки рядків</title>
</head>

<body>
    <h1>Результати обробки рядків</h1>
    <?php
    if (isset($_POST['e']) && isset($_POST['f'])) {
        $e = $_POST['e'];
        $f = $_POST['f'];

        echo "<p>Перша потім друга: $e, $f</p>";

        echo "<p>Друга потім перша: $f, $e</p>";
    } else {
        echo "<p>Будь ласка, введіть значення рядків <code>e</code> і <code>f</code> у формі.</p>";
    }
    ?>
</body>

</html>