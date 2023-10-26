  
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/anime.jpg" alt="Slide">
					</li>
					<li><img src="img/anime-figure-anime-figures-manga-comiccon-comic.jpg" alt="Slide">
					</li>
					<li><img src="img/anime-figure-anime-figures-manga.jpg" alt="Slide">
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!--Gioi thieu cac chuc nang-->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Exchange, return every 1 months </p> -->
                        <li>
						<img src="https://oasis.opstatics.com/content/dam/oasis/page/2023/home/media/logo2pc.svg" alt="Slide">
					</li>
                    </div>
                
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free ship</p>
                    </div> -->
                    <li>
						<img src="https://oasis.opstatics.com/content/dam/oasis/page/2023/home/media/logo3pc.svg" alt="Slide">
					</li>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p> -->
                        <li>
						<img src="https://oasis.opstatics.com/content/dam/oasis/page/2023/home/media/logo4pc.svg" alt="Slide">
					</li>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p> -->
                        <li>
						<img src="https://oasis.opstatics.com/content/dam/oasis/page/2023/home/media/logo1pc1.svg" alt="Slide">
					</li>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                </div>
                                
                                <h2><a href="?page=details&&id=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?>$</ins> <del>
                                </div> 
                            </div>
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="images/Dragon_Ball_Z_Logo_C.png" alt="">
                            <img src="images/Tanoshii+Logo@0.5xweb.png" alt="">
                            <img src="images/LOGO_ONEPIECE.png" alt="">
                            <img src="images/Naruto-Logo.png" alt="">                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Bestseller</h2>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=DB_VGT"><img src="img/Vegito.png" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=DB_VGT">Figure_Vegito</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$100</ins> <del>$400</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=NA_ITA"><img src="img/itachi.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=NA_ITA">Figure_Itachi</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$70</ins> <del>$120</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=OP_LUF"><img src="img/Luffy.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=OP_LUF">Figure_Luffy</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$160</ins> <del>$250</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=OP_SKS"><img src="img/Shanks.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=OP_SKS">Figure_Shanks</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$150</ins> <del>$250</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=DB_BRO"><img src="img/Broly.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=DB_BRO">Figure_Broly</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$80</ins> <del>$100</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=NA_NAX3"><img src="img/NarutoX3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=NA_NAX3">Figure_Naruto</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$45</ins> <del>$85</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Latest</h2>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=DB_MAB"><img src="img/Mabu.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=DB_MAB">Figure_Mabu</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$95</ins> <del>$120</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=OP_ROB"><img src="img/Robin.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=OP_ROB">Figure_Robin</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$120</ins> <del>$140</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="?page=details&&id=NA_SAS"><img src="img/Sasuke.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="?page=details&&id=NA_SAS">Figure_Sasuke</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$63</ins> <del>$80</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
   
  