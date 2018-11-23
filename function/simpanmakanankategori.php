<?php
include "../inc/config.php";
if(isset($_POST)){
    if(isDataExistKategoriMakanan($_POST["idmakanan"], $_POST["idkategori"])){
        if($_POST["status"] == 0){
            deleteKategoriMakanan($_POST["idmakanan"], $_POST["idkategori"]);
            //echo "delete";
        }
    } else {
        if($_POST["status"] == 1){
            insertKategoriMakanan($_POST["idmakanan"], $_POST["idkategori"]);
            //echo "insert";
        }
    }
    echo json_encode($_POST);
}

function isDataExistKategoriMakanan($idmakanan, $idkategori){
    $conn = conn();
    $sql = "SELECT * FROM closemethod where IdKategori = ".$idkategori." 
            AND IdMakanan = ".$idmakanan."";
            
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    }

    return false;
}

function insertKategoriMakanan($idmakanan, $idkategori){
    $conn = conn();
    $sql = "INSERT INTO closemethod (IdKategori, IdMakanan) Values (".$idkategori.",".$idmakanan.")";
    //var_dump($sql);
    $result = mysqli_query($conn, $sql);
}

function deleteKategoriMakanan($idmakanan, $idkategori){
    $conn = conn();
    $sql = "DELETE FROM closemethod WHERE IdKategori = ".$idkategori." AND IdMakanan = ".$idmakanan."";
    //var_dump($sql);
    $result = mysqli_query($conn, $sql);
}
?> 

