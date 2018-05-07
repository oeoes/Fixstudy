<?php 

// Show user by ID

    include "../connection.php";

    $id_user = $_GET['id_user'];

    $data = mysqli_query($koneksi, "SELECT * FROM t_user WHERE id_user='$id_user'");

    $data_arr = array();

    while($result = mysqli_fetch_assoc($data)) {
        $data_arr[] = $result;
    }

    echo json_encode($data_arr);

 ?>