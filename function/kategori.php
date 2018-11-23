
<?php
//include "inc/config.php";

function getAllKategori()
{
    $conn = conn();
    $sql = "SELECT * FROM kategorimakanan ORDER BY Nama";
    $result = mysqli_query($conn, $sql);

    
    mysqli_close($conn);
    return $result;
}

function getKategoriById($id)
{
    $conn = conn();
    $sql = "SELECT * FROM kategorimakanan WHERE Id = '".$id."'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function insertkategori(){
    $conn = conn();
    $sql = "INSERT INTO kategorimakanan (Nama) values ('test')";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
}

?>