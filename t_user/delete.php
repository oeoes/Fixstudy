<?php 

    include "../connection.php";

    $id_user = $_GET['id_user'];

    $data = mysqli_query($koneksi, "DELETE FROM t_user WHERE id_user = '$id_user'");

    $resoponse = array();

    if($data){
    	$resoponse['code'] = 1;
    	$resoponse['message'] = 'Success! Data berhasil dihapus.';
    }
    else{
    	$resoponse['code'] = 0;
    	$resoponse['message'] = 'Failed! Data gagal dihapus';
    }

    echo json_encode($resoponse);



 ?>