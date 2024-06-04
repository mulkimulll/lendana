<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#2196f3">
    <meta name="author" content="DexignZone" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="#" />
    <meta property="og:title" content="#" />
    <meta property="og:description" content="#" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="#" />

    <!-- Title -->
    <title>Lendana</title>

    <!-- PWA Version -->
    {{-- <link rel="manifest" href="manifest.json"> --}}

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pwa/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pwa/vendor/swiper/swiper-bundle.min.css') }}">


</head>
<body>
<div class="page-wraper">
    
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader end-->
    
	<!-- Header -->
    <header class="header">
        <div class="main-bar">
            <div class="container">
                <div class="header-content">
                    <div class="left-content">
                        <a href="javascript:void(0);" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z" fill="#a19fa8"/>
							</svg>
                        </a>
                    </div>
                    <div class="mid-content">
                        <h5 class="mb-0">Profile</h5>
                    </div>
                    <div class="right-content">
                        <a href="javascript:void(0);" class="menu-toggler">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="#a19fa8"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#a19fa8"/>
							</svg>
						</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
	
    <!-- Sidebar -->
    <div class="sidebar">
		<div class="author-box">
			<div class="dz-media">
				<img src="assets/images/author/pic1.png" class="rounded-circle" alt="author-image">
			</div>
			<div class="dz-info">
				<span>Good Morning</span>
				<h5 class="name">Henry Kanwil</h5>
			</div>
		</div>
		<ul class="nav navbar-nav">	
			<li class="nav-label">Main Menu</li>
			<li><a class="nav-link" href="welcome.html">
				<span class="dz-icon bg-red light">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M11.776 21.8374C9.49294 20.4273 7.37064 18.7645 5.44791 16.8796C4.09052 15.5338 3.05388 13.8905 2.41718 12.0753C1.27955 8.53523 2.60383 4.48948 6.30113 3.2884C8.25264 2.67553 10.3751 3.05175 12.0071 4.29983C13.6397 3.05315 15.7614 2.67705 17.713 3.2884C21.4103 4.48948 22.7435 8.53523 21.6058 12.0753C20.9743 13.8888 19.9438 15.5319 18.5929 16.8796C16.6684 18.7625 14.5463 20.4251 12.2648 21.8374L12.016 22L11.776 21.8374Z" fill="white"/>
                        <path d="M12.0109 22L11.776 21.8374C9.49013 20.4274 7.36487 18.7647 5.43902 16.8796C4.0752 15.5356 3.03238 13.8922 2.39052 12.0753C1.26177 8.53523 2.58605 4.48948 6.28335 3.2884C8.23486 2.67553 10.3853 3.05204 12.0109 4.31057V22Z" fill="white"/>
                        <path d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="white"/>
                    </svg>
				</span>
				<span>Welcome</span>
			</a></li>
			<li><a class="nav-link" href="index.html">
				<span class="dz-icon bg-pink light">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="#130F26"/>
					</svg>
				</span>
				<span>Home</span>
			</a></li>
			<li><a class="nav-link" href="pages.html">
				<span class="dz-icon bg-orange light">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24"/>
							<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#fff" fill-rule="nonzero"/>
							<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#fff" opacity="0.5"/>
						</g>
					</svg>
				</span>
				<span>Pages</span>
			</a></li>
			<li><a class="nav-link" href="ui-components.html">
				<span class="dz-icon bg-skyblue light">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"/>
							<rect fill="#00aeff" x="4" y="4" width="7" height="7" rx="1.5"/>
							<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#fff" opacity="0.5"/>
						</g>
					</svg>
				</span>
				<span>Components</span>
			</a></li>
			<li><a class="nav-link" href="notification.html">
				<span class="dz-icon bg-green light">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#fff"/>
							<rect fill="#fff" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
						</g>
					</svg>
				</span>
				<span>Notification</span>
				<span class="badge badge-circle badge-danger">1</span>
			</a></li>
			<li><a class="nav-link" href="profile.html">
				<span class="dz-icon bg-yellow light">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24"/>
							<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#fff" fill-rule="nonzero" opacity="0.3"/>
							<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#fff" fill-rule="nonzero"/>
						</g>
					</svg>
				</span>
				<span>Profile</span>
			</a></li>
			<li><a class="nav-link" href="messages.html">
				<span class="dz-icon bg-skyblue light">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"/>
							<path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L6,18 C4.34314575,18 3,16.6568542 3,15 L3,6 C3,4.34314575 4.34314575,3 6,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z" fill="#fff" opacity="0.3"/>
							<path d="M7.5,12 C6.67157288,12 6,11.3284271 6,10.5 C6,9.67157288 6.67157288,9 7.5,9 C8.32842712,9 9,9.67157288 9,10.5 C9,11.3284271 8.32842712,12 7.5,12 Z M12.5,12 C11.6715729,12 11,11.3284271 11,10.5 C11,9.67157288 11.6715729,9 12.5,9 C13.3284271,9 14,9.67157288 14,10.5 C14,11.3284271 13.3284271,12 12.5,12 Z M17.5,12 C16.6715729,12 16,11.3284271 16,10.5 C16,9.67157288 16.6715729,9 17.5,9 C18.3284271,9 19,9.67157288 19,10.5 C19,11.3284271 18.3284271,12 17.5,12 Z" fill="#fff" opacity="0.3"/>
						</g>
					</svg>
				</span>
				<span>Chat</span>
				<span class="badge badge-circle badge-info">5</span>
			</a></li>
			<li><a class="nav-link" href="onboading.html">
				<span class="dz-icon bg-red light">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"/>
							<path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z" fill="#fff" fill-rule="nonzero" opacity="0.3" transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
							<rect fill="#ff4db8" opacity="0.3" transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) " x="13" y="6" width="2" height="12" rx="1"/>
							<path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z" fill="#fff" fill-rule="nonzero" transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
						</g>
					</svg>
				</span>
				<span>Logout</span>
			</a></li>
			<li class="sub-menu-down">
                <a class="nav-link" href="javascript:void(0);">
					<span class="dz-icon bg-red light">
						<svg height="18" viewBox="0 0 512 512" width="18" xmlns="http://www.w3.org/2000/svg"><g id="_40_Sidemenu" data-name="40 Sidemenu"><g fill="#a9defc"><rect height="105.52" rx="24" width="231.61" x="34.56" y="80.54"/><rect height="105.52" rx="24" width="231.61" x="34.56" y="203.24"/><rect height="105.52" rx="24" width="231.61" x="34.56" y="325.94"/></g><path d="m309.41 501h-274.85a20.46 20.46 0 0 1 0-40.91h254.44v-408.18h-254.44a20.46 20.46 0 0 1 0-40.91h274.85a20.46 20.46 0 0 1 20.46 20.46v449.08a20.46 20.46 0 0 1 -20.46 20.46z" fill="#f5d367"/><path d="m491.92 241.44c-1.43-1.44-74.62-73.44-74.62-73.44a20.46 20.46 0 0 0 -28.93 29l59.55 59.55-59.55 59.55a20.46 20.46 0 0 0 28.93 28.9s73.19-72 74.62-73.41a22 22 0 0 0 0-30.14z" fill="#f5d367"/><path d="m123.85 431.47h-65.29a24 24 0 0 1 -24-24v-57.53a24 24 0 0 1 11.65-20.58 501.22 501.22 0 0 0 77.64 102.11z" fill="#a2d4ea"/><path d="m209.31 501h-174.75a20.46 20.46 0 1 1 0-40.91h120a499.3 499.3 0 0 0 54.75 40.91z" fill="#e2c061"/></g></svg>
					</span>
					<span>One Level (Mulitilevel)</span>
				</a>
				<ul class="sub-menu">
					<li class="sub-menu-down">
						<a href="javascript:void(0);">Two Level</a>
						<ul class="sub-menu">
							<li class="sub-menu-down">
								<a href="javascript:void(0);">Three Level</a>
								<ul class="sub-menu">
									<li><a href="javascript:void(0);">Menu 1</a></li>
									<li><a href="javascript:void(0);">Menu 2</a></li>
									<li><a href="javascript:void(0);">Menu 3</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0);">Menu 2</a></li>
							<li><a href="javascript:void(0);">Menu 3</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0);">Menu 2</a></li>
					<li><a href="javascript:void(0);">Menu 3</a></li>
				</ul>
            </li>
            <li class="nav-label">Settings</li>
            <li class="nav-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                <a class="nav-link">
                    <span class="dz-icon bg-blue light">                        
                        <i class="fa-solid fa-palette"></i>
                    </span>					
                    <span>Highlights</span>					
                </a>
            </li>
            <li>
                <div class="mode">
                    <span class="dz-icon bg-green light">
                        <i class="fa-solid fa-moon"></i>
                    </span>					
                    <span>Dark Mode</span>
                    <div class="custom-switch">
                        <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                        <label class="custom-switch-label" for="toggle-dark-menu"></label>
                    </div>
                </div>
            </li>
		</ul>
		<div class="sidebar-bottom">
			<h6 class="name">Jobie - Job Portal</h6>
			<p>App Version 1.0</p>
        </div>
    </div>
    <!-- Sidebar End -->

    
    <!-- Page Content -->
    <div class="page-content bottom-content ">
        <div class="dz-banner-heading">
            <div class="overlay-black-light">
                <img src="assets/images/bg2.png" class="bnr-img" alt="">
            </div>
        </div>
        <div class="container profile-area">
            <div class="profile">
                <div class="media media-100">
                    <img src="assets/images/message/pic6.jpg" alt="/">    
                </div>
                <div class="mb-2">
                    <h4 class="mb-0">Henry Kanwil</h4>
                    <span class="detail">Programmer</span>
                </div>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
            </div>
            <ul class="contact-profile">
                <li class="d-flex align-items-center">
                    <a href="messages.html" class="contact-icon">
                        <svg class="text-primary" width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.2806 19.775C26.2089 19.7181 21 15.9635 19.5702 16.233C18.8877 16.3538 18.4975 16.8193 17.7144 17.7511C17.5884 17.9016 17.2856 18.2621 17.0503 18.5185C16.5553 18.3571 16.0726 18.1606 15.6056 17.9305C13.1955 16.7571 11.2481 14.8098 10.0747 12.3996C9.84451 11.9327 9.648 11.45 9.48675 10.955C9.744 10.7188 10.1045 10.416 10.2585 10.2865C11.186 9.50775 11.6524 9.1175 11.7731 8.43325C12.0208 7.01575 8.26875 1.771 8.22937 1.72375C8.05914 1.48056 7.83698 1.27825 7.57896 1.13147C7.32095 0.984676 7.03353 0.897075 6.7375 0.875C5.21675 0.875 0.875 6.50737 0.875 7.45587C0.875 7.511 0.954625 13.1145 7.8645 20.1434C14.8864 27.0454 20.489 27.125 20.5441 27.125C21.4935 27.125 27.125 22.7832 27.125 21.2625C27.1032 20.9675 27.0161 20.681 26.8701 20.4238C26.724 20.1666 26.5227 19.945 26.2806 19.775Z" fill="#40189D"/>
                        </svg>
                    </a>
                </li>
                <li class="d-flex align-items-center px-4">
                    <a href="messages.html" class="contact-icon">
                        <svg class="text-primary" width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.0761 6.24662C26.9621 5.48439 26.5787 4.78822 25.9955 4.28434C25.4123 3.78045 24.6679 3.50219 23.8972 3.5H4.10295C3.33223 3.50219 2.58781 3.78045 2.00462 4.28434C1.42143 4.78822 1.03809 5.48439 0.924072 6.24662L14.0001 14.7079L27.0761 6.24662Z" fill="#40189D"/>
                            <path d="M14.4751 16.485C14.3336 16.5765 14.1686 16.6252 14 16.6252C13.8314 16.6252 13.6664 16.5765 13.5249 16.485L0.875 8.30025V21.2721C0.875926 22.1279 1.2163 22.9484 1.82145 23.5535C2.42659 24.1587 3.24707 24.4991 4.10288 24.5H23.8971C24.7529 24.4991 25.5734 24.1587 26.1786 23.5535C26.7837 22.9484 27.1241 22.1279 27.125 21.2721V8.29938L14.4751 16.485Z" fill="#40189D"/>
                        </svg>
                    </a>
                </li>
                <li class="d-flex align-items-center">
                    <a href="messages.html" class="contact-icon">
                        <svg class="text-primary" width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.3077 18.7583C11.3567 18.8204 11.4049 18.8895 11.4696 18.9849C11.8494 19.495 12.2212 19.9955 12.5861 20.5179L13.2861 21.5066C13.367 21.6208 13.474 21.7138 13.5982 21.7781C13.7224 21.8423 13.8603 21.8758 14.0001 21.8758C14.14 21.8758 14.2778 21.8423 14.402 21.7781C14.5262 21.7138 14.6333 21.6208 14.7141 21.5066L15.7361 20.0655C15.9916 19.7076 16.2567 19.3498 16.5534 18.9683C16.5989 18.9018 16.6461 18.8405 16.7161 18.7513C17.732 17.4256 18.8301 16.1621 20.1654 14.6711C21.2564 13.452 21.9617 11.9369 22.1922 10.3172C22.4227 8.69754 22.1681 7.04586 21.4604 5.57079C20.7528 4.09571 19.6239 2.86341 18.2164 2.02952C16.8089 1.19562 15.1858 0.797519 13.5521 0.885501C11.4209 1.01966 9.42195 1.96501 7.96611 3.52728C6.51026 5.08956 5.70807 7.1501 5.72436 9.2855C5.75188 11.3927 6.58904 13.4085 8.06236 14.9153C9.22542 16.1254 10.3094 17.409 11.3077 18.7583ZM14.0001 5.6875C14.7178 5.68664 15.4196 5.89873 16.0167 6.29692C16.6138 6.69511 17.0794 7.26151 17.3544 7.92441C17.6295 8.58731 17.7017 9.31692 17.5619 10.0209C17.4221 10.7248 17.0766 11.3715 16.5691 11.879C16.0616 12.3865 15.4149 12.732 14.711 12.8718C14.007 13.0116 13.2774 12.9394 12.6145 12.6643C11.9516 12.3893 11.3852 11.9237 10.987 11.3266C10.5888 10.7295 10.3767 10.0277 10.3776 9.31C10.3788 8.34961 10.7608 7.42889 11.4399 6.74979C12.119 6.07069 13.0397 5.68866 14.0001 5.6875Z" fill="#40189D"/>
                            <path d="M14.0002 11.1921C14.3714 11.193 14.7345 11.0838 15.0437 10.8782C15.3528 10.6727 15.594 10.3802 15.7369 10.0375C15.8797 9.69492 15.9178 9.31763 15.8462 8.95339C15.7746 8.58914 15.5967 8.2543 15.3348 7.99121C15.0729 7.72811 14.7389 7.54858 14.375 7.47531C14.0111 7.40204 13.6336 7.43833 13.2904 7.57958C12.9471 7.72084 12.6534 7.96072 12.4464 8.26889C12.2395 8.57705 12.1286 8.93967 12.1277 9.31088C12.1272 9.80844 12.3241 10.2859 12.6751 10.6385C13.0261 10.9912 13.5026 11.1903 14.0002 11.1921Z" fill="#40189D"/>
                            <path d="M19.3498 18.2709C18.9123 18.7906 18.4984 19.3007 18.1038 19.8152C18.0504 19.8844 17.9349 20.0401 17.9349 20.0401C17.654 20.4024 17.4029 20.7401 17.1596 21.0814L16.1411 22.5172C15.8986 22.8594 15.5775 23.1385 15.2049 23.3311C14.8323 23.5237 14.419 23.6242 13.9996 23.6242C13.5801 23.6242 13.1668 23.5237 12.7942 23.3311C12.4216 23.1385 12.1006 22.8594 11.858 22.5172L11.158 21.5285C10.808 21.0262 10.458 20.5546 10.1001 20.0751C10.1001 20.0751 9.9575 19.8704 9.92513 19.8336C9.5025 19.271 9.09212 18.7547 8.68525 18.2586C6.02 19.1047 4.375 20.5782 4.375 22.3125C4.375 25.0565 8.51288 27.125 14 27.125C19.4871 27.125 23.625 25.0565 23.625 22.3125C23.625 20.5861 21.9958 19.1187 19.3498 18.2709Z" fill="#40189D"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="pdf-bx">
                <a href="javascript:void(0);">
                    <h5 class="text-white">My Resume</h5>
                    <span class="text-white">david_resume.pdf</span>
                </a>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="5" height="23" viewBox="0 0 5 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2.5" cy="2.5" r="2.5" fill="#fff"/>
                            <circle cx="2.5" cy="11.5" r="2.5" fill="#fff"/>
                            <circle cx="2.5" cy="20.5" r="2.5" fill="#fff"/>
                        </svg>  
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                </div>
            </div>
            <div class="skill-section">
                <h5>Skill</h5>
                <div class="row g-3">
                    <div class="col-4">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <span class="donut" data-peity='{ "fill": ["#EE8524", "#EAE4F6"],   "innerRadius": 26, "radius": 32 }'>86/100</span>
                                <small class="text-black">66%</small>
                            </div>
                            <h6 class="title">PHP</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <span class="donut" data-peity='{ "fill": ["#2AAF50", "#EAE4F6"],   "innerRadius": 26, "radius": 32 }'>48/100</span>
                                <small class="text-black">48%</small>
                            </div>
                            <h6 class="title">Java</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <span class="donut" data-peity='{ "fill": ["#1A88C6", "#EAE4F6"],   "innerRadius": 26, "radius": 32 }'>56/100</span>
                                <small class="text-black">56%</small>
                            </div>
                            <h6 class="title">MySQL</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <span class="donut" data-peity='{ "fill": ["#1A88C6", "#EAE4F6"],   "innerRadius": 26, "radius": 32 }'>34/100</span>
                                <small class="text-black">34%</small>
                            </div>
                            <h6 class="title">React N</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="skill-bar">
                            <div class="donut-chart-sale">
                                <span class="donut" data-peity='{ "fill": ["#3E1899", "#EAE4F6"],   "innerRadius": 26, "radius": 32 }'>86/100</span>
                                <small class="text-black">86%</small>
                            </div>
                            <h6 class="title">CSS</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End-->
    
    <!-- Menubar -->
	<div class="menubar-area">
		<div class="toolbar-inner menubar-nav">
			<a href="index.html" class="nav-link">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="#a19fa8"/>
				</svg>
			</a>
			<a href="pages.html" class="nav-link">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M11.776 21.8374C9.49294 20.4273 7.37064 18.7645 5.44791 16.8796C4.09052 15.5338 3.05388 13.8905 2.41718 12.0753C1.27955 8.53523 2.60383 4.48948 6.30113 3.2884C8.25264 2.67553 10.3751 3.05175 12.0071 4.29983V4.29983C13.6397 3.05315 15.7614 2.67705 17.713 3.2884C21.4103 4.48948 22.7435 8.53523 21.6058 12.0753C20.9743 13.8888 19.9438 15.5319 18.5929 16.8796C16.6684 18.7625 14.5463 20.4251 12.2648 21.8374L12.016 22L11.776 21.8374Z" fill="#a19fa8"/>
                    <path d="M12.0109 22L11.776 21.8374C9.49013 20.4274 7.36487 18.7647 5.43902 16.8796C4.0752 15.5356 3.03238 13.8922 2.39052 12.0753C1.26177 8.53523 2.58605 4.48948 6.28335 3.2884C8.23486 2.67553 10.3853 3.05204 12.0109 4.31057V22Z" fill="#a19fa8"/>
                    <path d="M18.2304 9.99922V9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016V9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="#a19fa8"/>
                </svg>
			</a>
			<a href="messages.html" class="nav-link">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M22 15.9403C22 18.7303 19.76 20.9903 16.97 21.0003H16.96H7.05C4.27 21.0003 2 18.7503 2 15.9603V15.9503C2 15.9503 2.006 11.5243 2.014 9.2983C2.015 8.8803 2.495 8.6463 2.822 8.9063C5.198 10.7913 9.447 14.2283 9.5 14.2733C10.21 14.8423 11.11 15.1633 12.03 15.1633C12.95 15.1633 13.85 14.8423 14.56 14.2623C14.613 14.2273 18.767 10.8933 21.179 8.9773C21.507 8.7163 21.989 8.9503 21.99 9.3673C22 11.5763 22 15.9403 22 15.9403Z" fill="#a19fa8"/>
                    <path d="M21.4761 5.67369C20.6101 4.04169 18.9061 2.99969 17.0301 2.99969H7.05013C5.17413 2.99969 3.47013 4.04169 2.60413 5.67369C2.41013 6.03869 2.50213 6.4937 2.82513 6.75169L10.2501 12.6907C10.7701 13.1107 11.4001 13.3197 12.0301 13.3197C12.0341 13.3197 12.0371 13.3197 12.0401 13.3197C12.0431 13.3197 12.0471 13.3197 12.0501 13.3197C12.6801 13.3197 13.3101 13.1107 13.8301 12.6907L21.2551 6.75169C21.5781 6.4937 21.6701 6.03869 21.4761 5.67369Z" fill="#a19fa8"/>
                </svg>
			</a>
			<a href="javascript:void(0);" class="menu-toggler">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="#a19fa8"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#a19fa8"/>
                </svg>
			</a>
		</div>
	</div>
	<!-- Menubar -->
	
    <!-- Theme Color Settings -->
	<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
        <div class="offcanvas-body small">
            <ul class="theme-color-settings">
                <li>
                    <input class="filled-in" id="primary_color_8" name="theme_color" type="radio" value="color-primary" />
					<label for="primary_color_8"></label>
                    <span>Default</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_2" name="theme_color" type="radio" value="color-green" />
					<label for="primary_color_2"></label>
                    <span>Green</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_3" name="theme_color" type="radio" value="color-blue" />
					<label for="primary_color_3"></label>
                    <span>Blue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_4" name="theme_color" type="radio" value="color-pink" />
					<label for="primary_color_4"></label>
                    <span>Pink</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_5" name="theme_color" type="radio" value="color-yellow" />
					<label for="primary_color_5"></label>
                    <span>Yellow</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_6" name="theme_color" type="radio" value="color-orange" />
					<label for="primary_color_6"></label>
                    <span>Orange</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_7" name="theme_color" type="radio" value="color-purple" />
					<label for="primary_color_7"></label>
                    <span>Purple</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_1" name="theme_color" type="radio" value="color-red" />
					<label for="primary_color_1"></label>
                    <span>Red</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_9" name="theme_color" type="radio" value="color-lightblue" />
					<label for="primary_color_9"></label>
                    <span>Lightblue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_10" name="theme_color" type="radio" value="color-teal" />
					<label for="primary_color_10"></label>
                    <span>Teal</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_11" name="theme_color" type="radio" value="color-lime" />
					<label for="primary_color_11"></label>
                    <span>Lime</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_12" name="theme_color" type="radio" value="color-deeporange" />
					<label for="primary_color_12"></label>
                    <span>Deeporange</span>
                </li>
            </ul>
        </div>
    </div>
	<!-- Theme Color Settings End -->
</div> 
<!--**********************************
    Scripts
***********************************-->
<script src="index.js" defer></script>
<script src="assets/pwa/js/jquery.js"></script>
<script src="assets/pwa/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/pwa/js/settings.js"></script>
<script src="assets/pwa/js/custom.js"></script>
<script src="assets/pwa/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/pwa/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
</body>

</html>