<?php
    include "inc/config.php";
    include "function/kategori.php";
    include "function/closemethod.php";
    include "layout/header.php";

    $id = 0;
    $page = 1;
?>

<!-- <div class="container">
    <div id="accordion" class = "card-deck-custom">
        <div class="card">
            <div class="card-header" id="headingOne">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Pilih Kategori
                    </button>
                    <button type="button" data-toggle = "collapse" data-target="#collapseOne" class="btn btn-primary">Tutup</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php 
                            $result = getAllKategori();
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) { 
                        ?>
                                <a class="dropdown-item"  data-target="#collapseOne" href="<?php echo $url?>index.php?id=<?php echo $row["Id"] ?>" ><?php echo $row["Nama"]?></a>
                                    
                        <?php         }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </div>
                </div>
                <?php
                    if(!empty($_GET["id"]))
                    {

                        if(!empty($_GET["page"]))
                        {
                            $page = $_GET["page"];
                        }
                        
                        $id = $_GET["id"];
                        $headertext = "";
                        $result = getKategoriById($id);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) { 
                                $headertext = $row["Nama"];
                            }
                        }
                ?>
                    
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body ">
                            <h2 calss = "card-header-margin">
                                <?php echo $headertext ?>
                            </h2>

                            <?php 
                                $result = getMakananByKategoriId($id,$page, 10);
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                            ?>

                                <div class="card-deck card-deck-custom card-category-custom">
                                    <div class="card card-custom">
                                        <img class="card-img-top card-image-category" src="<?php echo $url.$row["UrlGambar"]?>" alt="Card image cap">
                                        <div class="card-body text-center card-body-custom">
                                            <h5 class="card-title"><?php echo $row["Makanan"]?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                     }
                                } else {
                                    echo "0 results";
                                }
                            ?>
                        </div>                        
                    </div>
                <?php
                    }
                ?>
            </div>
            <?php
                if(!empty($_GET["id"]))
                {
                    
                    $totalPage = getPageByKategoriId($id, 10)
            ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-cutom">
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    </li>
                    <?php for ($i = 1 ; $i <= $totalPage; $i++)
                    {
                    ?>
                    <li class="page-item"><a class="page-link" href="<?php echo $url?>index.php?id=<?php echo $id?>&page=<?php echo $i?>#accordion"><?php echo $i?></a></li>
                    <?php
                    }
                    ?>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                    </li>
                </ul>
            </nav>
            <?php 
                }
            ?>
        </div>
    </div>
    <div id="foodCarousel" class="carousel slide carousel-custom card-deck-custom" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#foodCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#foodCarousel" data-slide-to="1"></li>
            <li data-target="#foodCarousel" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner carousel-height">
            <div class="carousel-item active carousel-height">
            <img class="d-block w-100 inherit-height" src="<?php echo $url?>resources/img/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 inherit-height" src="<?php echo $url?>resources/img/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 inherit-height" src="<?php echo $url?>resources/img/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#foodCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#foodCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="card-deck card-deck-custom">
        <div class="card card-image" style="width:400px;  background-image:url('<?php echo $url?>resources/img/ayam-goreng.jpg'); height: 200px">
            <div class="card-body">
                <a href="#" class="btn btn-danger">PESAN SEKARANG</a>
            </div>
        </div>
        <div class="card card-image" style="width:400px;  background-image:url('<?php echo $url?>resources/img/Coto-Makassar.jpg'); height: 200px">
            <div class="card-body">
                <a href="#" class="btn btn-danger">PESAN SEKARANG</a>
            </div>
        </div>
    </div>          
</div> -->

<?php 
    include "layout/footer.php"
?>
