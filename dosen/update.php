<?php

include '../connect.php';

$id = $_POST['id'];
$nama_dosen = $_POST['nama_dosen'];
$telp = $_POST['telp'];

$query = "UPDATE dosen SET nama_dosen = '$nama_dosen', telp = '$telp' WHERE id = $id";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil update data <br>";
}else{
    echo "Gagal update data <br>";
}
echo "<a href='read.php'>Lihat Data</a>";

?>
