<?php


error_reporting(0);

session_start();
include '../../controller/function.php';

$idproduk = $_GET['idproduk'];

if (isset($_POST['addprod'])) {
	if (!isset($_SESSION['log'])) {
		header('location:login.php');
	} else {
		$ui = $_SESSION['userid'];
		$cek = mysqli_query($conn, "select * from cart where userid='$ui' and status='Cart'");
		$liat = mysqli_num_rows($cek);
		$f = mysqli_fetch_array($cek);
		$orid = $f['orderid'];

		//kalo ternyata udeh ada order id nya
		if ($liat > 0) {

			//cek barang serupa
			$cekbrg = mysqli_query($conn, "select * from detailorder where idproduk='$idproduk' and orderid='$orid'");
			$liatlg = mysqli_num_rows($cekbrg);
			$brpbanyak = mysqli_fetch_array($cekbrg);
			$jmlh = $brpbanyak['qty'];

			//kalo ternyata barangnya ud ada
			if ($liatlg > 0) {
				$i = 1;
				$baru = $jmlh + $i;

				$updateaja = mysqli_query($conn, "update detailorder set qty='$baru' where orderid='$orid' and idproduk='$idproduk'");

				if ($updateaja) {
					echo " <div class='alert alert-success'>
								Barang sudah pernah dimasukkan ke keranjang, jumlah akan ditambahkan
							  </div>
							  <meta http-equiv='refresh' content='1; url= product.php?idproduk=" . $idproduk . "'/>";
				} else {
					echo "<div class='alert alert-warning'>
								Gagal menambahkan ke keranjang
							  </div>
							  <meta http-equiv='refresh' content='1; url= product.php?idproduk=" . $idproduk . "'/>";
				}
			} else {

				$tambahdata = mysqli_query($conn, "insert into detailorder (orderid,idproduk,qty) values('$orid','$idproduk','1')");
				if ($tambahdata) {
					echo " <div class='alert alert-success'>
								Berhasil menambahkan ke keranjang
							  </div>
							<meta http-equiv='refresh' content='1; url= product.php?idproduk=" . $idproduk . "'/>  ";
				} else {
					echo "<div class='alert alert-warning'>
								Gagal menambahkan ke keranjang
							  </div>
							 <meta http-equiv='refresh' content='1; url= product.php?idproduk=" . $idproduk . "'/> ";
				}
			};
		} else {

			//kalo belom ada order id nya
			$oi = crypt(rand(22, 999), time());

			$bikincart = mysqli_query($conn, "insert into cart (orderid, userid) values('$oi','$ui')");

			if ($bikincart) {
				$tambahuser = mysqli_query($conn, "insert into detailorder (orderid,idproduk,qty) values('$oi','$idproduk','1')");
				if ($tambahuser) {
					echo " <div class='alert alert-success'>
								Berhasil menambahkan ke keranjang
							  </div>
							<meta http-equiv='refresh' content='1; url= product.php?idproduk=" . $idproduk . "'/>  ";
				} else {
					echo "<div class='alert alert-warning'>
								Gagal menambahkan ke keranjang
							  </div>
							 <meta http-equiv='refresh' content='1; url= product.php?idproduk=" . $idproduk . "'/> ";
				}
			} else {
				echo "gagal bikin cart";
			}
		}
	}
};
?>

<!DOCTYPE html>
<html>

