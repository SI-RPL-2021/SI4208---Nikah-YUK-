<?php
session_start();
include '../../controller/function.php';

$idk = $_GET['idkategori'];
?>
<!DOCTYPE html>
<html>

<head>

    <title>Nikah-YUK!</title>

    <title>Service - Nikah-YUK!</title>



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
    <link rel="stylesheet" type="text/css" href="../../style/blog_page.css">
    <link rel="stylesheet" type="text/css" href="../../style/landing_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
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
                    <div class="col-md-4 products-left">
                        <div class="categories">
                            <h2>Categories</h2>
                            <ul class="cate">


                                <?php
                                $kat = mysqli_query($conn, "SELECT * from kategori order by idkategori ASC");
                                while ($p = mysqli_fetch_array($kat)) {

                                ?>
                                    <li><a href="service_user.php?idkategori=<?php echo $p['idkategori'] ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $p['namakategori'] ?></a></li>

                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 products-right">
                        <div class="agile_top_brands_grids">


                            <?php
                            $brgs = mysqli_query($conn, "SELECT * from produk where idkategori='$idk' order by idproduk ASC");
                            $x = mysqli_num_rows($brgs);

                            if ($x > 0) {
                                while ($p = mysqli_fetch_array($brgs)) {
                            ?>

                                    <div class="col-md-4 top_brand_left">
                                        <div class="hover14 column">
                                            <div class="agile_top_brand_left_grid">
                                                <div class="agile_top_brand_left_grid_pos">
                                                    <img src="../../img/offer.png" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="agile_top_brand_left_grid1">
                                                    <figure>
                                                        <div class="snipcart-item block">
                                                            <div class="snipcart-thumb">
                                                                <a href="product.php?idproduk=<?php echo $p['idproduk'] ?>"><img src="<?php echo $p['gambar'] ?>" width="200px" height="200px"></a>
                                                                <p><?php echo $p['namaproduk'] ?></p>
                                                                <h4>Rp<?php echo number_format($p['hargaafter']) ?> <span>Rp<?php echo number_format($p['hargabefore']) ?></span></h4>
                                                            </div>
                                                            <div class="snipcart-details top_brand_home_details">
                                                                <fieldset>
                                                                    <a href="product.php?idproduk=<?php echo $p['idproduk'] ?>"><input type="submit" class="button" value="Lihat Produk" /></a>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {

                                echo "Data tidak ditemukan";

                                echo "Silahkan pilih layana kami berdasarkan kategori";

                                echo "Silahkan pilih layanan kami berdasarkan kategori";

                            }
                            ?>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--- beverages --->
        </div>



        <!------------------------------------------------------------------------------------------- Footer  ----------------------------------------------------------------------------------------------------------------------->



        </div>

    </section>



</body>

</html>