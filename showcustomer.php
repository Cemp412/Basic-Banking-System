<?php @include('header.php') ?>
<?php 
if(isset($_GET['id']) && !empty(trim($_GET['id']))){
	 $show ="SELECT * FROM user WHERE id= ?";
	 if($customer = mysqli_prepare($con, $show)){
	 	 // Bind variables to the prepared statement as parameters
         mysqli_stmt_bind_param($customer, "i", $param_id);
        
         // Set parameters
         $param_id = trim($_GET["id"]);
         // Attempt to execute the prepared statement
         if(mysqli_stmt_execute($customer)){
             $result = mysqli_stmt_get_result($customer);
             if(mysqli_num_rows($result) == 1){
            	 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            	 $id = $row["id"];
            	 $name = $row["name"];
            	 $email = $row["email"];
            	 $current_balance = $row["currentbalance"];
                }else{
            	 header("location :viewcustomer.php");
            	 exit();
                }
            }else{
               echo "Oops! Something went wrong. Please try again later.";
            }
    
    // Close connection
     mysqli_close($con);
    } else{
      // URL doesn't contain id parameter. Redirect to error page
       header("location: viewcustomer.php");
       exit();
}
} 

?>

<!-- Show Customer -->
<title>Show Customers Details</title>
<div class="table pt-3">
	<table class="table table-striped table-bordered"  id="userTable">
		<thead class="text-center bg-dark text-white">
			<th scope="col">Id</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Current Balance</th>
			<th scope="col">Action</th>
		</thead>
		<tr>
			<td class="text-center"><?php echo $row['id'] ?></td>
			<td class="text-center"><?php echo $row['name'] ?></td>
			<td class="text-center"><?php echo $row['email'] ?></td>
			<td class="text-center"><?php echo $row['currentbalance'] ?></td>
			 <td class="text-center">
                <a href="selecteduserdetail.php?id= <?php echo $row['id']; ?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transfer</button></a>
            </td>
	    </tr>
	</table>
</div>