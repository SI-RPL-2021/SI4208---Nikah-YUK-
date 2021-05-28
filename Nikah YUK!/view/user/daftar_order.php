<?php
session_start();
include '../../controller/function.php';

if (!isset($_SESSION['log'])) {
    header('location:login.php');
} else {
};

$uid = $_SESSION['userid'];
$caricart = mysqli_query($conn, "select * from cart where userid='$uid' and status='Cart'");
$fetc = mysqli_fetch_array($caricart);
$orderidd = $fetc['orderid'];
$itungtrans = mysqli_query($conn, "select count(orderid) as jumlahtrans from cart where userid='$uid' and status!='Cart'");
$itungtrans2 = mysqli_fetch_assoc($itungtrans);
$itungtrans3 = $itungtrans2['jumlahtrans'];

if (isset($_POST["update"])) {
    $kode = $_POST['idproduknya'];
    $jumlah = $_POST['jumlah'];
    $q1 = mysqli_query($conn, "update detailorder set qty='$jumlah' where idproduk='$kode' and orderid='$orderidd'");
    if ($q1) {
        echo "Berhasil Update Cart
		<meta http-equiv='refresh' content='1; url= cart_user.php'/>";
    } else {
        echo "Gagal update cart
		<meta http-equiv='refresh' content='1; url= cart_user.php'/>";
    }
} else if (isset($_POST["hapus"])) {
    $kode = $_POST['idproduknya'];
    $q2 = mysqli_query($conn, "delete from detailorder where idproduk='$kode' and orderid='$orderidd'");
    if ($q2) {
        echo "Berhasil Hapus";
    } else {
        echo "Gagal Hapus";
    }
}
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Staff - Tokopekita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Profile template -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link rel="stylesheet" href="assets/css/profile.css">

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


</head>

<body class="profile-page">
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
        <div class="sidebar-menu ">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                            <li>
                                <p>&nbsp;&nbsp;&nbsp;<img src="../../img/logo1.png" alt="" width="250px" height="100px"></p>
                            </li>
                            <br>
                            <li>
                                <a href="Welcome_page.php"><i class="ti-home"></i><span>Home</span></a>
                            </li>
                            <li>
                                <a href="profile_user.php"><i class="ti-user"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <a href="cart_user.php"><i class="ti-shopping-cart"></i><span>Cart</span></a>
                            </li>
                            <li>
                                <a href="daftar_order.php"><i class="ti-package"></i><span>Daftar Order</span></a>
                            </li>
                            <li>
                                <a href="../../controller/logout.php"><i class="ti-power-off"></i><span>Logout</span></a>
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
                            <li>
                                <h3>
                                    <div class="date">
                                        <script type='text/javascript'>
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
                                        </script></b>
                                    </div>
                                </h3>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            
            <!-- checkout -->
            <div class="checkout">
                <div class="container">
                    <h2>Kamu memiliki <span><?php echo $itungtrans3 ?> transaksi</span></h2>
                    <div class="checkout-right">
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Order</th>
                                    <th>Tanggal Order</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <?php

                            $brg = mysqli_query($conn, "SELECT DISTINCT(idcart), c.orderid, tglorder, status from cart c, detailorder d where c.userid='$uid' and d.orderid=c.orderid and status!='Cart' order by tglorder DESC");
                            $no = 1;
                            while ($b = mysqli_fetch_array($brg)) {

                            ?>
                                <tr class="rem1">
                                    <form method="post">
                                        <td class="invert"><?php echo $no++ ?></td>
                                        <td class="invert"><a href="order.php?id=<?php echo $b['orderid'] ?>"><?php echo $b['orderid'] ?></a></td>

                                        <td class="invert"><?php echo $b['tglorder'] ?></td>
                                        <td class="invert">

                                            Rp<?php $ongkir = 10000;
                                                $ordid = $b['orderid'];
                                                $result1 = mysqli_query($conn, "SELECT SUM(qty*hargaafter)+$ongkir AS count FROM detailorder d, produk p where d.orderid='$ordid' and p.idproduk=d.idproduk order by d.idproduk ASC");
                                                $cekrow = mysqli_num_rows($result1);
                                                $row1 = mysqli_fetch_assoc($result1);
                                                $count = $row1['count'];
                                                if ($cekrow > 0) {
                                                    echo number_format($count);
                                                } else {
                                                    echo 'No data';
                                                } ?>

                                        </td>

                                        <td class="invert">
                                            <div class="rem">
                                                <?php
                                                if ($b['status'] == 'Payment') {
                                                    echo '
								<a href="konfirmasi.php?id=' . $b['orderid'] . '" class="form-control btn-primary">
								Konfirmasi Pembayaran
								</a>
								';
                                                } else if ($b['status'] == 'Diproses') {
                                                    echo 'Pesanan Diproses (Pembayaran Diterima)';
                                                } else if ($b['status'] == 'Dikirim') {
                                                    echo 'Pesanan Dikirim';
                                                } else if ($b['status'] == 'Selesai') {
                                                    echo 'Pesanan Selesai';
                                                } else if ($b['status'] == 'Dibatalkan') {
                                                    echo 'Pesanan Dibatalkan';
                                                } else {
                                                    echo 'Konfirmasi diterima';
                                                }

                                                ?>
                                    </form>
                    </div>
                    <script>
                        $(document).ready(function(c) {
                            $('.close1').on('click', function(c) {
                                $('.rem1').fadeOut('slow', function(c) {
                                    $('.rem1').remove();
                                });
                            });
                        });
                    </script>
                    </td>
                    </tr>
                <?php
                            }
                ?>

                <!--quantity-->
                <script>
                    $('.value-plus').on('click', function() {
                        var divUpd = $(this).parent().find('.value'),
                            newVal = parseInt(divUpd.text(), 10) + 1;
                        divUpd.text(newVal);
                    });

                    $('.value-minus').on('click', function() {
                        var divUpd = $(this).parent().find('.value'),
                            newVal = parseInt(divUpd.text(), 10) - 1;
                        if (newVal >= 1) divUpd.text(newVal);
                    });
                </script>
                <!--quantity-->
                </table>
                </div>
            </div>
        </div>
        <!-- //checkout -->




    </div>
    <!-- main content area end -->
    <!-- footer area start-->

    <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- modal input 
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah User Baru</h4>
						</div>
						<div class="modal-body">
							<form method="post">
								<div class="form-group">
									<label>Username</label>
									<input name="uname" type="text" class="form-control" placeholder="Username" required autofocus>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input name="upass" type="password" class="form-control" placeholder="Password">
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input name="adduser" type="submit" class="btn btn-primary" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
	-->
    <script>
        $(document).ready(function() {
            $('#dataTable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>



    <!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
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