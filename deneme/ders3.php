<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    $yazi= "Aydın Adnan Menderes Yüksekokulu";
    echo "<br> Değişken İçeriği: $yazi (". gettype($yazi).")";// değişken tipini öğrenmek.
    echo "<br> \$yazi içeriğin büyük harfle yazılması: " . strtoupper($yazi);
    echo "<br> \$yazi içeriğin büyük harfle yazılması: " . mb_strtoupper($yazi);
    echo "Asci karakterleri"; //chr
    echo "<br>";
    //Uygulama:
    $veri="2021-12-25";
    $veriler=explode("-",$veri);
    $diziTers=array_reverse($veriler);
    for ($i=0; $i <3; $i++) { 
        
        print_r($diziTers[$i]);
        echo "-";

        
    }
    echo "<br>";
    $iban="TR0411112222333344445555";
    $yeniban=str_split($iban,4);
    foreach ($yeniban as $value) {
        echo $value . "-";
    }
    //train substr str_replace md5 -sha1


?>
</body>
</html>