<!DOCTYPE html>
<html lang="en">
<head>

    @include('layout.head')
    
</head>
	<body class="shop">
		<div id="page" class="hfeed page-wrapper">
            
            @include('shop.header')

            @include('shop.isi')

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
		<script src="{{asset('libs/slider/js/tmpl.js')}}"></script>
		<script src="{{asset('libs/slider/js/jquery.dependClass-0.1.js')}}"></script>
		<script src="{{asset('libs/slider/js/draggable-0.1.js')}}"></script>
		<script src="{{asset('libs/slider/js/jquery.slider.js')}}"></script>
		
		<!-- Site Scripts -->
		<script src="{{asset('assets/js/app.js')}}"></script>
	</body>

<!-- Mirrored from caketheme.com/html/ruper/shop-grid-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:29:16 GMT -->
</html>