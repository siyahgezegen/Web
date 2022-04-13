<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OmerKrmn - Ödev</title>
</head>

<body>


    <?php
    // istenilen -> #id     #adi    #soyadi     #bölüm      #dersler      #sınıf
    //              1       Özlem   Karaman     Bilgisayar  Programlama    2 
    //Tablo yapılıp Git'e atılacak Ödev olur kendileri.


    $ogrenciler = array(
        "ogrenci1" => array(
            "id" => 1,
            "adi" => "Ömer",
            "soyadi" => "Karaman",
            "bolum" => "Bilgisayar Programcılığı",
            "dersler" => array(
                "1" => "Grafik Ve Animasyon",
                "2" => "Web Teknolojileri",
                "3" => "İnternet Programcılığı"
            ),
            "sinif" => 3
        ),
        "ogrenci2" => array(
            "id" => 2,
            "adi" => "Arif",
            "soyadi" => "Işık",
            "bolum" => "Serbest Meslek",
            "dersler" => array(
                "1" => "Halı Kilim Travel",
                "2" => "Turizm",
                "3" => "Arap Edebiyatı"
            ),
            "sinif" => 3
        ),
        "ogrenci3" => array(
            "id" => 3,
            "adi" => "Harry",
            "soyadi" => "Potter",
            "bolum" => "Seherbazlık",
            "dersler" => array(
                "1" => "iksir yapımı",
                "2" => "karanlık sanatlar savunma",
                "3" => "şifalı bitkiler"
            ),
            "sinif" => 4
        )

    );
    ?>
    <table border="1">

        <body>
            <tr>
                <td>id</td>
                <td>Adı</td>
                <td>Soyadı</td>
                <td>Bolümü</td>
                <td>Dersleri</td>
                <td>sinifi</td>
            </tr>
            <tr>
                <td><?php echo $ogrenciler["ogrenci1"]["id"] ?></td>
                <td><?php echo $ogrenciler["ogrenci1"]["adi"] ?></td>
                <td><?php echo $ogrenciler["ogrenci1"]["soyadi"] ?></td>
                <td><?php echo $ogrenciler["ogrenci1"]["bolum"] ?></td>
                <td>
                    <?php
                    for ($i = 1; $i < 4; $i++) {
                        echo "<center>" . ($ogrenciler["ogrenci1"]["dersler"][$i])."</center>";
                        echo "<br>";
                    }
                    ?>
                </td>
                <td><?php
                    echo "<center>" . $ogrenciler["ogrenci1"]["sinif"] . "</center>" ?>
                </td>
            </tr>
            <tr>
                <td><?php echo $ogrenciler["ogrenci2"]["id"] ?></td>
                <td><?php echo $ogrenciler["ogrenci2"]["adi"] ?></td>
                <td><?php echo $ogrenciler["ogrenci2"]["soyadi"] ?></td>
                <td><?php echo $ogrenciler["ogrenci2"]["bolum"] ?></td>
                <td>
                    <?php
                    for ($i = 1; $i < 4; $i++) {
                        echo "<center>" . ($ogrenciler["ogrenci2"]["dersler"][$i])."</center>";
                        echo "<br>";
                    }
                    ?>
                </td>
                <td><?php
                    echo "<center>" . $ogrenciler["ogrenci2"]["sinif"] . "</center>" ?>
                </td>
            </tr>
            <tr>
                <td><?php echo $ogrenciler["ogrenci3"]["id"] ?></td>
                <td><?php echo $ogrenciler["ogrenci3"]["adi"] ?></td>
                <td><?php echo $ogrenciler["ogrenci3"]["soyadi"] ?></td>
                <td><?php echo $ogrenciler["ogrenci3"]["bolum"] ?></td>
                <td>
                    <?php
                    
                    for ($i = 1; $i < 4; $i++) {
                        echo "<center>" . ($ogrenciler["ogrenci3"]["dersler"][$i])."</center>";
                        echo "<br>";
                    }
                    ?>
                </td>
                <td><?php
                    echo "<center>" . $ogrenciler["ogrenci3"]["sinif"] . "</center>" ?>
                </td>
            </tr>
        </body>
    </table>

</body>

</html>