<?php
include '../connect.php';
$id = $_GET['id'];
$query = "SELECT * FROM dosen WHERE id = $id";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<body>
    <form action="update.php" method="POST">
    <table>
    <tr>
        <td><label for="nama">Nama Dosen</label></td>
        <td>:</td>
        <td><input type="text" name="nama_dosen" id="nama" value="<?php echo $row['nama_dosen']; ?>"></td>
    </tr>
    <tr>
        <td><label for="no_telp">No.Telepon</label></td>
        <td>:</td>
        <td><input type="text" name="telp" id="no_telp" value="<?php echo $row['telp']; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
        <td><input type="submit" value="Simpan" name="btnSimpan"></td>
    </tr>
    </table>
    </form>