<?php 

    include "../connection.php";

    $username = $_GET['username'];
    $pass = $_GET['pass'];
    $nim = $_GET['nim'];
    $email = $_GET['email'];
    $jur = $_GET['jur'];
    $jk = $_GET['jk'];
    $tgl_lahir = $_GET['tgl_lahir'];
    $notelp = $_GET['notelp'];

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