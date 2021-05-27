<?php
session_start();
include '../../controller/function.php';

?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style/blog_page.css">
    <link rel="stylesheet" type="text/css" href="../../style/landing_page.css">
    
    <style type="text/css">
        .sidenav {
            height: 45%;
            width: 300px;
            position: fixed;
            z-index: 2;
            /* top: 0; */
            right: 65px;
            background-color: #FFFAFA;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: black;
            display: block;
        }

        .sidenav a:hover {
            color: black;
        }

        .main {
            margin-right: 160px;
            /* Same as the width of the sidenav */
            font-size: 28px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 350px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .letter1 {
            letter-spacing: 1px;
        }

        .word5 {
            word-spacing: 5px;
        }

        body {
            font-family: verdana;
            font-size: 12px;
        }

        .margin {
            margin: 100px 150px 100px 150px;
        }

        .container {
            width: 50%;
            height: auto;
            background: white;
            margin: auto;
            margin-top: 5px;
            padding-bottom: 5px;
        }

        .badan {
            height: 450px;
        }

        .garis_tepi2 {
            border: 10px double green;
        }
    </style>

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
                            <a class="nav-link" href="#">Tutorial</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="Blog_user.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Loker</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Konsultasi_user.php">Consultation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimoni_user.php">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
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


        <!---------------------------------------------------------------------------------------------- Blog ----------------------------------------------------------------------------------------->


        <!-- <div class="badan">
            <div class="sidebar">
                sidebar
                <ul>
                    <li><a href="">boom</a></li>
                </ul>
            </div>
        </div> -->

        <br><br><br>
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="row">
            <div class="col-12" text>
                <h2 align="center"><b> Vendor Profile </b> </h2>
            </div>
        </div>
        <br><br><br>

        <div class="sidenav garis_tepi2">
            <a align="center" href="Blog_user.php">Halaman Blog</a>
            <hr />
            <a href="Blog_Building_user.php">Building</a><br>
            <a href="Blog_Photography_user.php">Photography</a><br>
            <a href="Blog_Prepar_user.php">Preparation</a><br>
            <a href="Blog_Vendor_user.php">Vendor</a>
        </div>

        <div class="container">
            <div class="card">
                <div class="">
                    <div class="col">
                        <img src="../../img/Vendorprofil.jpg" class="card-img">
                    </div>

                    <div class="text-justify word5">
                        <div class="puul-right margin">
                            <h4 class="card-title"> <b>5 Vendor Pernikahan Nikah-Yuk</b></h4>
                            <h6>Dalam mempersiapkan pernikahan, dibutuhkan kesiapan matang dari segala aspek, termasuk juga soal urusan vendor pernikahan. Memilih vendor pernikahan tak bisa ditentukan begitu saja. Kita sebagai calon pengantin yang akan menggunakan jasa mereka, harus mengetahui kredibilitas masing-masing vendor agar pesta pernikahan dapat berjalan mulus.
                                Tetapi biasanya, banyak calon pengantin yang merasa kewalahan dan bingung untuk menentukan vendor utama dalam mempersiapkan pernikahan. Ladies, apakah Anda salah satunya?
                                Jika iya, maka jangan khawatir. Berikut kumparanWOMAN berikan lima daftar vendor pernikahan yang harus segera ditentukan saat Anda dan pasangan memutuskan untuk menikah. Apa saja?
                            </h6>
                            <br>
                            <img src="../../img/Vendorprofil.jpg" class="card-img" alt="gambar" height="100%">
                            <h6>
                                <b>1. Wedding Organizer Nikah-Yuk</b>
                                Ketika ada kesepakatan antara Anda dan pasangan untuk menikah dan membuat resepsi pernikahan, satu hal yang perlu ditentukan terlebih dahulu apakah Anda akan menggunakan jasa Wedding Organizer atau tidak. Bila iya, sebaiknya segera tentukan Wedding Organizer, mereka bisa membantu mempersiapkan pernikahan sekaligus memberikan referensi vendor lainnya.
                                Namun bila Anda tidak berencana menggunakan jasa Wedding Organizer, Anda dan pasangan harus meluangkan waktu khusus untuk mencari vendor gedung pernikahan setidaknya satu tahun sebelum menikah.
                            </h6>
                            <br>
                            <img src="../../img/gedung.jpg" class="card-img" alt="gambar" height="100%">
                            <h6>
                                <b> 2. Gedung Pernikahan</b>
                                5 Vendor Pernikahan yang Harus Segera Ditentukan saat Memutuskan Menikah (1)
                                Pernikahan Dian Pelangi. Foto: THEUPPERMOST/Tito Rikardo & Hedrian Ngabito
                                Bila sudah mendapatkan tanggal pernikahan yang diinginkan, langkah selanjutnya yang harus dilakukan adalah mencari gedung pernikahan. Biasanya, mencari lokasi pernikahan dilakukan mulai dari satu tahun hingga enam bulan sebelum pernikahan.
                                Dalam memilih gedung pernikahan, pastikan apakah lokasi yang diinginkan sesuai dengan konsep dan tema pernikahan, apakah Anda ingin pesta indoor atau outdoor, apakah Anda ingin mengundang banyak tamu atau hanya kerabat dekat saja. Hal ini perlu dipikirkan matang-matang mengingat mencari jumlah gedung pernikahan dengan lokasi yang strategis cukup terbatas dan biaya sewanya pun tidak murah.
                            </h6>
                            <br>
                            <img src="../../img/catering.png" class="card-img" alt="gambar" height="100%">
                            <h6>
                                <b> 3. Katering dan Dekorasi</b>
                                5 Vendor Pernikahan yang Harus Segera Ditentukan saat Memutuskan Menikah (2)
                                Ilustrasi Venue Pernikahan Foto: Shardayyy Photography
                                Biasanya, setiap gedung pernikahan memiliki afiliasi atau rekanan dengan vendor katering dan dekorasi. Tetapi bila Anda dan pasangan tidak ingin menggunakan rekanan vendor katering dan dekorasi dari pihak gedung, Anda pun bisa mencari katering dan dekorasi sendiri.
                                Tak ada salahnya datangi pameran pernikahan yang banyak diikuti oleh vendor-vendor, termasuk pula vendor katering. Di sana, Anda biasanya bisa menyicipi makanan (food tasting) secara gratis sekaligus berkonsultasi mengenai menu makanan sebelum memutuskan vendor katering yang akan dipakai.
                                Untuk dekorasi, saat ini banyak vendor yang memasarkan usahanya melalui akun media sosial dan beberapa aplikasi wedding directory. Karena pada dasarnya, dekorasi pernikahan disesuaikan oleh selera kedua calon pengantin, sehingga penting sekali memilih vendor yang mampu mengerti keinginan Anda.
                            </h6>
                            <br>
                            <img src="../../img/pengantin.jpg" class="card-img" alt="gambar" height="100%">
                            <h6>
                                <b> 4. Baju Pengantin dan Makeup Artist</b>
                                5 Vendor Pernikahan yang Harus Segera Ditentukan saat Memutuskan Menikah (3)
                                Cantik dengan Gaun Pengantin Model Longgar. Foto: dok. @lindswell_k/ Instagram
                                Dalam memilih vendor pernikahan, biasanya calon pengantin perempuan memiliki peran besar dalam menentukan vendor. Salah satu vendor yang harus segera ditentukan adalah baju pengantin dan makeup artist. Biasanya, baju pengantin harus dibuat secara khusus sehingga memakan waktu yang cukup lama.
                                Sementara itu, memilih makeup artist pun tak bisa sembarangan. Biasanya, para makeup artist memiliki beberapa penawaran harga, misalnya makeup untuk akad nikah saja atau satu paket dengan makeup retouch untuk resepsi. Jangan ragu untuk bertanya dengan detail kepada makeup artist, termasuk apakah Anda bisa melakukan tes makeup terlebih dahulu atau tidak.
                            </h6>
                            <br>
                            <img src="../../img/foto-foto.jpg" class="card-img" alt="gambar" height="100%">
                            <h6>
                                <b> 5. Dokumentasi foto dan video</b>
                                Vendor lain yang tak kalah penting dalam mempersiapkan pernikahan adalah vendor dokumentasi, baik foto maupun video. Vendor ini bersifat personal, artinya tergantung selera dan kebutuhan Anda. Apakah Anda hanya perlu dokumentasi saat hari pernikahan saja, ataukah Anda perlu dokumentasi untuk pre-wedding. Tak heran, setiap vendor foto dan dokumentasi memiliki harga yang bervariasi.
                                Setelah kelima vendor ini sudah ditentukan, maka Anda bisa mencari vendor-vendor lainnya yang tidak membutuhkan waktu lama untuk mengurusnya. Misalnya, vendor undangan pernikahan, souvenir, kotak seserahan, dan lain-lain.
                            </h6>
                            <h5>So Ladies, siap merencanakan pernikahan dengan matang?</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!------------------------------------------------------------------------------------------- Footer  ----------------------------------------------------------------------------------------------------------------------->


        <div class="footer">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

                .list-space-footer-2-2 {
                    margin-bottom: 1.25rem;
                }

                .list-space-footer-2-2-title {
                    margin-bottom: 1.5rem;
                }

                .footer-text-title-footer-2-2 {
                    font-size: 1.5rem;
                    font-weight: 600;
                    color: #000000;
                }

                .list-menu-footer-2-2 {
                    color: #c7c7c7;
                    text-decoration: none !important;
                    cursor: pointer;
                }

                .list-menu-footer-2-2:hover {
                    color: #555252;
                }

                hr.hr-footer-2-2 {
                    margin: 0;
                    border: 0;
                    border-top: 1px solid rgba(0, 0, 0, 0.1);
                }

                .border-color-footer-2-2 {
                    color: #c7c7c7;
                }

                .footer-link-footer-2-2 {
                    margin-right: 1.25rem;
                    color: #c7c7c7;
                }

                .footer-link-footer-2-2:hover {
                    color: #555252;
                    cursor: pointer;
                }

                .social-media-c-footer-2-2:hover circle,
                .social-media-p-footer-2-2:hover path {
                    fill: #555252;
                    cursor: pointer;
                }

                .footer-info-space-footer-2-2 {
                    padding-top: 3rem;
                }

                .social-media-left-footer-2-2 {
                    margin-right: 1.25rem;
                }

                .social-media-center-1-footer-2-2 {
                    margin-right: 1.25rem;
                }

                .social-media-center-2-footer-2-2 {
                    margin-right: 1.25rem;
                }

                .list-footer-footer-2-2 {
                    padding: 5rem 1rem 6rem 1rem;
                }

                .info-footer-footer-2-2 {
                    padding-left: 1rem;
                    padding-right: 1rem;
                    padding-bottom: 3rem;
                }

                @media (max-width: 980px) {
                    .footer-responsive-space-footer-2-2 {
                        margin-bottom: 1.25rem;
                        margin-top: 1.25rem;
                    }
                }

                @media (min-width: 576px) {
                    .list-footer-footer-2-2 {
                        padding: 5rem 2rem 6rem 2rem;
                    }

                    .info-footer-footer-2-2 {
                        padding-left: 2rem;
                        padding-right: 2rem;
                        padding-bottom: 3rem;
                    }
                }

                @media (min-width: 768px) {
                    .list-footer-footer-2-2 {
                        padding: 5rem 4rem 6rem 4rem;
                    }

                    .info-footer-footer-2-2 {
                        padding-left: 4rem;
                        padding-right: 4rem;
                        padding-bottom: 3rem;
                    }
                }

                @media (min-width: 992px) {
                    .list-footer-footer-2-2 {
                        padding: 5rem 6rem 6rem 6rem;
                    }

                    .info-footer-footer-2-2 {
                        padding-left: 6rem;
                        padding-right: 6rem;
                        padding-bottom: 3rem;
                    }
                }
            </style>
            <br><br><br><br>
            <div style="font-family: 'Poppins', sans-serif;">
                <div class="list-footer-footer-2-2 bg-light">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="">
                                <div class="list-space-footer-2-2-2">
                                    <img src="../../img/logo1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="">
                                <div class="list-space-footer-2-2">
                                    <!-- <img src="img/logo1.png" alt=""> -->
                                </div>
                                <nav style="list-style-type:none;">
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Home</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">FAQ</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Tutorial</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Blog</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Vacancy</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Consultation</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Testimoni</a>
                                    </li>
                                    <li class="list-space-footer-2-2">
                                        <a class="list-menu-footer-2-2">Services</a>
                                    </li>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h2 class="footer-text-title-footer-2-2 list-space-footer-2-2-title">Product</h2>
                            <nav style="list-style-type:none;">
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Venue</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Cathering</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Wardrobe</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Photographer Tool</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Music</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Wedding Car</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">PhotoBooth</a>
                                </li>
                                <li class="list-space-footer-2-2">
                                    <a class="list-menu-footer-2-2">Honeymoon</a>
                                </li>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="border-color-footer-2-2 info-footer-footer-2-2 bg-light">
                    <div class="">
                        <hr class="hr-footer-2-2">
                    </div>
                    <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space-footer-2-2">
                        <div class="d-flex title-font font-medium align-items-center" style="cursor: pointer;">
                            <svg class="social-media-c-footer-2-2 social-media-left-footer-2-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                <g clip-path="url(#clip0)">
                                    <path d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg class="social-media-c-footer-2-2 social-media-center-1-footer-2-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                <g clip-path="url(#clip0)">
                                    <path d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg class="social-media-p-footer-2-2 social-media-center-2-footer-2-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z" fill="#C7C7C7" />
                                <path d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z" fill="#C7C7C7" />
                                <path d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z" fill="#C7C7C7" />
                            </svg>
                            <svg class="social-media-c-footer-2-2 social-media-right" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                <g clip-path="url(#clip0)">
                                    <path d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727V20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147V21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194V15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133V9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533V9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733V14.5733Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center footer-responsive-space-footer-2-2">
                            <a class="footer-link-footer-2-2" style="text-decoration: none;">Terms of Service</a>
                            <span style="margin-right:1.25rem">|</span>
                            <a class="footer-link-footer-2-2" style="text-decoration: none;">Privacy Policy</a>
                            <span style="margin-right:1.25rem">|</span>
                            <a class="footer-link-footer-2-2" style="text-decoration: none;">Licenses</a>
                        </nav>
                        <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                            <p style="margin: 0">Copyright © 2021 Nikah-YUK!</p>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>



</body>

</html>