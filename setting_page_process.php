<?php

if(isset($_GET['submit'])){

    $alamatMahasiswa = $_GET['alamatMahasiswa'];
    $ipkMahasiswa = $_GET['ipkMahasiswa'];
    $ukuranText = $_GET['ukuranText'];
    $tampilanFont = $_GET['tampilanFont'];
    $alamatMahasiswaTampil = $_GET['alamatMahasiswaTampil'];
    $ipkMahasiswaTampil = $_GET['ipkMahasiswaTampil'];


    // Hanya untuk memeriksa semua variable sudah terisi atau belum
    // echo"$alamatMahasiswa"."<br>";
    // echo"$ipkMahasiswa"."<br>";
    // echo"$ukuranText"."<br>";
    // echo"$tampilanFont"."<br>";
    // echo"$alamatMahasiswaTampil"."<br>";
    // echo"$ipkMahasiswaTampil"."<br>";

}



setcookie("alamatMahasiswa", $alamatMahasiswa);
setcookie("ipkMahasiswa", $ipkMahasiswa);
setcookie("ukuranText", $ukuranText);
setcookie("tampilanFont", $tampilanFont);
setcookie("alamatMahasiswaTampil", $alamatMahasiswaTampil);
setcookie("ipkMahasiswaTampil", $ipkMahasiswaTampil);

header("Location: setting_page.php")


//Hanya untuk ngetest isi Cookie

// if(isset($_COOKIE['alamatMahasiswa'])){


//     $studentAddress = $_COOKIE['alamatMahasiswa'];
//     $studentGPA = $_COOKIE['ipkMahasiswa'];
//     $fontSize = $_COOKIE['ukuranText'];
//     $fontStyle = $_COOKIE['tampilanFont'];
//     $studentAddressShow = $_COOKIE['alamatMahasiswaTampil'];
//     $studentGPAShow = $_COOKIE['ipkMahasiswaTampil'];

//     echo"$studentAddress"."<br>";
//     echo"$studentGPA"."<br>";
//     echo"$fontSize"."<br>";
//     echo"$fontStyle"."<br>";
//     echo"$studentAddressShow"."<br>";
//     echo"$studentGPAShow"."<br>";

// }



?>