<head>
	<title>Nikah-YUK!</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tokopekita, Richard's Lab" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="assets/js/move-top.js"></script>
	<script type="text/javascript" src="assets/js/easing.js"></script>

	<!-- start-smoth-scrolling -->
	<link rel="stylesheet" type="text/css" href="../../style/blog_page.css">
	<link rel="stylesheet" type="text/css" href="../../style/landing_page.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<?php
	$p = mysqli_fetch_array(mysqli_query($conn, "Select * from produk where idproduk='$idproduk'"));

	?>
	<section style="height:100%; width: 100%; box-sizing: border-box; background-color: #FFFFFF">
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

			.modal-header-2-2.modal {
				top: 2rem;
			}
		</style>
		<div class="header-2-2" style="font-family: 'Poppins', sans-serif;">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a href="#">
					<img style="margin-right:0.75rem" src="../../img/logo1.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-header-2-2">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="modal-header-2-2 modal fade" id="targetModal-header-2-2" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel-header-2-2" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-header-2-2">
							<div class="modal-header" style="padding:	2rem; padding-bottom: 0;">
								<a class="modal-title" id="targetModalLabel-header-2-2">
									<img style="margin-top:0.5rem" src="" alt="">
								</a>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								</button>
							</div>

						</div>
					</div>
				</div>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo-header-2-2">
					<ul class="navbar-nav me-auto mt-1 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="Welcome_page.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Faq_user.php">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="tutorial_user.php">Tutorial</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="Blog_user.php">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="loker_user.php">Loker</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Konsultasi_user.php">Consultation</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="testimoni_user.php">Testimoni</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="service_user.php">Services</a>
						</li>
					</ul>
					<?php
					if (!isset($_SESSION['log'])) {
					} else {

						if ($_SESSION['role'] == 'Member') {
							echo '

                    <a href="profile_user.php"><button class="btn btn-default btn-no-fill-header-4-2">Hi!, ' . $_SESSION['name'] . ' </button></a>

                   

					<a href="../../controller/logout.php"><button class="btn btn-fill-header-4-2 bg-danger">Logout</button></a>
					';
						} else {
							echo '

                    <a href="../../admin/index.php"><button class="btn btn-default btn-no-fill-header-4-2">Hi!, ' . $_SESSION['name'] . ' </button></a>

                   

					<a href="../../controller/logout.php"><button class="btn btn-fill-header-4-2 bg-danger">Logout</button></a>
					';
						};
					}
					?>
				</div>
			</nav>
		</div>




		<div class="container">
			<!-- //breadcrumbs -->
			<!--- beverages --->
			<div class="products">
				<div class="container">
					<div class="agileinfo_single">

						<div class="col-md-4 agileinfo_single_left">
							<img id="example" src="<?php echo $p['gambar'] ?>" alt=" " class="img-responsive">
						</div>

						<div class="col-md-8 agileinfo_single_right">
							<h2><?php echo $p['namaproduk'] ?></h2>
							<div class="rating1">
								<span class="starRating">
									<?php
									$bintang = '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
									$rate = $p['rate'];

									for ($n = 1; $n <= $rate; $n++) {
										echo '<i class="fa fa-star blue-star" aria-hidden="true"></i>';
									};
									?>
								</span>
							</div>
							<div class="w3agile_description">
								<h4>Deskripsi :</h4>
								<p><?php echo $p['deskripsi'] ?></p>
							</div>
							<div class="snipcart-item block">
								<div class="snipcart-thumb agileinfo_single_right_snipcart">
									<h4 class="m-sing">Rp<?php echo number_format($p['hargaafter']) ?> <span>Rp<?php echo number_format($p['hargabefore']) ?></span></h4>
								</div>
								<div class="snipcart-details agileinfo_single_right_details">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="idprod" value="<?php echo $idproduk ?>">
											<input type="submit" name="addprod" value="Add to cart" class="button">
										</fieldset>
									</form>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!--- beverages --->
		</div>



		<!------------------------------------------------------------------------------------------- Footer  ----------------------------------------------------------------------------------------------------------------------->



		</div>

	</section>



	<!-- Bootstrap Core JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- top-header and slider -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 4000,
				easingType: 'linear'
			};


			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- main slider-banner -->
	<script src="js/skdslider.min.js"></script>
	<link href="css/skdslider.css" rel="stylesheet">
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#demo1').skdslider({
				'delay': 5000,
				'animationSpeed': 2000,
				'showNextPrev': true,
				'showPlayButton': true,
				'autoSlide': true,
				'animationType': 'fading'
			});

			jQuery('#responsive').change(function() {
				$('#responsive_wrapper').width(jQuery(this).val());
			});

		});
	</script>
	<!-- //main slider-banner -->
</body>

</html>