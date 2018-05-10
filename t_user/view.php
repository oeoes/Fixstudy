<?php 

// diganti dengan method POST
// Show user by ID

    include "../connection.php";

    $id_user = $_POST['id_user'];

    $data = mysqli_query($koneksi, "SELECT * FROM t_user WHERE id_user='$id_user'");
    $num = mysqli_num_rows($data);

    $data_arr = array();

    if($num > 0) {
    	while($result = mysqli_fetch_assoc($data)) {
            $data_arr[] = $result;
        }
    }
    else{
    	$data_arr['code'] = 404;
    	$data_arr['message'] = "Data tidak tersedia";
    }

    

    echo json_encode($data_arr);

 ?>