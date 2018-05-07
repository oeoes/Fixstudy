<?php 

// Menampilkan data

    include "../connection.php";

    $data = mysqli_query($koneksi, "SELECT * FROM t_user");

    $data_arr = array();

    while($result = mysqli_fetch_assoc($data)) {
        $data_arr[] = $result;
    }

    echo json_encode($data_arr);

 ?>