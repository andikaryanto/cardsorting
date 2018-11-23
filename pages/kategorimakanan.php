<?php
    include "../inc/config.php";
    include "../function/kategori.php";
    include "../function/closemethod.php";
    include "../layout/header.php";

    if(!isset($_SESION)){
      header("location:../index.php");
      //exit();
    }

?>
<!-- Menu Section -->
  <section id="menu" class="menu">
    <div class="container">
        <header class="text-center">
            <h2>Our food menu</h2>
            <h3>Our most popular menu</h3>
        </header>

        <div class="menu">
            <!-- Tabs Navigatin -->
            <ul class="nav nav-tabs text-center has-border" role="tablist">
            <?php 
              $result = getAllKategori();
              $no = 1;
              if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) { 
                    if($no == 1) {
            ?>
                      <li role="presentation" class="active"><a href="#<?php echo $row["Alias"]?>" aria-controls="<?php echo $row["Alias"]?>" role="tab" data-toggle="tab"><?php echo $row["Nama"]?></a></li>
            <?php  
                    } else {
            ?>
                      <li role="presentation"><a href="#<?php echo $row["Alias"]?>" aria-controls="<?php echo $row["Alias"]?>" role="tab" data-toggle="tab"><?php echo $row["Nama"]?></a></li>
            <?php
                    }
                    ++$no;
                  }
              } else {
                  echo "0 results";
              }
            ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

              <?php 
              $result = getAllKategori();
              $no = 1;
              if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) { 
                    if($no == 1) {
              ?>
                      <div role="tabpanel" class="tab-pane active" id="<?php echo $row["Alias"]?>">
                        <div class="row">
                        <?php
                          $detail = getDataCloseMethodByKategori($row["Id"]);
                          if (mysqli_num_rows($detail) > 0) {
                            while($detailrow = mysqli_fetch_assoc($detail)) { 
                        ?>
                          <!-- item -->
                            <div class="col-sm-4">
                              <div class="menu-item clearfix">
                                  <div class="item-details pull-left">
                                      <h5><?php echo $detailrow["NamaMakanan"]?></h5>
                                      <!-- <p>Mushroom / Veggie / White Sources</p> -->
                                  </div>
                                  <div class="item-price pull-right">
                                      <input id = "<?php echo $row["Id"]."~".$detailrow["IdMakanan"]?>" 
                                            type ="checkbox" 
                                            value = "<?php echo $row["Id"]."~".$detailrow["IdMakanan"]?>"
                                            name = "makanan" <?php if($detailrow["Owned"] == 1)
                                                                {
                                                            ?>
                                                                checked=""
                                                            <?php
                                                                }
                                                            ?>>
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
                      else {
              ?>
                      <div role="tabpanel" class="tab-pane fade" id="<?php echo $row["Alias"]?>">
                        <div class="row">
                        <?php
                          $detail = getDataCloseMethodByKategori($row["Id"]);
                          if (mysqli_num_rows($detail) > 0) {
                            while($detailrow = mysqli_fetch_assoc($detail)) { 
                        ?>
                            <div class="col-sm-4">
                              <div class="menu-item clearfix">
                                  <div class="item-details pull-left">
                                      <h5><?php echo $detailrow["NamaMakanan"]?></h5>
                                      <!-- <p>Mushroom / Veggie / White Sources</p> -->
                                  </div>
                                  <div class="item-price pull-right">
                                      <input id = "<?php echo $row["Id"]."~".$detailrow["IdMakanan"]?>" type="checkbox" 
                                            name = "makanan" 
                                            value = "<?php echo $row["Id"]."~".$detailrow["IdMakanan"]?>"
                                            <?php if($detailrow["Owned"] == 1)
                                                                {
                                                            ?>
                                                                checked=""
                                                            <?php
                                                                }
                                                            ?>>
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
                        ++$no;
                      }
                  } else {
                      echo "0 results";
                  }
              ?>
            </div>
        </div>
        <!-- <div class="row">
          <div class="col-md-12 col-md-push-1">
            <div class="col-sm-12">
              <button id ="btnSimpan" class="btn-unique">Simpan</button>
            </div>
          </div>
        </div> -->
    </div>
  </section>

<!-- End Menu Section -->

<script type = "text/javascript">
$("#btnSimpan").on("click", function () {
  var sbox = Array.from(document.getElementsByName( "makanan" ));
  var i = 0;
  sbox.forEach( function( v ) {
    var idkategori = v.value.split("~")[0];
    var idmakanan = v.value.split("~")[1];
    $.ajax({
      url : "<?php echo $url?>function/simpanmakanankategori.php",
      method : "POST",
      data: {
        idkategori : idkategori,
        idmakanan : idmakanan,
        status : v.checked === true ? 1 : 0
      },
      success : function(data){
      }
    });
    i++;
  });
  
  console.log(sbox.length);
  console.log(i);
  if(sbox.length == i){
    console.log(i);
    window.location.reload();
  }
});

$(":checkbox").on("change", function(e) {
  var idkategori = this.value.split("~")[0];
  var idmakanan = this.value.split("~")[1];
  $.ajax({
    url : "<?php echo $url?>function/simpanmakanankategori.php",
    method : "POST",
    data: {
      idkategori : idkategori,
      idmakanan : idmakanan,
      status : this.checked === true ? 1 : 0
    },
    success : function(data){
    }
  });
});
</script>