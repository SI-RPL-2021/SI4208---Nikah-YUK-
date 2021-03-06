
<?php 
	session_start();
	include '../controller/function.php';
		
	$itungcust = mysqli_query($conn,"select count(userid) as jumlahcust from login where role='Member'");
	$itungcust2 = mysqli_fetch_assoc($itungcust);
	$itungcust3 = $itungcust2['jumlahcust'];
	
	$itungorder = mysqli_query($conn,"select count(idcart) as jumlahorder from cart where status not like 'Selesai' and status not like 'Canceled'");
	$itungorder2 = mysqli_fetch_assoc($itungorder);
	$itungorder3 = $itungorder2['jumlahorder'];
	
	$itungtrans = mysqli_query($conn,"select count(orderid) as jumlahtrans from konfirmasi");
	$itungtrans2 = mysqli_fetch_assoc($itungtrans);
	$itungtrans3 = $itungtrans2['jumlahtrans'];
	
	?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel - Tokopekita</title>

<?php
session_start();
include '../controller/function.php';

$itungcust = mysqli_query($conn, "select count(userid) as jumlahcust from login where role='Member'");
$itungcust2 = mysqli_fetch_assoc($itungcust);
$itungcust3 = $itungcust2['jumlahcust'];

$itungorder = mysqli_query($conn, "select count(idcart) as jumlahorder from cart where status not like 'Selesai' and status not like 'Canceled'");
$itungorder2 = mysqli_fetch_assoc($itungorder);
$itungorder3 = $itungorder2['jumlahorder'];

$itungtrans = mysqli_query($conn, "select count(orderid) as jumlahtrans from konfirmasi");
$itungtrans2 = mysqli_fetch_assoc($itungtrans);
$itungtrans3 = $itungtrans2['jumlahtrans'];

$pembayaran = mysqli_query($conn, "select count(no) as jumlah from pembayaran");
$pembayaran2 = mysqli_fetch_assoc($pembayaran);
$pembayaran3 = $pembayaran2['jumlah'];

$loker = mysqli_query($conn, "select count(id) as jumlahloker from loker");
$loker2 = mysqli_fetch_assoc($loker);
$loker3 = $loker2['jumlahloker'];

$produk = mysqli_query($conn, "select count(idproduk) as jumlahproduk from produk");
$produk2 = mysqli_fetch_assoc($produk);
$produk3 = $produk2['jumlahproduk'];

$kategori = mysqli_query($conn, "select count(idkategori) as jumlahkategori from kategori");
$kategori2 = mysqli_fetch_assoc($kategori);
$kategori3 = $kategori2['jumlahkategori'];

$testimoni = mysqli_query($conn, "select count(id) as jumlahtestimoni from testimoni");
$testimoni2 = mysqli_fetch_assoc($testimoni);
$testimoni3 = $testimoni2['jumlahtestimoni'];



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nikah-YUK!</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
	

    <link rel="stylesheet" href="assets/css/drilldown_chart.css">


    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    

    <!-- Pie chart js -->
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Reporting Chart Nikah-YUK!"
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##\"\"",
                    indexLabel: "{label} {y}",
                    dataPoints: [{
                            y: [<?php echo $pembayaran3 ?>],
                            label: "Total transaksi"
                        },
                        {
                            y: [<?php echo $itungcust3 ?>],
                            label: "Jumlah Pelanggan"
                        },
                        {
                            y: [<?php echo $loker3 ?>],
                            label: "Jumlah Applicant"
                        },
                        {
                            y: [<?php echo $produk3 ?>],
                            label: "Jumlah Produk"
                        },
                        {
                            y: [<?php echo $kategori3 ?>],
                            label: "Jumlah Kategori"
                        },
                        {
                            y: [<?php echo $testimoni3?>],
                            label: "Jumlah Testimoni"
                        }

                    ]
                }]
            });
            chart.render();

        }
    </script>

    



