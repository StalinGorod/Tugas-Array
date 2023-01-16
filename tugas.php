<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="color: orange;">BELAJAR ARRAY DI PHP</h1>
    <hr>

    <div>
        <h3>Looping dengan FOR</h3>
        <?php

        for ($i = 0; $i < 7; $i++) {
            $day = date('l', strtotime("+$i days"));

            echo "<div class='hari1'>$day</div>";
        }

        ?>

        <div id="clr"></div>
        <hr>
        <h3>Looping dengan FOREACH</h3>

        <?php

        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

        foreach ($hari as $days) {

            echo "<div class='hari2'>$days</div>";
        }

        ?>
    </div>
</body>

</html>