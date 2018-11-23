<?php
function getMakananByKategoriId($id, $page , $rowCount)
{
    $conn = conn();
    $limit = $page * $rowCount - $rowCount;
    $sql = "SELECT A.idmakanan, A.idkategori, C.Nama as Makanan, B.Nama as Kategori, C.UrlGambar
            FROM closemethod A
            INNER JOIN kategorimakanan B ON B.id = A.idkategori
            INNER JOIN makanan C ON C.Id = A.idmakanan
            WHERE A.idkategori = ".$id."
            ORDER BY C.Id
            LIMIT ".$limit.",".$rowCount."";
            
    $result = mysqli_query($conn, $sql);

    
    mysqli_close($conn);
    return $result;
}

function getPageByKategoriId($id, $dataSize)
{
    $conn = conn();
    $sql = "SELECT A.idmakanan, A.idkategori, C.Nama as Makanan, B.Nama as Kategori
            FROM closemethod A
            INNER JOIN kategorimakanan B ON B.id = A.idkategori
            INNER JOIN makanan C ON C.Id = A.idmakanan
            WHERE A.idkategori = ".$id."";
            
    $result = mysqli_query($conn, $sql);
    $rowcount=mysqli_num_rows($result);
    
    $totalPage = ceil($rowcount / $dataSize);

    mysqli_close($conn);
    return $totalPage;
}

function getDataCloseMethod(){
    $conn = conn();
    $sql = "SELECT A.*, 
                    CASE 
                        WHEN B.IdMakanan IS NULL THEN 0
                        WHEN B.IdMakanan = 0 THEN 0
                        ELSE 1
                    END Owned
            FROM ( 
                SELECT A.Id as IdMakanan, A.Nama as NamaMakanan, B.Id As IdKategori, B.Nama as Kategori 
                FROM makanan A 
                CROSS JOIN kategorimakanan B 
            )A 
            LEFT JOIN closemethod B ON B.IdMakanan = A.IdMakanan AND B.IdKategori = A.IdKategori
            ORDER BY A.Kategori,B.IdMakanan DESC, A.NamaMakanan";
            
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function getDataCloseMethodByKategori($kategoriId){
    $conn = conn();
    $sql = "SELECT A.*, 
                    CASE 
                        WHEN B.IdMakanan IS NULL THEN 0
                        WHEN B.IdMakanan = 0 THEN 0
                        ELSE 1
                    END Owned
            FROM ( 
                SELECT A.Id as IdMakanan, A.Nama as NamaMakanan, B.Id As IdKategori, B.Nama as Kategori 
                FROM makanan A 
                CROSS JOIN kategorimakanan B 
            )A 
            LEFT JOIN closemethod B ON B.IdMakanan = A.IdMakanan AND B.IdKategori = A.IdKategori
            WHERE A.IdKategori = ".$kategoriId."
            ORDER BY A.Kategori,B.IdMakanan DESC, A.NamaMakanan";
            
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

?>