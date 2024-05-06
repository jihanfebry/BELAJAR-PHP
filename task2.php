<?php
    $ald= ["Jihan Febriyanti Hendrawan", "12209066", "PPLG X - 1", "Cisarua 5"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK ARRAY</title>
    <style>
        h1{
            color : pink;
        }
    </style>
</head>
<body>
    <h1>
    <?php foreach ($ald as $al) { ?>
            <?= $al ; ?>
    <?php } ?>
    </h1>
</body>
</html>