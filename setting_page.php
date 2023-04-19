<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting page</title>

    <link rel="stylesheet" type="text/css" href="style/setting.css">

    <style>
        
        #settingForm{

            background-color: lavenderblush;
        }


        

    </style>

</head>
<body>
    <!-- <p>this is a Setting page</p> -->


    <?php

        

    ?>

    
    
    <form id="settingForm" method="POST" >

        <p>Alamat mahasiswa apakah wajib isi:</p>
            <label for="option1">
        <input type="radio" name="alamatMahasiswa" id="option1" value="Option 1" <?php if($radioValue == "Option 1") echo "checked"; ?>>
        Ya
        </label>
        <br>
        <label for="option2">
            <input type="radio" name="alamatMahasiswa" id="option2" value="Option 2" <?php if($radioValue == "Option 2") echo "checked"; ?>>
            Tida
        </label>

        <p>IPK mahasiswa:</p>
        <input type="text" name="ipkMahasiswa" id="ipkMhs" onkeyup=saveValue ><br><br>

        <p>Masukkan ukuran font:</p>
        <input type="text" name="ukuranText" id="ukuranTxt"><br><br>

        <p>Pilih tampilan font</p>
        <select name="tampilanFont" id="tampilanFnt">

            <option value="Bold">Bold</option>
            <option value="Underline">Underline</option>
            <option value="Italic">Italic</option>

        </select><br><br>

        <p>Alamat mahasiswa apakah akan ditampilkan:</p>
        <input type="radio" name="alamatMahasiswaTampil" id="alamatDitampilYa" value="Ya"><label for="alamatDitampilYa">Ya</label><br>
        <input type="radio" name="alamatMahasiswaTampil" id="alamatDitampilTidak" value="Tidak" checked="checked"><label for="alamatDitampilTidak">Tidak</label><br><br>

        <p>IPK mahasiswa apakah akan ditampilkan:</p>
        <input type="radio" name="ipkMahasiswaTampil" id="ipkTampilYa" value="Ya"><label for="ipkTampilYa">Ya</label><br>
        <input type="radio" name="ipkMahasiswaTampil" id="ipkTampilTidak" value="Tidak" checked="checked"><label for="ipkTampilTidak">Tidak</label><br><br>

        <input type="submit" name="submit" value="Save Setting">

    </form>

    <script>
        var ipkMahasiswa = document.getElementsByName("ipkMahasiswa");
        ipkMahasiswa.addEventListener("input", function() {

          localStorage.setItem("studentGPA", ipkMahasiswa.value);
        });

    </script>

    <script>
    var ipkMahasiswa = document.getElementsByName("ipkMahasiswa");
    var ipkMahasiswa = localStorage.getItem("studentGPA");

    if (studentGPA !== null) {

        ipkMahasiswa.value = studentGPA;
    }
    </script>


    <br><br>

    <a href="index.php">Go Back</a>
    






</body>
</html>