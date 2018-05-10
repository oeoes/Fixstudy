<?php 

// Update data

    include "../connection.php";

    $id_user = $_POST['id_user'];

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $jur = $_POST['jur'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $notelp = $_POST['notelp'];

    $query = mysqli_query($koneksi, "SELECT * FROM t_user WHERE id_user='$id_user'");
    $data = mysqli_num_rows($query);
    $response = array();

    if($data > 0) {
        $tambah = mysqli_query($koneksi, "UPDATE t_user SET username='$username', pass='$pass', nim='$nim', email='$email', jur='$jur', jk='$jk', tgl_lahir='$tgl_lahir', notelp='$notelp' WHERE id_user='$id_user'");

        if($tambah){
            $response['code'] = 1;
            $response['message'] = "Success! Data perbarui";
        }else{
            $response['code'] = 0;
            $response['message'] = "Failed! Data gagal diperbarui";
        }
    }
    else {
        $response['code'] = 404;
        $response['message'] = "Data tidak tersedia";
    }
    

  echo json_encode($response);

 ?>