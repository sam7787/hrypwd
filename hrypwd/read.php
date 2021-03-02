<?php 
	require 'database.php';
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: index.php");
	} else {
		
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM camp_donor_information where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		Database::disconnect();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'navbar.php';?>



    <div class="container">    
		<div class="span10 offset1">
			<div class="row">
    			<h3>Donor Data</h3>
    		</div>
    		
			<div class="form-horizontal" >
			  <div class="control-group">
			    <label class="control-label">Donor Name</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['name_of_donor'];?>
				    </label>
			    </div>
			  </div>

			  <div class="control-group">
			    <label class="control-label">Address of Donor</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['address_of_donor'];?>
				    </label>
			    </div>
			  </div>


			  <div class="control-group">
			    <label class="control-label">City</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['city'];?>
				    </label>
			    </div>
			  </div>



			  <div class="control-group">
			    <label class="control-label">State</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['state'];?>
				    </label>
			    </div>
			  </div>



			  <div class="control-group">
			    <label class="control-label">PinCode</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['pin_code'];?>
				    </label>
			    </div>
			  </div>

			  <div class="control-group">
			    <label class="control-label">Date of Birth</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['date_of_birth'];?>
				    </label>
			    </div>
			  </div>



			  <div class="control-group">
			    <label class="control-label">Contact Number</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['mobile_number'];?>
				    </label>
			    </div>
			  </div>

			  

			  <div class="control-group">
			    <label class="control-label">Email Id of donor</label>
			    <div class="controls">
				    <label class="checkbox">
				     	<?php echo $data['email_id'];?>
				    </label>
			    </div>
			  </div>

			    <div class="form-actions">
				  <a class="btn" href="index.php">Back</a>
			   </div>					 
			</div>
		</div>				
    </div> <!-- /container -->
  </body>
</html>