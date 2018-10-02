<!-- Navigation -->
<nav class="navbar-expand-md bg-warning">
	<div class="container-fluid logo"><a class="navbar-brand" href="#"><img src="images/logo5.png "></a>
	
	</div>
	<div class="navbar-dark" id="nav-main">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<div class="container1" onclick="myFunction(this)">
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item active"><a class="nav-link" href="#slides">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
				<li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
				<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
				<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
				<?php
					if(isset($_SESSION['curr_id'])) {
						echo '<li class="nav-item"><a class="nav-link" href="#">'.$_SESSION['curr_fname'].'<i class="fa fa-user-circle"></i></a></li>';						
					}
					else{						
						echo '<li class="nav-item"><a class="nav-link" href="#">User<i class="fa fa-user-circle"></i></a></li>';
					}
				?>
				<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i></a></li>
				<li>
					<form class="form-container" id="search">
						<div class="form-row">
							<div class="col">
                 			<input type="text" class="form-control" placeholder="Search">
                 		</div>
                 			<div class="col">
                			<button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                		</div>
                		</div>
      				</form>
				</li>
			</ul>
		</div>		
	</div>
</nav>

<script type="text/javascript">function myFunction(x) {
    x.classList.toggle("change");
}
</script>