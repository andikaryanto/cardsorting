<?php
include "../inc/config.php";
if(!empty($_POST['id'])){
    $id = $_POST['id'];
    $searchQry ="";
    $search = "";
    if(!empty($_POST['search'])){
        $search = $_POST['search'];
        $searchQry = "AND makanan Like '%".$search."%'";
    }

    $conn = conn();
    $myArray = array();
    $sqlunion = " UNION ";

    if(isMakananFavoritExist() == 1){
        $sqlunion = $sqlunion."SELECT id, 99 as idkategori, Nama as Makanan, 'Favorit', UrlGambar 
                     FROM makanan WHERE JumlahFavorit > 0";
    } else {
        $sqlunion = $sqlunion."SELECT id, 99 as idkategori, Nama as Makanan, 'Favorit', UrlGambar 
                     FROM makanan WHERE isFavorit = 1";
    }


    $sql = "SELECT * FROM 
            (
                SELECT A.idmakanan, A.idkategori, C.Nama as Makanan, B.Nama as Kategori, C.UrlGambar
                FROM closemethod A
                INNER JOIN kategorimakanan B ON B.id = A.idkategori
                INNER JOIN makanan C ON C.Id = A.IdMakanan
            ".$sqlunion."
            ) A WHERE idkategori = ".$id." ".$searchQry."
            ORDER BY Makanan";
    
    //echo $sql;
    //var_dump($sql);
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $myArray[] = $row;
        }
        
        echo json_encode($myArray);
    }
    mysqli_close($conn);
}  

function isMakananFavoritExist(){
    
    $isExist = false;
    $conn = conn();
    $sql = "SELECT SUM(JumlahFavorit) as jumlah FROM Makanan";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if((int)$row['jumlah'] > 0)
                $isExist = true;
        }
    }
    mysqli_close($conn);
    return $isExist;
}
?>