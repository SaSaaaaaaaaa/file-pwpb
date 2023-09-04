<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from caketheme.com/html/ruper/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:36:22 GMT -->
<head>

    @include('layout.head')

</head>
	<body class="home home-6 title-6">
		<div id="page" class="hfeed page-wrapper">
			
            @include('shop.header')

			<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					<div id="primary" class="content-area">
						<div id="content" class="site-content" role="main">
							<section class="section m-b-70">
								<!-- Block Banners (Layout 6) -->
								
                                @include('kategori.block-banner')

							</section>
						</div><!-- #content -->
					</div><!-- #primary -->
				</div><!-- #main-content -->
			</div>

			@include('shop.footer')
            
		</div>

		<!-- Back Top button -->
		<div class="back-top button-show">
			<i class="arrow_carrot-up"></i>
		</div>

		<!-- Search -->
		
        @include('layout.search')

		<!-- Wishlist -->
		
        @include('layout.wishlist')

		<!-- Compare -->
		
        @include('layout.compare')

		<!-- Quickview -->
		
        @include('layout.quickview')

		<!-- Dependency Scripts -->
		<script src="{{asset('libs/popper/js/popper.min.js')}}"></script>
		<script src="{{asset('libs/jquery/js/jquery.min.js')}}"></script>
		<script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('libs/slick/js/slick.min.js')}}"></script>
		<script src="{{asset('libs/countdown/js/jquery.countdown.min.js')}}"></script>
		<script src="{{asset('libs/mmenu/js/jquery.mmenu.all.min.js')}}"></script>
		
		<!-- Site Scripts -->
		<script src="{{asset('assets/js/app.js')}}"></script>
	</body>

<!-- Mirrored from caketheme.com/html/ruper/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:36:48 GMT -->
</html>