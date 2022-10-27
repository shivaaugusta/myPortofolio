<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
<form>
    Angka_1 : <input type="text" name="ang1"><br>
    Angka_2 : <input type="text" name="ang2"><br>
    <input type="submit" value="Tambah" name="tbh">
    <input type="submit" value="Kurang" name="krg">
    <input type="submit" value="Kali" name="kali">
    <input type="submit" value="Bagi" name="bagi">
</form>

//program menghitung
if (isset($_POST['tbh'])){
    $angka1=$_POST['ang1'];
    $angka2=$_POST['ang2'];

    $hasil=$angka1+$angka2;
    echo "Hasil : <b>$hasil</br>";
}
if (isset($_POST['krg'])){
    $angka1=$_POST['ang1'];
    $angka2=$_POST['ang2'];

    $hasil=$angka1-$angka2;
    echo "Hasil : <b>$hasil</br>";
}
if (isset($_POST['kali'])){
    $angka1=$_POST['ang1'];
    $angka2=$_POST['ang2'];

    $hasil=$angka1*$angka2;
    echo "Hasil : <b>$hasil</br>";
}
if (isset($_POST['bagi'])){
    $angka1=$_POST['ang1'];
    $angka2=$_POST['ang2'];

    $hasil=$angka1/$angka2;
    echo "Hasil : <b>$hasil</br>";
}

?>
</body>
</html>
