<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders5 06.04.2022</title>
</head>

<body>
    <?php
    echo "<h3>Php Diziler Devamı</h3>";
    $isimler = array(); // dizi tanımlama..
    // print_r($isimler); // içerisibdeki değişkenin ne tür olduğunu söyler. 
    $isimler[0] = "Omer"; // indisi 0
    $isimler[1] = "osman"; // indisi 1
    $isimler[2] = "orhan"; // indisi 2
    $isimler[0] = "Ozlem"; // eğer indis numarasını girmezsek girilen her elemanı sırası ile ++ yaparak indis verir  //indisi 0
    print_r($isimler); // içerisibdeki değişkenin ne tür olduğunu söyler. 

    echo "<pre>";
    print_r($isimler);
    echo "<pre>";
    echo "<br><br><br><br><br>";


    $ogrenciDetay = array(
        "id" => 1,
        "adi" => "Özlem",
        "soyadi" => "Karaman",
        "bolum" => "Bilgisayar",
        "yas" => 20,
        "dersler" => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Programlama"
        ),
        "sınıf" => 2,
        "memleket" => "erzurum"
    );
    echo "<pre>";
    print_r($ogrenciDetay);
    echo "<pre>";
    //uygulama --> ozlem isimli öğrencinin vep programlama veri tabanı ve mobil programlama dersleri var
    echo $ogrenciDetay["adi"] . " adli öğrencinin "
        . $ogrenciDetay["dersler"]["ders1"] .
        " , "
        . $ogrenciDetay["dersler"]["ders2"] .
        " ve "
        . $ogrenciDetay["dersler"]["ders3"] .
        " dersleri vardır.";

    echo "<br> <hr><h3>Öğrenci detayları</h3>";

    $ogrenciDetay = array(
        "ogr1" => array(

            "id" => 1,
            "adi" => "Özlem",
            "soyadi" => "Karaman",
            "bolum" => "Bilgisayar",
            "yas" => 20,
            "dersler" => array(
                "ders1" => "Web Programlama",
                "ders2" => "Veri Tabanı",
                "ders3" => "Mobil Programlama"
            ),
            "sınıf" => 2,
            "memleket" => "erzurum"
        ),
        "ogr2" => array(
            "id" => 2,
            "adi" => "Osman",
            "soyadi" => "Karaman",
            "bolum" => "Cografya",
            "yas" => 20,
            "dersler" => array(
                "ders1" => "Harita",
                "ders2" => "Ormanlar",
                "ders3" => "Maymunlar"
            ),
            "sınıf" => 2,
            "memleket" => "Hakkari"
        ),
        "ogr3" => array(
            "id" => 23,
            "adi" => "Ömer",
            "soyadi" => "Karaman",
            "bolum" => "Matematik",
            "yas" => 24,
            "dersler" => array(
                "ders1" => "Cebir",
                "ders2" => "Vektröler",
                "ders3" => "blabla"
            ),
            "sınıf" => 4,
            "memleket" => "Horasan"
        )
    );
    echo "<pre>";
    echo print_r($ogrenciDetay);
    echo "<pre>";

    // istenilen -> #id     #adi    #soyadi     #bölüm      #dersler      #sınıf
    //              1       Özlem   Karaman     Bilgisayar  Programlama    2 
    //Tablo yapılıp Git'e atılacak Ödev olur kendileri.
    echo "<br> <hr><h3>İf ELse</h3>";

    /* uygulama: 
    1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız. 
    2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.
    3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız.
    */

    ?>



</body>

</html>