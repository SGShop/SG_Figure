     <!-- Bootstrap --> 
     <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <?php
    		include_once("connection.php");
			if(isset($_GET["id"]))
			{
				$id = $_GET["id"];
				$result = mysqli_query($conn, "SELECT * FROM shop WHERE Shop_ID='$id'");
				$row = mysqli_fetch_array($result, MYSQLI_BOTH);
				$shop_id = $row['Shop_ID'];
				$shop_name = $row['Shop_Name'];
				$add = $row['Address'];
			
	?>
<div class="container">
	<h2>Updating Shop</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Shop ID(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Shop ID" readonly 
								  value='<?php echo $shop_id; ?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Shop Name(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Shop Name" 
								  value='<?php echo $shop_name; ?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Address(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Address" 
								  value='<?php echo $add; ?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit" style="background-color:#99C4D2;color:red" class="btn btn-primary" name="btnUpdate" id="btnUpdate" value="Update"/>
                              <input type="button"style="background-color:#99C4D2;color:red" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='index.php?page=category_management'" />	
						</div>
					</div>
				</form>
	</div>
    <?php
			}
			else{
				echo'<meta http-equiv="refresh" content="0;URL=index.php?page=shop_management"/>';
			}
	?>


	<?php
	if(isset($_POST["btnUpdate"]))
	{
		$id = $_POST["txtID"];
		$name = $_POST["txtName"];
		$add = $_POST["txtAdd"];
		$err="";
		if($name=="")
		{
			$err.="<li>Enter Shop Name,please</li>";
		}
		if($err!="")
		{
			echo "<ul>$err</ul>";
		}
		else{
			$sq="SELECT * FROM shop WHERE Shop_ID != '$id' and Shop_Name='$name'";
			$result = mysqli_query($conn,$sq);
			if(mysqli_num_rows($result)==0)
			{
				mysqli_query($conn, "UPDATE shop SET Shop_Name = '$name', Address='$add' WHERE Shop_ID='$id'");
				echo '<meta http-equiv="refresh" content="0;URL=index.php?page=shop_management"/>';
			}
			else{
				echo "<li>Dulicate Shop Name</li>";
			}
		}

	}
    ?>
      