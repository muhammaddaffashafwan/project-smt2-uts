<?php
require_once "../database/dbkoneksi.php"
?>
<?php
$sql = "SELECT * FROM motor";
$rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Shop Homepage - Start Bootstrap Template</title>
		<!-- Favicon-->
		<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
		<!-- Bootstrap icons-->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
			rel="stylesheet"
		/>
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="css/styles.css" rel="stylesheet" />
	</head>
	<body>
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container px-4 px-lg-5">
				<a class="navbar-brand" href="#!">TOKO SEPEDA MOTOR</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#!">Home</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="#!">About</a></li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								id="navbarDropdown"
								href="#"
								role="button"
								data-bs-toggle="dropdown"
								aria-expanded="false"
								>Shop</a
							>
							
						</li>
					</ul>
					<form class="d-flex">
						<button class="btn btn-outline-dark" type="submit">
							<i class="bi-cart-fill me-1"></i>
							Cart
							<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
						</button>
					</form>
				</div>
			</div>
		</nav>
		<!-- Header-->
		<header class="bg-dark py-5">
			<div class="container px-4 px-lg-5 my-5">
				<div class="text-center text-white">
					<h1 class="display-4 fw-bolder">Motor Shop</h1>
					<p class="lead fw-normal text-white-50 mb-0">Menjual Berbagai Produk Motor</p>
				</div>
			</div>
		</header>
		<!-- Section-->
		<section class="py-5">
			<div class="container px-4 px-lg-5 mt-5">
				<div
					class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
				>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="assets/supra_fit.png"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<a style="text-decoration:none" href="../backend/form_pesanan.php"><h5 class="fw-bolder">Honda Supra Fit 2004</h5></a>
									<!-- Product price-->
									Rp. 5.000.000
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="assets/beat.png"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<a style="text-decoration:none" href="../backend/form_pesanan.php"><h5 class="fw-bolder">Beat 2012</h5></a>
									<!-- Product price-->
									Rp. 8.000.000
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="assets/f1z_110.png"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<a style="text-decoration:none" href="../backend/form_pesanan.php"><h5 class="fw-bolder">Yamaha F1Z 110</h5></a>
									<!-- Product price-->
									Rp.2.500.000
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="assets/suzuki_gsx-r150.png"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<a style="text-decoration:none" href="../backend/form_pesanan.php"><h5 class="fw-bolder">Suzuki GSX-R150</h5></a>
									<!-- Product price-->
									Rp.35.000.000
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer-->
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">
				Copyright &copy; Your Website 2023
				</p>
			</div>
		</footer>
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="js/scripts.js"></script>
	</body>
</html>
