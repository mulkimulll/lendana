<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lendana</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <style>
        /* .home-banner {
				overflow: hidden;
			} */
        .password-toggle {
            cursor: pointer;
        }

    </style>
</head>

<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    {{-- <div class="preloader"></div> --}}

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <div class="header header-light head-shadow position-relative">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="{{ asset('lendana-logo.png') }}" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0 intro-bg intro-banner">
            <div class="container">

                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-7 col-md-7 col-sm-12 col-12">
                        <form class="bg-white rounded p-4">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group mb-4">
                                        <h2 class="mb-0 ft-bold">Daftar akun</h2>
                                        {{-- <p class="fs-md text-muted">Hire experts or be hired in sales & marketing</p> --}}
                                    </div>

                                    <div class="form-group position-relative mb-3">
                                        <label for="email"><strong>Nomor Induk (NIK)</strong></label>
                                        <input type="text" class="form-control lg form-ico border rounded"
                                            placeholder="Masukkan Nomor induk kependudukan" />
                                    </div>
                                    <div class="form-group position-relative mb-3">
                                        <label class="text"><strong>No handphone</strong></label>
                                        <input type="text" class="form-control lg form-ico border rounded"
                                            placeholder="Contoh: 08XXXXXXXXX">
                                    </div>
                                    <div class="form-group position-relative mb-3">
                                        <label class="text"><strong>Email</strong></label>
                                        <input type="email" class="form-control lg form-ico border rounded"
                                            placeholder="Masukkan email">
                                    </div>
                                    <div class="form-group position-relative mb-3">
                                        <label class="text"><strong>Password</strong></label>
                                        <input type="password" class="form-control lg form-ico border rounded"
                                            placeholder="Masukkan password">
                                    </div>
                                    <div class="form-group position-relative">
                                        <button class="btn full-width custom-height-lg theme-bg text-white fs-md"
                                            type="button">Daftar Sekarang</button>
                                    </div>
                                    <p>Sudah memiliki akun? <a style="color: #6d8fd4"
                                            href="{{ url('/login') }}">Login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="bnr_thumb position-relative">
                            <img src="{{ asset('assets/img/about-1.png') }}" class="img-fluid bnr_img" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/slider-bg.js"></script>
    <script src="assets/js/smoothproducts.js"></script>
    <script src="assets/js/snackbar.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>

<!-- Mirrored from shreethemes.net/workplex-demo/workplex/home-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2024 03:49:48 GMT -->

</html>
