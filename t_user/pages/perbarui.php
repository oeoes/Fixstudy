<?php 

	include "../../connection.php";

	$id_user = $_GET['id_user'];

	$isi = mysqli_query($koneksi, "SELECT * FROM t_user WHERE id_user='$id_user'");

	$data = mysqli_fetch_assoc($isi)
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Perbarui</title>
</head>
<body>
    <form action="../update.php" method="get">
        <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
    	<input type="text" name="username" placeholder="username" value="<?php echo $data['username'] ?>">
    	<input type="password" name="pass" placeholder="pass" value="<?php echo $data['pass'] ?>">
    	<input type="text" name="nim" placeholder="nim" maxlength="10" value="<?php echo $data['nim'] ?>">
    	<input type="email" name="email" placeholder="email" value="<?php echo $data['email'] ?>">
    	<input type="text" name="jur" placeholder="jur" value="<?php echo $data['jur'] ?>">
    	<input type="number" name="jk" placeholder="jk" maxlength="1" value="<?php echo $data['jk'] ?>">
    	<input type="date" name="tgl_lahir" placeholder="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>">
    	<input type="number" name="notelp" placeholder="notelp" maxlength="12" value="<?php echo $data['notelp'] ?>">
    	<input type="submit" name="perbarui" value="Perbarui">
    </form>
</body>
</html>