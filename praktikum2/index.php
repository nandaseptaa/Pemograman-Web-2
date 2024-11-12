<?php
 include "orang.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum2</title>
</head>
<body>
    <h1>praktikum2</h1>
    <div>
        <?php
        $james = new orang();
        $james->nama = "James Smith";

        $james->ucapSalam();

        echo "<br>";

        $emely = new orang();
        $emely->nama = "Emely Walker";
        $emely->ucapSalam();

        echo "<br>";

        $visibility = new visibility();
        $visibility->tampilkanproperty

        echo "ini akses di luar kelas ;
        echo "public : " . $visibility->public . '<br>';
        echo "protected : " . $visibility->protected . '<br>';


        ?>
    </div>
</body>
</html>