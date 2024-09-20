<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $capitale = 30000;
        $giorni = 25;
        $tasso = 0.20;
        $interesse = ($capitale*$tasso*$giorni)/36500;
        echo "<p>capitale: $capitale</p>";
        echo "<p>giorni: $giorni</p>";
        echo "<p>tasso:". $tasso*100 ."%</p>";
        echo "<h2 style='color: green'>L'interesse calcolato è di $interesse €</h2>";
    ?>
</body>
</html>