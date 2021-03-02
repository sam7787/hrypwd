<?php 
   require 'database.php';
   
   $city = '';
   $state = '';
   $userExists = '';
   if ( !empty($_POST)) {
   	// keep track validation errors
   	$nameError = null;
   	
   	// keep track post values
   	$name_of_donor = $_POST['name_of_donor'];
   	$address_of_donor = $_POST['address_of_donor'];
   	$city = $_POST['city'];
   	$state = $_POST['state'];
   	$pin_code = $_POST['pin_code'];
   	$mobile_number = $_POST['mobile_number'];
   	$date_of_birth = $_POST['date_of_birth'];
   	$email_id = $_POST['email_id'];
   
   	// validate input
   	$valid = true;
   	if (empty($name_of_donor)) {
   		$name_of_donorError = 'Please enter Name';
   		$valid = false;
   	}
   
   	if (empty($address_of_donor)) {
   		$donorAdError = 'Please enter donor address';
   		$valid = false;
   	}
   
   	if (empty($city)) {
   		$cityError = 'Please select city';
   		$valid = false;
   	}
   
   
   	if (empty($state)) {
   		$stateError = 'Please select state';
   		$valid = false;
   	}
   
   	if (empty($pin_code)) {
   		$pin_codeError = 'Please Enter Pincode';
   		$valid = false;
   	}
   
   	if (empty($mobile_number)) {
   		$mobile_numberError = 'Please Enter Contact Number';
   		$valid = false;
   	}
   
   	if (empty($date_of_birth)) {
   		$date_of_birthError = 'Please Enter Contact Number';
   		$valid = false;
   	}
   
   	if (empty($email_id)) {
   		$email_idError = 'Please Enter Email';
   		$valid = false;
   	}
   
   
   // Validation if user exists here	
   	$sql = "SELECT * FROM camp_donor_information where name_of_donor = ?";
   	$q = $pdo->prepare($sql);
   	$q->execute(array($name_of_donor));
   	$data = $q->fetch(PDO::FETCH_ASSOC);
   	if(!empty($data)){
   		$userExists = "Donor Already Exists!";
   	}else{
   
   		// insert data
   		if ($valid) {
   			
   			$sql = "INSERT INTO camp_donor_information(
   					name_of_donor,
   					address_of_donor,
   					city,
   					state,
   					pin_code,
   					date_of_birth,
   					mobile_number,
   					email_id
   					) values (
   						?,
   						?,
   						?,
   						?,
   						?,
   						?,
   						?,
   						?
   						)";
   			$q = $pdo->prepare($sql);
   			$q->execute(array($name_of_donor,$address_of_donor,$city,$state,$pin_code,$date_of_birth,$mobile_number,$email_id));
   			Database::disconnect();
   			header("Location: create.php?success=true");
   		}
   
   	}
   
   }
   ?>
<?php include 'includes/header.php';?>
<?php include 'navbar.php';?>
<div class="container-fluid main">
<!-- Alredy exists error here -->
<div class="control-group <?php echo !empty($name_of_donorError)?'error':'';?>">
   <span class="help-inline alert-danger"><?php echo $userExists;?></span>
