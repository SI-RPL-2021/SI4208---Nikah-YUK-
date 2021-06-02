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
$itungtrans = mysqli_query($conn, "select count(detailid) as jumlahtrans from detailorder where orderid='$orderidd'");
$itungtrans2 = mysqli_fetch_assoc($itungtrans);
$itungtrans3 = $itungtrans2['jumlahtrans'];

if (isset($_POST["update"])) {
    $kode = $_POST['idproduknya'];
    $jumlah = $_POST['jumlah'];
    $q1 = mysqli_query($conn, "update detailorder set qty='$jumlah' where idproduk='$kode' and orderid='$orderidd'");
    if ($q1) {
        echo "Berhasil Update Cart
		<meta http-equiv='refresh' content='1; url= cart.php'/>";
    } else {
        echo "Gagal update cart
		<meta http-equiv='refresh' content='1; url= cart.php'/>";
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

$package = query("SELECT * FROM cart_package");

?>

<!doctype html>
<html class="no-js" lang="en">

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
                    <h2>Dalam keranjangmu ada : <span><?php echo $itungtrans3 ?> barang</span></h2>
                    <div class="checkout-right">
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>


                                    <th>Harga Satuan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            $brg = mysqli_query($conn, "SELECT * from detailorder d, produk p where orderid='$orderidd' and d.idproduk=p.idproduk order by d.idproduk ASC");
                            $no = 1;
                            while ($b = mysqli_fetch_array($brg)) {

                            ?>
                                <tr class="rem1">
                                    <form method="post">
                                        <td class="invert"><?php echo $no++ ?></td>
                                        <td class="invert"><a href="product.php?idproduk=<?php echo $b['idproduk'] ?>"><img src="<?php echo $b['gambar'] ?>" width="100px" height="100px" /></a></td>
                                        <td class="invert"><?php echo $b['namaproduk'] ?></td>
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    <input type="number" name="jumlah" class="form-control" height="100px" value="<?php echo $b['qty'] ?>" \>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="invert">Rp<?php echo number_format($b['hargaafter']) ?></td>
                                        <td class="invert">
                                            <div class="rem">

                                                <input type="submit" name="update" class="form-control" value="Update" \>
                                                <input type="hidden" name="idproduknya" value="<?php echo $b['idproduk'] ?>" \>
                                                <input type="submit" name="hapus" class="form-control" value="Hapus" \>
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
                
                <br><br><br>
                <!-- Start cart wedding package -->
                <div class="container">
                    <h4 align="center"></h4>
                    <br>
                    <table class="table">
                        <thead style="background-color: #418134;">
                            <tr>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">No</font>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Nama Barang</font>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Harga</font>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <font color="white">Aksi</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-light">
                            <?php if (!is_null($package)) : ?>
                                <?php
                                $i = 1;
                                foreach ($package as $cart) {
                                ?>
                                    <tr>
                                        <th scope="row" style="text-align: center; color: black;"><?= $i ?></th>
                                        <td style="text-align: center;"><?= $cart['namaBrg']; ?></td>
                                        <td style="text-align: center;">Rp<?= $cart['price']; ?></td>
                                        <td style="text-align: center;">
                                            <a href="functions.php?id=<?= $cart["id"] ?>" class="btn btn-danger btn-sm" role="button" name="hapus">Hapus</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                                <tr>
                                    <th colspan="2" scope="col" class="">Total</th>
                                    <th colspan="2" scope="col">Rp<?= $cart['price']; ?></th>
                                </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="checkout-left">
                    <div class="checkout-left-basket">
                        <h4>Total Harga</h4>
                        <ul>
                            <?php
                            $brg = mysqli_query($conn, "SELECT * from detailorder d, produk p where orderid='$orderidd' and d.idproduk=p.idproduk order by d.idproduk ASC");
                            $no = 1;
                            $subtotal = 10000;
                            while ($b = mysqli_fetch_array($brg)) {
                                $hrg = $b['hargaafter'];
                                $qtyy = $b['qty'];
                                $totalharga = $hrg * $qtyy;
                                $subtotal += $totalharga
                            ?>
                                <li><?php echo $b['namaproduk'] ?><i> - </i> <span>Rp<?php echo number_format($totalharga) ?> </span></li>
                            <?php
                            }
                            ?>
                            <li>Total (inc. 10k Ongkir)<i> - </i> <span>Rp<?php echo number_format($subtotal) ?></span></li>
                        </ul>
                    </div>
                    <div class="checkout-right-basket">
                        <!-- <a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a> -->
                        <a href="checkout.php"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a>
                    </div>
                    <div class="clearfix"> </div>
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