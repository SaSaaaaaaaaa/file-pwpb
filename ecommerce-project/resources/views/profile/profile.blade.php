<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from caketheme.com/html/ruper/page-my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:37:05 GMT -->
<head>

    @include('layout.head')

	</head>
	
	<body class="blog">
		<div id="page" class="hfeed page-wrapper">
			
            @include('layout.header-all')

			<div id="site-main" class="site-main">
				
                @include('profile.profileisi')

			</div>

			@include('layout.footer')
            
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

		<!-- Page Loader -->
		<div class="page-preloader">
	    	<div class="loader">
	    		<div></div>
	    		<div></div>
	    	</div>
	    </div>

		<!-- Dependency Scripts -->
		<script src="{{route('libs/popper/js/popper.min.js')}}"></script>
		<script src="{{route('libs/jquery/js/jquery.min.js')}}"></script>
		<script src="{{route('libs/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{route('libs/slick/js/slick.min.js')}}"></script>
		<script src="{{route('libs/countdown/js/jquery.countdown.min.js')}}"></script>
		<script src="{{route('libs/mmenu/js/jquery.mmenu.all.min.js')}}"></script>
		<script src="{{route('libs/slider/js/tmpl.js')}}"></script>
		<script src="{{route('libs/slider/js/jquery.dependClass-0.1.js')}}"></script>
		<script src="{{route('libs/slider/js/draggable-0.1.js')}}"></script>
		<script src="{{route('libs/slider/js/jquery.slider.js')}}"></script>
		
		<!-- Site Scripts -->
		<script src="{{route('assets/js/app.js')}}"></script>
	</body>

<!-- Mirrored from caketheme.com/html/ruper/page-my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 01:37:05 GMT -->
</html>