<?php
   @session_start();
        if(isset($_SESSION['admin']) && $_SESSION["admin"]==0)
        {
   ?>
   <!-- Bootstrap --> 
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
    <?php
include_once("connection.php");
if (isset($_GET["function"]) && $_GET["function"] == 'del') {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $query = "SELECT COUNT(*) FROM product WHERE Shop_ID='$id'";
        $result = mysqli_query($conn, $query);
        $productCount = mysqli_fetch_row($result)[0];

        if ($productCount == 0) {
            mysqli_query($conn, "DELETE FROM shop WHERE Shop_ID='$id'");
            echo '<meta http-equiv="refresh" content="0;URL=index.php?page=shop_management"/>';
        } else {
            echo '<script>alert("This shop has products, so you can\'t delete it.");</script>';
            echo '<meta http-equiv="refresh" content="0;URL=index.php?page=shop_management"/>';
        }
    }
}
?>
        <form name="frm" method="post" action="">
        <h1>Shop Management</h1>
        <p>
        <img src="images/add.png" alt="Add new" width="16" height="16" border="0" /> <a href="?page=add_shop"  style="background-color:#99C4D2;color:red"> Add</a>
        </p>
        <table id="tableshop" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Shop Name</strong></th>
                     <th><strong>Address</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
                <?php
                include_once("connection.php");
                $No=1;
                $result=mysqli_query($conn, "SELECT * FROM shop");
                while($row=mysqli_fetch_array($result, MYSQLI_BOTH))
                {
                ?>
			<tr>
              <td class="cotCheckBox"><?php echo $No; ?></td>
              <td><?php echo $row["Shop_Name"];?></td>
              <td><?php echo $row["Address"];?></td>
              <td style='text-align:center'><a href="?page=update_shop&&id=<?php echo $row["Shop_ID"]; ?>"><img src='images/edit.png' border='0'/><a></td>
              <td style='text-align:center'><a href="Shop_Management.php?function=del&&id=<?php echo $row["Shop_ID"];?>" onclick="return deleteConfirm()"><img src='images/delete.png' border='0'/></a></td>

            </tr>
            <?php
            $No++;
                }
            ?>
			</tbody>
        </table>  
        
        
        <!--Nút Thêm mới , xóa tất cả-->
        <div class="row" style="background-color:#FFF"><!--Nút chức nang-->
            <div class="col-md-12">
            	
            </div>
        </div><!--Nút chức nang-->
 </form>
   <?php
        }
        else{
            echo"<script>alert('You are not administrator')</script>";
            echo'<meta http-equiv="refresh" content="0;URL=index.php"/>';
        }
   ?>