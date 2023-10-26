<div class="container">
        <div class="row d-flex justify-content-center align-items-center p-3">
    </div>
</div>
</div>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <?php include_once("connection.php") ?>
    <script language="javascript">
        function deleteConfirm(){
            if(confirm("Are you sure to delete!")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    
        <form name="frm" method="post" action="">
        <table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<tbody>
            <?php
        include_once("connection.php");
        if(isset($_GET["function"])=="del"){
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                $sq = " select Pro_image from product WHERE Product_ID='$id'";
                $res = mysqli_query($conn, $sq);
                $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                $short = $row['SmallDesc'];
                $filePic = $row['Pro_image'];
                unlink("product-imgs/".$filePic);
                mysqli_query($conn, "DELETE FROM product WHERE Product_ID='$id'");
               echo '<meta http-equiv="refresh" content="0;URL=index.php?page=product_management"/>';
            }
        }
    ?>
               <?php
				$No = 1;
                $result = mysqli_query($conn, "SELECT Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name,DetailDesc, SmallDesc
                FROM product a, category b
                WHERE a.Cat_ID = b.Cat_ID ORDER BY ProDate DESC");

                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>
             <div class="col-md-4">
                    <div class="card">
                    <img src='product-imgs/<?php echo $row['Pro_image']?>' alt="200*200" class="img-responsive"> 
                        <div class="card-body">
                        <h5 class="name">
                        <h2><a href="?page=details&&id=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
						</h5>
						<p class="price-container">
							<span><?php echo $row["Price"],'$';  ?></span>
						</p>
                        </div>
                    </div>
            </div>

        </div>
        </div>
        <?php
               $No++;
                }
			?>
			</tbody>
        
        </table>  

 </form>