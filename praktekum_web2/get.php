<html>
<head>
<title>FORM GET</title>
</head>
<body>
    <form  method="GET" action="">
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
    
    <?php
    if($_GET)
    {
        echo 'Nama : '.$_GET['nama'];
        echo '</br>';
        echo 'Nim : '.$_GET['nim'];
        echo '</br>';
        echo 'Jurusan : '.$_GET['jurusan'];
        echo '</br>';
        echo 'Kampus : '.$_GET['kampus'];
        echo '</br>';
        echo 'Email : '.$_GET['email'];
        echo '</br>';
    }

    ?>


    </form>
</body>

</html>