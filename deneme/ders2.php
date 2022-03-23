<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders2</title>
</head>

<body>

    <?php
    //php versiyon ve detay bilgisini gösterir. --> echo phpinfo()

    echo "<h4> Tırnak işaretleri arasındaki farklar </h4>";

    echo "<br>";
    $uni_kazan = "Adnan Menderes Üniversitesi.";
    $uni_bolum = "Bilgisayar Programcılığı";
    echo "Kazandığınız Üniversite: $uni_kazan" . "<br>" . " Kazanılan Bölüm: $uni_bolum";

    echo "<hr> <h4>Temel Matematiksel işlemler(4 işlem)</h4>";
    echo "<h5>Toplama İşlemi</h5>";
    $s1 = 1;
    $s2 = 2;
    $s3 = $s1 + $s2;
    echo "$s3";
    echo "<br>";
    echo $s1 + $s2;
    echo "<hr <h5>Çıkarma İşlemi</h5>";
    echo "<br>";
    echo "<br>";
    $s4 = $s2 - $s1;
    echo $s4;
    echo "<hr> <h4>Üst alma işlemi (pow)</h4>";
    $x = 4;
    $y = 2;
    echo "Değişken tipi: " . gettype($x) . "<br>";
    echo "Değişken tipi: " . gettype($y) . "<br>";
    echo "$x<sup>$y</sup> =" . pow($x, $y);
    echo "<br>";


    echo "<hr><h4>Karekök işlemi</h4>";
    $x = 64;
    $karekok = sqrt($x);
    echo $karekok;



    echo "<hr><h4>Mutlak Değer işlemi (abs(x))</h4>";
    $x = (-12);
    $mutlak = abs($x);
    echo "|$x|" . "sayısının mutlak değeri: " . "$mutlak";

    echo "<hr><h4>Taban değişim işlemi (base_convert(x,taban1,taban2))</h4>";
    echo "50 sayısının 2'lik tabandaki karşılığı :";
    echo "<br>";
    $sayi1 = 50;
    $taban = 10;
    $yenitaban = 2;
    $sonuc = base_convert($sayi1, $taban, $yenitaban);
    echo "<br>";
    echo "($sayi1)<sub>$taban</sub>= " . "($sonuc)<sub>$yenitaban</sub>";
    echo "<br>";
    echo "<hr><h4>mod alma (fmod(x,y))</h4>";
    $x = 20;
    $y = 4;
    $mod = fmod($x, $y);
    echo "$x mod $y : $mod";
    echo "<br>";
    echo "<hr><h4>Yuvarlama İşlemleri: (round(x,y))</h4>";
    $x = 15.315;
    $y = 15.385;
    $yuv = round($x, 0);
    echo $yuv;
    echo "<br>";
    $ssd = 14.99999999;
    $yub2 = floor($ssd);
    echo $yub2;
    












    ?>
    <br><br><br><br><br><br>

</body>

</html>