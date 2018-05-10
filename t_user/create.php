<?php 

// methode diganti dengan POST

    include "../connection.php";

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $jur = $_POST['jur'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $notelp = $_POST['notelp'];

    $tambah = mysqli_query($koneksi, "INSERT INTO t_user(username, pass, nim, email, jur, jk, tgl_lahir, notelp) VALUES('$username', '$pass', '$nim', '$email', '$jur', '$jk', '$tgl_lahir', '$notelp')");
    $response = array();

    if($tambah){
	    $response['code'] = 1;
	    $response['message'] = "Success! Data ditambahkan";
    }else{
	    $response['code'] = 0;
	    $response['message'] = "Failed! Data gagal ditambahkan";
    }

  echo json_encode($response);

 ?>