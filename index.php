<?php
    include "inc/config.php";
    include "function/kategori.php";
    include "function/closemethod.php";
    include "layout/header.php";

    $id = 0;
    $page = 1;
?>
<!-- Menu Section -->
<section id="kategori" class="menu category-section">
        <div class="container">
            <header class="text-center">
                <h2>Kategori</h2>
                <h3>Paling populer</h3>
            </header>

            <div class="menu">
                
                <ul class="nav nav-tabs text-center has-border" role="tablist">
                        <li onclick = "katergoriClick(99);" role="presentation"><a href="#" aria-controls="Favorit" role="tab" data-toggle="tab">Favorit</a></li>
                        <?php 
                            $result = getAllKategori();
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) { 
                        ?>
                                <li onclick = "katergoriClick(<?php echo $row["Id"]?>);" role="presentation"><a href="#" aria-controls="<?php echo $row["Nama"]?>" role="tab" data-toggle="tab"><?php echo $row["Nama"]?></a></li>
                                
                        <?php         }
                            } else {
                                echo "0 results";
                            }
                        ?>
                </ul>
            </div>
            <label for="search" class="col-sm-12 unique" class = "text-label">Search
                <input name="search" type="text" id="search" class = "text-label">
            </label>
        </div>
    </section>
    <!-- End Menu Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery gallery-section">
        <div class="container text-center">
            <div class="gellery">
                <input hidden id = "idkategori">
                <div class="row" id = "datagallery">
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

    <section id="hero" class="hero">
        <div id="slider" class="sl-slider-wrapper">

            <div id ="caroulselslide" class="sl-slider carousel slide" data-ride="carousel">
                <!-- slide -->
                <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner" style="background-image: url(<?php echo $url ?>assets/theme/theme/img/hero-bg.jpg);">
                        <div class="container">
                            <h2>This is <span class="text-primary">a Simple Place for your stomach</span></h2>
                            <h1>Find yourt dishesh</h1>
                            <p>Yeah <a href="https://bootstraptemple.com/" target="_blank"></a>.</p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner" style="background-image: url(<?php echo $url ?>assets/theme/theme/img/hero-bg02.jpg);">
                        <div class="container">
                            <h2>This is <span class="text-primary">a Simple Place for your stomach</span></h2>
                            <h1>Find yourt dishesh</h1>
                            <p>Yeah <a href="https://bootstraptemple.com/" target="_blank"></a>.</p>
                        </div>
                    </div>
                </div>
                <!-- slide -->
                <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner" style="background-image: url(<?php echo $url ?>assets/theme/theme/img/hero-bg03.jpg);">
                        <div class="container">
                            <h2>This is <span class="text-primary">a Simple Place for your stomach</span></h2>
                            <h1>Find yourt dishesh</h1>
                            <p>Yeah <a href="https://bootstraptemple.com/" target="_blank"></a>.</p>
                        </div>
                    </div>
                </div>
            </div><!-- End sl-slider -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#caroulselslide" data-slide-to="0" class="active"></li>
                <li data-target="#caroulselslide" data-slide-to="1"></li>
                <li data-target="#caroulselslide" data-slide-to="2"></li>
            </ol> -->
            <!-- slider pagination -->
            
            <ol class="carousel-indicators">
                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                </nav>
            </ol>

            <!-- scroll down btn -->
            <!-- <a id="scroll-down" href="#about" class="hidden-xs"></a>
            <nav id="nav-dots" class="nav-dots">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav> -->

            <!-- social icons menu -->
            <div class="social">
                <div class="wrapper">
                    <ul class="list-unstyled">
                        <li><a href="#" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <span>Follow us on</span>
                </div>
            </div>
        </div><!-- End slider-wrapper -->
    </section><!-- End Hero Section -->
    <!-- Details -->
    <section id="details" class="details">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="heading text-center">
                        <p>Call Us Now For</p>
                        <h5>Home Delivery</h5>
                    </div>
                    <a href="tel:9870988764" class="phone">123 456 78890</a>
                </div>

                <div class="col-sm-6">
                    <div class="heading text-center">
                        <p>Check Our Clients'</p>
                        <h5>Rating &amp; Reviews</h5>
                    </div>
                    <a href="#" class="reviews btn-unique"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details-->
    
    
    <!-- About Section -->
    <section id="about" class="about">
        <div class="container text-center">
            <header>
                <h2>About Our Place</h2>
            </header>
            <p class="lead">We found this place in early 2017. So this now, we decorate this place as good-look as warmest heart.
                            We startet
            </p>
        </div>
    </section>
    <!-- End About Section -->
