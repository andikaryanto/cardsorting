<?php 
include "../inc/config.php";
if(isset($_GET['username']) && isset($_GET['password'])){
    $conn = conn();
    $sql = "SELECT * FROM user WHERE NamaUser = '".$_GET['username']."' AND Password = '".$_GET['password']."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $datauser = array(
            'namauser' => $_GET['username']
        );
        session_start();
        $_SESSION["userdata"] = $datauser;
        //echo $_SESSION["userdata"]["namauser"];
        header("location:../index.php");
    }
}
?>