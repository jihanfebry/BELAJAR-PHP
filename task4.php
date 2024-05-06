<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARITMATIKA</title>
</head>
<body>
    <form action="#" method = "post">
        Angka pertama <br> <input type="text" name ="A"></input> <br>
        <br>
        Angka kedua <br> <input type="text" name ="B"></input> <br>
        <br>
        <input type="submit" text = "cek">
    </form>


    <?php
    if($_SERVER ['REQUEST_METHOD'] == "POST")
    {
        
        $x = $_POST['A'];
        $y = $_POST['B'];
        
        echo "Hasil perkalian (*) kedua angka tersebut yaitu : " . $x*$y ;
        echo "<br/>" ;
        echo "Hasil pembagian (/) kedua angka  tersebut yaitu : " . $x/$y ;
        echo "<br/>" ;
        echo "Hasil penjumlahan (+) kedua angka  tersebut yaitu : " . $x+$y ;
        echo "<br/>" ;
        echo "Hasil pengurangan (-) kedua angka tersebut yaitu : " . $x-$y ;
        echo "<br/>" ;

    }
    ?>

</body>
</html>