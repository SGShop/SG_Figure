     <!-- Bootstrap --> 
     <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	    
	<?php
	include_once("connection.php");
	if(isset($_POST["btnAdd"]))
	{
		$id = $_POST["txtID"];
		$name = $_POST["txtName"];
		$add = $_POST["txtDes"];
		$err="";
		if($id==""){
			$err.="<li>Enter Shop ID, please</li>";
		}
		if($name==""){
			$err.="<li>Enter Shop Name, please</li>";
		}
		if($err!=""){
			echo "<ul>$err</ul>";
		}
		else{
			$sq="SELECT * FROM shop WHERE Shop_ID='$id' or Shop_Name='$name'";
			$result = mysqli_query($conn,$sq);
			if(mysqli_num_rows($result)==0)
			{
				mysqli_query($conn, "INSERT INTO shop (Shop_ID, Shop_Name, Address)
				VALUES ('$id','$name','$add')");
				echo '<meta http-equiv="refresh" content="0;URL=index.php?page=shop_management"/>';
			}
			else
			{
				echo"<li>Dulicate shop ID or Name</li>";
			}
		}
	}
	?>

<div class="container">
	<h2>Adding Shop</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Shop ID(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Shop ID" value='<?php echo isset($_POST["txtID"])?($_POST["txtID"]):"";?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Shop Name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Shop Name" value='<?php echo isset($_POST["txtName"])?($_POST["txtName"]):"";?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Address(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Address" value='<?php echo isset($_POST["txtDes"])?($_POST["txtDes"]):"";?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnAdd" id="btnAdd" value="Add new"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='index.php'" />
                              	
						</div>
					</div>
				</form>
	</div>