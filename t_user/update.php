<?php 

// Update data

    include "../connection.php";

    $id_user = $_GET['id_user'];

    $username = $_GET['username'];
    $pass = $_GET['pass'];
    $nim = $_GET['nim'];
    $email = $_GET['email'];
    $jur = $_GET['jur'];
    $jk = $_GET['jk'];
    $tgl_lahir = $_GET['tgl_lahir'];
    $notelp = $_GET['notelp'];

    $tambah = mysqli_query($koneksi, "UPDATE t_user SET username='$username', pass='$pass', nim='$nim', email='$email', jur='$jur', jk='$jk', tgl_lahir='$tgl_lahir', notelp='$notelp' WHERE id_user='$id_user'");
    $response = array();

    if($tambah){
	    $response['code'] = 1;
	    $response['message'] = "Success! Data perbarui";
    }else{
	    $response['code'] = 0;
	    $response['message'] = "Failed! Data gagal diperbarui";
    }

  echo json_encode($response);

 ?>