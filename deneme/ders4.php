<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>php'de dizi oluşturmak :
    </h3>
    <ol>
        <li><b> Dizi oluşturmak için Array() fonksiyonu veya [] kullanılabilir.</b></li>
        <li><b>Dizi içersinde faklı türden birçok değer nılunabilir.(int,string,double,obje)</b></li>
        <li><b>echo $diziadi ile dizi içeriği ekrana yazdırılamaz.(Array to string convertion hatası verir.)<br>fakat dizinin bir elemanı echo[indisNumarası] şeklinde yazdırılabilir.
        <li><b>dizinin içerisindeki string ifadelerçift tırnak ile yazılır.</b></li>
        <li><b>dizinin elemanları birbirinden virgül(,) ile ayrılır.</b></li>
        <li><b>dizi içerisinde indisler varsayılan olarak 0'dan başlar.</b></li>
        <li><b>diziler içerisinde diziler tanımlanabilir.</b></li>
    </ol>


    <?php
    $dizi1 = array(1, 2, 3, "omer");
    $dizi2 = [10, 3, 5, "abdullah"];
    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";
    echo "<br>";
    echo "Dizi içeriğinin foreach döngüsü ile yazdırılması: <br><br><br>";

    foreach ($dizi1 as $dolarEleman) {
        echo $dolarEleman . "<br>";
    }
    echo "<br><br><br><br>";

    echo "Dizi içeriğinin for döngüsü ile yazılması <br><br><br>";

    for ($i = 0; $i < count($dizi1); $i++) {
        echo $dizi1[$i] . "<br>";
    }
    echo "<br><br><br>";
    $sayilar = array(1, 2, 3, 4, 5, 6);
    $sayilar = array(array(1, 2, 3, 4, 5, 6, 7), array("omer", "fatma", "gazi")); //bir dizi içersine birden fazla dizi tanımlama örneği.
    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";
    echo "<br><br><br>";

    $sayilar2 = array(
        "Integer" => array(1, 2, 3, 4, 5, 6), //veritabanından veri çekerken genelde bu şekilde sınıflandırılıyormuş.
        "Double" => array(1.2, 5.7, 3.5)
    );
    echo $sayilar2["Integer"][1]; //dizinin belirli bir elemanına erişmek.
    echo "<br><br><br>";
    $bilgiler = array(
        "id" => 1,
        "adi" =>"Ahmet",
        "soyadi" => "Erimez",
        "gsm" => "5345665152",
        "cinsiyet" => "Erkek",
        "yas" => 22
    );
    echo "Sayın " . $bilgiler["adi"] . " " . $bilgiler["soyadi"] . " Hosgeldiniz";
    foreach ($bilgiler as $bilgi) {
        
    }
    echo "<br><br><br>";echo "<br><br><br>";echo "<br><br><br>";


    // beleş 5 puan
 $bilgi= str_split($bilgiler["gsm"],3);
 foreach ($bilgi as $value) {
     echo $value . " ";
 }

    ?>
</body>

</html>