</div>
<div class="col-lg-12 cus-outer-div">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cus-tabs-div">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <div class="card">
                  <div class="card-body">
                     <div id="UpdatePanel1">
                        <div class="row">
                           <div class="col">
                              <center>
                                 <i class="fa fa-medkit fa-5x"></i>
                              </center>
                           </div>
                           <div class="col">
                              <center>
                                 <h4><b>New Donor Registration</b></h4>
                              </center>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col">
                              <hr>
                           </div>
                        </div>
                        <?php if(isset($_GET['success'])){ ?>
                        <div class="alert alert-success alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                           <strong>Successfully registered</strong>
                        </div>
                        <?php } ?>		
                        <form method="post" action="#">
                           <div class="row">
                              <div class="col-md-6">
                                 <label>Name of donor</label>
                                 <div class="form-group">
                                    <input name="name_of_donor" type="text"  placeholder="Enter Name of Donor" class="form-control" value="<?php echo !empty($name_of_donor)?$name_of_donor:'';?>">
                                    <?php if (!empty($name_of_donorError)): ?>
                                    <span class="help-inline">*<?php echo $name_of_donorError;?></span>
                                    <?php endif; ?>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group <?php echo !empty($email_idError)?'error':'';?>">
                                    <label class="control-label">Email ID of Donor</label>
                                    <div class="controls">
                                       <input name="email_id" type="email"  placeholder="Enter Email" class="form-control" value="<?php echo !empty($email_id)?$email_id:'';?>">
                                       <?php if (!empty($email_idError)): ?>
                                       <span class="help-inline">*<?php echo $email_idError;?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group <?php echo !empty($date_of_birthError)?'error':'';?>">
                                    <label class="control-label">Date of Birth</label>
                                    <div class="controls">
                                       <input name="date_of_birth" type="date"  placeholder="Enter date of birth" class="form-control" value="<?php echo !empty($date_of_birth)?$date_of_birth:'';?>">
                                       <?php if (!empty($date_of_birthError)): ?>
                                       <span class="help-inline">*<?php echo $date_of_birthError;?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group <?php echo !empty($mobile_numberError)?'error':'';?>">
                                    <label class="control-label">Contact Number</label>
                                    <div class="controls">
                                       <input name="mobile_number" type="number"  placeholder="Enter Contact Number"  class="form-control" value="<?php echo !empty($mobile_number)?$mobile_number:'';?>">
                                       <?php if (!empty($mobile_numberError)): ?>
                                       <span class="help-inline">*<?php echo $mobile_numberError;?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group <?php echo !empty($stateError)?'error':'';?>">
                                    <label class="control-label">State</label>			
                                    <div class="controls">
                                       <select id="state" class="form-control" name="state">
                                          <option value="0" <?php if(!empty($state) && $state == 0){ echo "selected"; } ?> >Select State</option>
                                          <option value="Haryana" <?php if(!empty($state) && $state == 'Haryana'){ echo "selected"; } ?> >Haryana</option>
                                       </select>
                                       <?php if (!empty($stateError)): ?>
                                       <span class="help-inline">*<?php echo $stateError;?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group <?php echo !empty($cityError)?'error':'';?>">
                                    <label class="control-label">City</label>			
                                    <div class="controls">
                                       <select id="city" class="form-control" name="city">
                                          <option value="0" <?php if(!empty($city) && $city == 0){ echo "selected"; } ?> >Select Cith</option>
                                          <option value="Panchkula" <?php if(!empty($city) &&  $city == 'Panchkula'){ echo "selected"; } ?>>Panchkula</option>
                                          <option value="Ambala" <?php if(!empty($city) &&  $city == 'Ambala'){ echo "selected"; } ?>>Ambala</option>
                                       </select>
                                       <?php if (!empty($cityError)): ?>
                                       <span class="help-inline">*<?php echo $cityError;?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group <?php echo !empty($pin_codeError)?'error':'';?>">
                                    <label class="control-label">Pincode</label>
                                    <div class="controls">
                                       <input name="pin_code" type="text" class="form-control" placeholder="Enter Pincode" value="<?php echo !empty($pin_code)?$pin_code:'';?>">
                                       <?php if (!empty($pin_codeError)): ?>
                                       <span class="help-inline">*<?php echo $pin_codeError;?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group <?php echo !empty($donorAdError)?'error':'';?>">
                                    <label class="control-label">Donor Address</label>
                                    <div class="controls">
                                       <textarea name="address_of_donor" class="form-control"><?php echo !empty($address_of_donor)?$address_of_donor:'';?></textarea>
                                       <?php if (!empty($donorAdError)): ?>
                                       <span class="help-inline">*<?php echo $donorAdError;?></span>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-8 mx-auto">
                                 <center>
                                    <div class="form-group">
                                       <input type="submit" class="btn btn-primary btn-block btn-lg" value="Save">
                                       <a class="btn btn-primary btn-block btn-lg" href="index.php">Back</a>
                                 </center>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-1"></div>
            </div>
         </div>
		 <!-- Data detail -->
<div class="table-responsive">
   <div style="overflow-x:auto;width:95%;">
      <div>
         <table cellspacing="0" cellpadding="3" rules="all" hor="" bordercolor="#CCCCCC" id="GridView1" style="background-color:White;border-color:#CCCCCC;border-width:1px;border-style:None;width:100%;border-collapse:collapse;" class="dataTable">
            <tbody>
               <tr style="color:White;background-color:#006699;font-weight:bold;">
                  <th scope="col">&nbsp;</th>
                  <th scope="col">ID</th
                     >
                  <th scope="col">Name of NGO</th>
                  <th scope="col">Address of donor</th>
                  <th scope="col">City</th>
                  <th scope="col">State</th>
                  <th scope="col">Pin code</th>
                  <th scope="col">Date of birth</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col">Email Id of donor</th>
               </tr>
               <?php  
                  $sql = 'SELECT * FROM camp_donor_information ORDER BY id DESC';	
                  foreach ($pdo->query($sql) as $row) { ?>
               <tr style="color:#000066;">
                  <td>  
                     <a class="btn btn-success" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                  </td>
                  <td>  
                     <span id="lbl_ID">3</span>  
                  </td>
                  <td>  
                     <span id="lbl_NGO_name"><?php echo $row['name_of_donor'];?></span>  
                  </td>
                  <td>  
                     <span id="lbl_NGO_emailid"><?php echo $row['address_of_donor'];?></span>  
                  </td>
                  <td>  
                     <span id="lbl_NGO_contact_number"><?php echo $row['city'];?></span>  
                  </td>
                  <td>  
                     <span id="lbl_Pri_contact_person_name"><?php echo $row['state'];?></span>  
                  </td>
                  <td>  
                     <span id="lbl_Pri_person_contact_number"><?php echo $row['pin_code'];?></span>  
                  </td>
                  <td>  
                     <span id="lbl_Pri_person_emailid"><?php echo $row['date_of_birth'];?></span>  
                  </td>
                  <td>  
                     <span id="lbl_ec_contact_person_name"><?php echo $row['mobile_number'];?></span>  
                  </td>
                  <td>  
                     <span id="lbl_Sec_person_contact_number"><?php echo $row['email_id'];?></span>  
                  </td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!-- User detail end here -->
      </div>
	  
   </div>
   
</div>

</body>
</html>