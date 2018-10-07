<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Staff</title>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/navfooter.css">
<style type="text/css">
	
	.f3{
		margin-top: 100px;
	}

	.tab-content{
		margin-top: 100px;
	}

	.tab-content button{
		width: 200px;
	}

	.fa-check-square , .fa-plus-square, .fa-minus-square{
		color: lightblue;
		font-size: 4.2rem;
		padding-right: 10px;
	}
</style>
</head>
<body>
<div class="container-fluid f3">
	<!-- <ul class="nav nav-tabs nav-fill">
		<li class="nav-item"><a class="nav-link active">Home</a></li>
		<li class="nav-item"><a class="nav-link">Menu1</a></li>
		<li class="nav-item"><a class="nav-link">Menu2</a></li>
		<li class="nav-item"><a class="nav-link">Menu3</a></li>
	</ul> -->
<nav>
  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-stock-tab" data-toggle="tab" href="#nav-stock" role="tab" aria-controls="nav-stock" aria-selected="true">Stock</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-supplier" role="tab" aria-controls="nav-supplier" aria-selected="false">Supplier</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-orders" role="tab" aria-controls="nav-orders" aria-selected="false">Orders</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-stock" role="tabpanel" aria-labelledby="nav-stock-tab">

  <p><i class="fa fa-check-square"></i><button type="submit" name="viewstock" class="btn btn-outline-dark btn-lg">View Stock</button></p>
  
  <p><i class="fa fa-plus-square"></i><button class="btn btn-outline-dark btn-lg">Add Stock</button></p>
  <p><i class="fa fa-minus-square"></i><button class="btn btn-outline-dark btn-lg">Remove Stock</button></p>

  </div>
  <div class="tab-pane fade" id="nav-supplier" role="tabpanel" aria-labelledby="nav-supplier-tab">
  	<p><i class="fa fa-check-square"></i><button class="btn btn-outline-dark btn-lg">View Supplier</button></p>
  <p><i class="fa fa-plus-square"></i><button class="btn btn-outline-dark btn-lg">Add Supplier</button></p>
  <p><i class="fa fa-minus-square"></i><button class="btn btn-outline-dark btn-lg">Remove Supplier</button></p>
  </div>
  <div class="tab-pane fade" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab">
  	<p><i class="fa fa-check-square"></i><button class="btn btn-outline-dark btn-lg">View Orders</button></p>
</div>

</div>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>				