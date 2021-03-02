
<?php include 'includes/header.php';?>
<?php include 'navbar.php';?>

<div class="container-fluid main">


            <div class="col-lg-12 cus-outer-div">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cus-tabs-div">
                    
     <div class="container-fluid">
		 
      <div class="row align-items-center">
          <div class="col-md-1"></div>
         <div class="col-md-10">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <center>
                           <i class="fa fa-medkit fa-5x"></i>
                        </center>
                     </div>
                  </div>
          
            <div id="UpdatePanel1">
	
                   
                  <div class="row">
                     <div class="col">
                        <center>
                           <h4><b>New Patient Registration</b></h4>
                          
                        </center>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <hr>
                     </div>
                  </div>
                  <div class="row">

				  <a href="create.php" class="btn btn-success">Create</a>
                     <table class="table table-striped table-bordered">
		              <thead>
		                <tr>
		                  <th>Name</th>		                  
		                  <th>Action</th>
		                </tr>
		              </thead>
		              <tbody>
		              <?php 
					   include 'database.php';
					  
					   $sql = 'SELECT * FROM camp_donor_information ORDER BY id DESC';
	 				   foreach ($pdo->query($sql) as $row) {
						   		echo '<tr>';
							   	echo '<td>'. $row['name_of_donor'] . '</td>';
							   	echo '<td width=250>';
							   	echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
							   	echo '</td>';
							   	echo '</tr>';
					   }
					   Database::disconnect();
					  ?>
				      </tbody>
	            </table>
                  </div>
                  
                     
</div>
               </div>
            </div>
           
         </div>
          <div class="col-md-1"></div>
      </div>
   </div>

                </div>
            </div>

        </div>

	<!-- Container end here	 -->


    
  </body>
</html>