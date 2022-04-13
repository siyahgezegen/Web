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
    //1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız
    $rastgeleSayi = rand(0, 100);
    echo "<center>0,100 arasında üretilen rastgele sayısı : $rastgeleSayi <br></center>";
    if ($rastgeleSayi % 2 == 0) {

        echo "<center>$rastgeleSayi Çift sayıdır.</center>";
    } else {
        echo "<center>$rastgeleSayi Tek sayıdır.</center>";
    }
    echo "<br><hr><br>";
    // 2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.
    $rastgeleSayi2 = rand(0, 100);
    echo "<center>Notunuz: $rastgeleSayi2 </center><br>";
    if ($rastgeleSayi2 >= 50) {
        echo "<center>Geçtiniz.</center>";
    } else {
        echo "<center>Kaldınız.</center>";
    }
    echo "<br><hr><br>";
    // 3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız.


    

    ?>
    
    




</body>

</html>