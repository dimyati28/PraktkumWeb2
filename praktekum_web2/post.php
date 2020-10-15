<html>
<head>
<title>FORM POST</title>
</head>
<body>
    <form  method="POST" action="?action=edit">
    Nama :
    <input type="text" name="nama"></br>
    Nim :
    <input type="text" name="nim"></br>
    Jurusan :
    <input type="text" name="jurusan"></br>
    Kampus :
    <input type="text" name="kampus"></br>
    Email :
    <input type="text" name="email"></br>
    <input type="submit" name="submit" value="Kirim" ></br>
    </form>

    <?php
    if($_POST)
    {
        echo 'Nama : ' .$_POST['nama'];
        echo '</br>';
        echo 'Nim : ' .$_POST['nim'];
        echo '</br>';
        echo 'Jurusan : ' .$_POST['jurusan'];
        echo '</br>';
        echo 'kampus : ' .$_POST['kampus'];
        echo '</br>';
        echo 'Email : ' .$_POST['email'];
        echo '</br>';
    }


    ?>


</body>


</html>