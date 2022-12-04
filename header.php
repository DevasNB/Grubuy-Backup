<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Grubuy</title>

	<link rel="shortcut icon" type="image/x-icon" href="/imagens/grubuy5.png"/>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="/imagens/grubuy5.png" width="80px" class="ms-2" href="#">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	  <a class="button btn-success">Login</a>
    </ul>
  </div>
</nav>-->
	<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 style-border2">
		<div class="container-fluid">
			<img src="/imagens/grubuy5.png" width="80px" href="index.php">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class=" collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase bold active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase bold" href="products.php">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase bold" href="#">Catalog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase bold" href="groups.php">Groups</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2 text-uppercase bold" href="about.php">About</a>
					</li>
				</ul>
				<form class="form-inline ms-auto">
					<div class="input-group style-border4">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><embed src="/imagens/icons/search.svg" /></span>
						</div>
						<input type="text" class="form-control style-border4" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
					</div>
				</form>
				<ul class="navbar-nav ms-auto">
					<?php
					if(isset($_SESSION["userName"])) {
						echo '<li class="nav-item">
								<a class="nav-link mx-2 text-uppercase" href="mycart.php"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
							  </li>
							  <a class="nav-link mx-2 text-uppercase" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Account
					  		  </a>
							  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">My Account</a></li>
								<li><a class="dropdown-item" href="#">Settings</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item text-danger" href="#">Logout</a></li>
							  </ul>';
					}
					else {
						echo '<li class="nav-item">
								<a class="nav-link mx-2 text-uppercase" href="login.php"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
					  		  </li>
						      <li class="nav-item">
								<a class="nav-link mx-2 text-uppercase bold" href="login.php"><i class="fa-solid fa-circle-user me-1"></i> Login</a>
							  </li>';
					}
					?>
				</ul>
			</div>
		</div>
	</nav>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>