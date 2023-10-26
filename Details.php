<?php
if(isset($_GET["id"])){
		$id = $_GET["id"];
		$sqlstring = "Select Product_Name, Price, SmallDesc, DetailDesc, ProDate, Pro_qty,
		Pro_image,Cat_ID,Shop_ID from product where Product_ID='$id'";

		$result = mysqli_query($conn, $sqlstring);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		$proname = $row["Product_Name"];
		$short = $row['SmallDesc'];
		$detail = $row['DetailDesc'];
		$price = $row['Price'];
		$qty = $row['Pro_qty'];
		$pic = $row['Pro_image'];
		$category = $row['Cat_ID'];
		$shop = $row["Shop_ID"];

}
?>
<div class="product-content product-wrap clearfix">
<div class="row">
	
		<div class="col-md-2 col-sm-1 col-xs-2">
			<div class="product-image"> 
				<img src='product-imgs/<?php echo $row['Pro_image']?>' alt="100px" class="img-responsive"> 
			</div>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
		<div class="product-deatil">
				<h5 class="name">
				<span style="color:Red;"><?php echo $row["Product_Name"];?></span>
				</h5>
				<p class="price-container">
					<span>Only at store: <?php echo $row["Shop_ID"] ;?> Contact to order</span>
				</p> 
				<p class="price-container">
					<span>Price: <?php echo $row["Price"],'$';  ?></span>
				</p> 
				<p>
					<span><?php echo $row["SmallDesc"]?></span>
				</p>
		</div>
		<div class="description">
		<?php echo $row["DetailDesc"]; ?>
		</div>
		
	</div>
</div>
</div>

