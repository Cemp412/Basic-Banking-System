<!DOCTYPE html>
<html>
<head>
	<title>Basic Banking System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- Data Table -->
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js" charset="utf-8"></script>
  <!-- Bootstrap  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include('config.php') ?>
	<section id="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <div class="container-fluid">
             <a class="navbar-brand text-light" href="index.php">TSF Bank</a>
             <button class="navbar-toggler btn btn-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">

                     <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                     <a class="nav-link text-light" href="transfermoney.php">Send Money</a>
                     <a class="nav-link text-light" href="transactionhistory.php">Transaction History</a> 
                  </div>
              </div>
          </div>
       </nav>
	</section>

