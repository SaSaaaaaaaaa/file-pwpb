
	<!DOCTYPE html>
    <html lang="en">
    <head>
        
    @include('layout.head')

    </head>
	<body class="page">
		<div id="page" class="hfeed page-wrapper">
			@include('login.header')

			<div id="site-main" class="site-main">
				
			@include('login.isi')

			@include('login.footer')

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
		<script src="{{ asset('popper/js/popper.min.js')}}"></script>
		<script src="{{ asset('jquery/js/jquery.min.js')}}"></script>
		<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('slick/js/slick.min.js')}}"></script>
		<script src="{{ asset('countdown/js/jquery.countdown.min.js')}}"></script>
		<script src="{{ asset('mmenu/js/jquery.mmenu.all.min.js')}}"></script>
		<script src="{{ asset('slider/js/tmpl.js')}}"></script>
		<script src="{{ asset('slider/js/jquery.dependClass-0.1.js')}}"></script>
		<script src="{{ asset('slider/js/draggable-0.1.js')}}"></script>
		<script src="{{ asset('slider/js/jquery.slider.js')}}"></script>
		
		<!-- Site Scripts -->
		<script src="{{ asset('assets/js/app.js')}}"></script>
	</body>

<!-- Mirrored from caketheme.com/html/ruper/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:37:37 GMT -->
</html>