</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
        
							<li class="active"><a href="index.php"><span>Home</span></a></li>
							<li><a href="../"><span>Kembali ke Toko</span></a></li>
							<li>
                                <a href="manageorder.php"><i class="ti-dashboard"></i><span>Kelola Pesanan</span></a>
                            </li>
							<li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Toko
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="kategori.php">Kategori</a></li>
                                    <li><a href="produk.php">Produk</a></li>
									<li><a href="pembayaran.php">Metode Pembayaran</a></li>
                                </ul>
                            </li>
							<li><a href="customer.php"><span>Kelola Pelanggan</span></a></li>
							<li><a href="user.php"><span>Kelola Staff</span></a></li>
                            <li>
                                <a href="../controller/logout.php"><span>Logout</span></a>
                                
                            </li>
                            

                            <li>
                                <p>&nbsp;&nbsp;&nbsp;<img src="../img/logo1.png" alt="" width="250px" height="100px"></p>
                            </li>
                            <br>
                            <li class="active"><a href="index.php"><i class="ti-home"></i><span>Home</span></a></li>
                            <li><a href="../view/user/Welcome_page.php"><i class="ti-arrow-left"></i><span>Kembali ke Toko</span></a></li>
                            <li>
                                <a href="manageorder.php"><i class="ti-dashboard"></i><span>Kelola Pesanan</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Toko
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="kategori.php"><i class="ti-view-list-alt"></i>&nbsp;&nbsp; Kategori</a></li>
                                    <li><a href="produk.php"><i class="ti-package"></i>&nbsp;&nbsp; Produk</a></li>
                                    <li><a href="pembayaran.php"><i class="ti-credit-card"></i>&nbsp;&nbsp; Metode Pembayaran</a></li>
                                </ul>
                            </li>
                            <li><a href="customer.php"><i class="ti-user"></i><span> Daftar Pelanggan</span></a></li>
                            <li><a href="user.php"><i class="ti-user"></i><span>Kelola Staff</span></a></li>
                            <li>
                                <a href="../controller/logout.php"><i class="ti-power-off"></i><span>Logout</span></a>

                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
        
                            <li><h3><div class="date">
								<script type='text/javascript'>
						//<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>

                            <li>
                                <h3>
                                    <div class="date">
                                        <script type='text/javascript'>
                                            //<!--
                                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                            var date = new Date();
                                            var day = date.getDate();
                                            var month = date.getMonth();
                                            var thisDay = date.getDay(),
                                                thisDay = myDays[thisDay];
                                            var yy = date.getYear();
                                            var year = (yy < 1000) ? yy + 1900 : yy;
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                            //-->
                                        </script></b>
                                    </div>
                                </h3>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        
			
			
			<!-- header area end -->
			<?php 
			/*



            <!-- header area end -->
            <?php
            /*

				$periksa_bahan=mysqli_query($conn,"select * from stock_brg where stock <10");
				while($p=mysqli_fetch_array($periksa_bahan)){	
					if($p['stock']>=1){	
						?>	
						<script>
							$(document).ready(function(){
								$('#pesan_sedia').css("color","white");
								$('#pesan_sedia').append("<i class='ti-flag'></i>");
							});
						</script>
						<?php
						echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>Stok  <strong><u>".$p['nama']. "</u> <u>".($p['jenis'])."</u></strong> yang tersisa kurang dari 10</div>";		
					}
				}
				
				*/
                
				?>
			
            
            <!-- page title area end -->
            <div class="main-content-inner">
			
                

            ?>
            <!-- market value area start -->
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h2>Selamat Datang</h2>
                            </div>
                            <div class="market-status-table mt-4">
                                Anda masuk sebagai <strong><?php echo $_SESSION['name'] ?></strong>
                                <br>
                                <p>Pada halaman admin, Anda dapat menambah kategori produk, mengelola produk,
                                    mengelola user dan admin, melihat konfirmasi pembayaran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- page title area end -->
            <div class="main-content-inner">



                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pelanggan</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php echo $itungcust3 ?></h1>
                                    </div>
                
									</div>
                            </div>
                        </div>
                        

                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pesanan</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php echo $itungorder3 ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                
						<div class="col-md-4">

                        <div class="col-md-4">

                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-link"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Konfirmasi Pembayaran</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php echo $itungtrans3 ?></h1>
                                    </div>
                
									<!--
									<button type="button" class="<?php 
									if($itungtrans3==0){
										echo 'btn btn-secondary btn-block';
									} else {
										echo 'btn btn-primary btn-block';
									}
									?>

                                    <!--
									<button type="button" class="<?php
                                                                    if ($itungtrans3 == 0) {
                                                                        echo 'btn btn-secondary btn-block';
                                                                    } else {
                                                                        echo 'btn btn-primary btn-block';
                                                                    }
                                                                    ?>

									">Lihat Transaksi</button>
									-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                                    
                
                
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Selamat Datang</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    Anda masuk sebagai <strong><?php echo $_SESSION['name'] ?></strong>
									<br>
									<p>Pada halaman admin, Anda dapat menambah kategori produk, mengelola produk, 
									mengelola user dan admin, melihat konfirmasi pembayaran</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                



                <!-- overview area end -->

                <!-- pie chart -->
                <div id="chartContainer" style="height: 470px; width: 100%;"></div>





                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
                                                                    
		
		
		
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>by Richard's Lab</p>




        <!-- footer area start-->
        <footer>
            <div class="footer-area">


            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];

        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];

    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
                                                                    
</body>

</html>


    <!-- Script Pie chart -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <!-- Script Pie Chart 2 -->
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    


</body>


</html>

