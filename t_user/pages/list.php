<?php 

    include "../../connection.php";

    $data = mysqli_query($koneksi, "SELECT * FROM t_user");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<a href="create.html">Tambah Data</a>
    <table cellspacing="3" cellpadding="3">
    	<th>Id</th>
    	<th>username</th>
    	<th>pass</th>
    	<th>nim</th>
    	<th>email</th>
    	<th>jur</th>
    	<th>jk</th>
    	<th>tglahir</th>
    	<th>telp</th>
    	<th></th>
    	<th></th>

    	<?php 

    	    while($baris = mysqli_fetch_assoc($data)){
    	 ?>
    	 <tr>
    	 	<td><?php echo $baris['id_user']; ?></td>
    	 	<td><?php echo $baris['username']; ?></td>
    	 	<td><?php echo $baris['pass']; ?></td>
    	 	<td><?php echo $baris['nim']; ?></td>
    	 	<td><?php echo $baris['email']; ?></td>
    	 	<td><?php echo $baris['jur']; ?></td>
    	 	<td><?php echo $baris['jk']; ?></td>
    	 	<td><?php echo $baris['tgl_lahir']; ?></td>
    	 	<td><?php echo $baris['notelp']; ?></td>
    	 	<td><a href="perbarui.php?id_user=<?php echo $baris['id_user'] ?>">Edit</a></td>
    	 	<td><a href="../delete.php?id_user=<?php echo $baris['id_user'] ?>">Hapus</a></td>
    	 	<td><a href="../view.php?id_user=<?php echo $baris['id_user'] ?>">View</a></td>
    	 </tr>
    	 <?php } ?>
    </table>
</body>
</html>