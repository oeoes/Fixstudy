<?php 

// from testing branch menambahkan validasi jumlah row
//method diganti dengan POST

    include "../connection.php";

    $id_user = $_POST['id_user'];

    $data = mysqli_query($koneksi, "DELETE FROM t_user WHERE id_user = '$id_user'");
    $num = mysqli_num_rows($data);

    $resoponse = array();

    if($num > 0) {
         if($data){
            $resoponse['code'] = 1;
            $resoponse['message'] = 'Success! Data berhasil dihapus.';
        }
        else{
            $resoponse['code'] = 0;
            $resoponse['message'] = 'Failed! Data gagal dihapus';
        }
    }else {
        $response['code'] = 404;
        $response['message'] = "Data tidak tersedia"; // dari branch Testing
    }
   

    echo json_encode($resoponse);



 ?>