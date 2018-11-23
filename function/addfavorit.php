
<?php
include '../inc/config.php';
if(isset($_POST['idmakanan'])){
    addFavorit($_POST['idmakanan']);
}

function addFavorit($idmakanan){
    $conn = conn();
    $sql = "UPDATE makanan set JumlahFavorit = JumlahFavorit + 1 WHERE id =".$idmakanan;
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
}
?>