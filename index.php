<?php @include('header.php') ?>

<div id="banner">
	<div class="row">
		<div class="col-md-12">
			<h1 class="display-1 text-white text-bold text-uppercase bank" href="index.php"> TSF Bank</h1>
		</div>
		
	</div>
</div>
<div class="container-fluid">
	<div class="card-group pt-3">
      <div class="card">
         <img src="images/customers.png" class=" img-rounded img-thumbnail card-img-top" alt="customers.png" style="height:40%;">
         <div class="card-body">
             <button type="button" class="btn btn-success"><a class="text-white text-decoration-none" href="transfermoney.php">View All Customers</a></button>
         </div>
       </div>
       <div class="card">
          <img src="images/sendmoney.jpg" class="card-img-top img-rounded img-thumbnail" alt="sendmoney.jpg" style="height:40%;">
          <div class="card-body">
             <button type="button" class="btn btn-primary"><a class="text-white text-decoration-none" href="transfermoney.php">Send Money</a></button>
          </div>
       </div>
       <div class="card">
          <img src="images/transact.jpg" class="img-rounded img-thumbnail card-img-top" alt="transact.jpg" style="height:40%;">
          <div class="card-body">
             <button type="button" class="btn btn-danger"><a class="text-white text-decoration-none" href="transactionhistory.php">Transaction Records</a></button>
         </div>
       </div>
   </div>
</div>

<?php @include('footer.php') ?>