<!-- Offers Section -->
    <section id="offers" class="offers">
        <div class="container text-center">

            <header>
                <h2>Special Offers</h2>
                <h3>Don't miss our offers</h3>
            </header>

            <div class="row">
                <div class="col-sm-4">
                    <div class="item">
                        <div class="discount">
                            <span>40% <br> Off</span>
                        </div>
                        <div class="profile">
                            <img src="<?php echo $url ?>assets/theme/theme/img/dish-d.png" alt="dish name" class="img-responsive">
                        </div>
                        <div class="text">
                            <h4>Dish Name</h4>
                            <p class="after text-primary text-large">30.00$</p>
                            <p class="before text-muted text-large">50.00$</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="item">
                        <div class="discount">
                            <span>40% <br> Off</span>
                        </div>
                        <div class="profile">
                            <img src="<?php echo $url ?>assets/theme/theme/img/dish-d.png" alt="dish name" class="img-responsive">
                        </div>
                        <div class="text">
                            <h4>Dish Name</h4>
                            <p class="after text-primary text-large">30.00$</p>
                            <p class="before text-muted text-large">50.00$</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="item">
                        <div class="discount">
                            <span>40% <br> Off</span>
                        </div>
                        <div class="profile">
                            <img src="<?php echo $url ?>assets/theme/theme/img/dish-d.png" alt="dish name" class="img-responsive">
                        </div>
                        <div class="text">
                            <h4>Dish Name</h4>
                            <p class="after text-primary">30.00$</p>
                            <p class="before text-muted">50.00$</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offers Section -->
    <!-- Footer -->
    <footer id="mainFooter" class="mainFooter">
        <div class="container">
            <div class="row">
                <div class="col-md-4 brief">
                    <div class="header">
                        <img src="<?php echo $url ?>assets/theme/theme/img/logo-footer.png" alt="italiano" width="100">
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>

                <div class="col-md-4 contact">
                    <div class="header">
                        <h6>Contact</h6>
                    </div>
                    <ul class="contact list-unstyled">
                        <li><span class="icon-map text-primary"></span>Basioun, 23 July st, Egypt</li>
                        <li><a href="mailto:Italiano@Company.com"><span class="icon-phone text-primary"></span>Italiano@Company.com</a></li>
                        <li><span class="icon-mail text-primary"></span>9465 7675 294</li>
                        <li><span class="icon-printer text-primary"></span>333-999-666</li>
                    </ul>
                </div>

                <div class="col-md-4 newsletter">
                    <div class="header">
                        <h6>Newsletter</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmo.</p>
                    <form action="#" id="subscribe" class="clearfix">
                        <input type="email" name="subscribtion-email" placeholder="Enter Your Email Address" class="pull-left">
                        <button type="submit" class="btn-unique has-border pull-left">Subscribe</button>
                    </form>
                </div>
            </div>

            <ul class="social list-unstyled list-inline">
                <li><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" target="_blank" title="Skype"><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>

        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#">Policy Privacy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-7">
                        <p>&copy; 2017 Italiano Restaurant. Template By <a href="https://bootstraptemple.com/" target="_blank">BootstrapTemple.com</a></p>
                        <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :) -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
<script type = "text/javascript">
    $( document ).ready(function() {
        console.log( "ready!" );
        getDataMakanan(99);
    });

    function katergoriClick(id){
        $("#search").val("");
        getDataMakanan(id);
    }

    function getDataMakanan(id){
        var search = $("#search").val();
        //alert(search);
        $.ajax({
            type: "POST",
            url : "function/makananbykategoriid.php",
            data:{
                id: id,
                search : search
            },
            success : function(data){
                console.log(data);
                //console.log(JSON.parse(data));
                clearDataGallery(); 
                var makanan = $.parseJSON(data);
                console.log(makanan);
                for(var i = 0; i < makanan.length; i++){
                $("#datagallery").append("<div onclick = 'addFavorit("+makanan[i]['idmakanan']+")' class='col-md-3 col-sm-4 col-xs-6 col-xs-6 col-custom-12'>"+
                                    "<div class='item image-gallery'>"+
                                    //"<div class='icon-on-image'>" +
                                    "<img src='"+makanan[i]['UrlGambar']+"' alt='image'>"+
                                    // "<span class='icon-image icon-search'></span>"+
                                    // "</div>" +
                                    "<div class='text-on-img'>"+makanan[i]['Makanan']+"</div>"+
                                    "<a href='"+makanan[i]['UrlGambar']+"' data-lightbox='image-1' data-title='"+makanan[i]['Makanan']+"' class='has-border'>"+
                                    "<span class='icon-search'></span>"+
                                    "</a>"+
                                    "</div>"+
                                    "</div>");
                 }
                 $("#idkategori").val(id);
            }
        });
    }

    function clearDataGallery(){
       $("#datagallery").find("div").remove();
    }

    $("#search").on("keyup", function(event){
        event.preventDefault();
        if (event.keyCode === 13) {
            getDataMakanan($("#idkategori").val());
        }
    })

    function addFavorit(idmakanan){
        $.ajax({
            url : "<?php echo $url?>/function/addfavorit.php",
            method : "POST",
            data : {idmakanan : idmakanan},
            success : function(e){

            }
        });
    }

</script>
    


<?php 
    include "layout/footer.php"
?>
