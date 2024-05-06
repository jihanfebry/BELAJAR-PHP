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
        IPA <br> <input type="text" name ="a"></input> <br>
        <br>
        MATEMATIKA <br> <input type="text" name ="l"></input> <br>
        <br>
        IPS <br> <input type="text" name ="d"></input> <br>
        <br>
        INDONESIA <br> <input type="text" name ="o"></input> <br>
        <br>
        <input type="submit" text = "cek">
    </form>
    <?php
    if($_SERVER ['REQUEST_METHOD'] == "POST")
    {
        
        $a = $_POST['a'];
        $l = $_POST['l'];
        $d = $_POST['d'];
        $o = $_POST['o'];
        $hasilt = $a + $l + $d + $o ;
        $nilai = $hasilt / 4 ;

        
        echo "<br/>" ;
        echo "Nilai rata ratanya adalah : $nilai" ;

        if ($nilai >= 90 && $nilai <= 100)
          {
            echo " (A)";
          }elseif( $nilai >= 80 )
          {
            echo " (B)";
          }
          elseif( $nilai >= 70 && $nilai <=80  )
          {
            echo " (C)";
          }
          else
          {
            echo " (TIDAK LULUS)" ;
          }
          
          
  

    }
    ?>

</body>
</html>