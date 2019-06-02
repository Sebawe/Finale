<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Products</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/shop-homepage.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">

	<link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	<style>
		.filterDiv {
			display: none !important;


		}

		.filterDiv>div {

			opacity: 0;
			transition: opacity .5s linear;
		}

		.show {
			display: block !important;

		}

		.show>div {
			opacity: 1 !important;
			transition: opacity .5s linear;
		}

		.container {
			margin-top: 20px;
			overflow: hidden;
		}

		/* Style the buttons */
		.btn {
			border: none;
			outline: none;
			padding: 12px 16px;
			background-color: #f1f1f1;
			cursor: pointer;
		}

		.btn:hover {
			background-color: #ddd;
		}

		.btn.active {
			background-color: #666;
			color: white;
		}

		.card-text {
			/* max-height: 4rem; */
			/* overflow: hidden; */
		}
		.mycard {
			box-shadow: 5px 10px 20px rgba(34, 35, 58, 0.2);
			
			transition: all 0.3s ease 0s !important;
			top: 0;
			right: 0;
		}
		.mycard:hover {
			position: relative;
			right:5px;
			top:5px;
		}

	</style>
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-0">
		
			<a class="navbar-brand p-0 h-100" href="/">Mega Jordan</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/maintenance">Maintenance</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/#contact">Contact</a>
					</li>
				</ul>
			</div>
		
	</nav>

	<!-- Page Content -->
	<div class="container">

		<div class="row">

			<div class="col-lg-3 col-md-12 col-xs-12 filter-container">

				<br>
				<br>
				<br>
				<div class="list-group myfilter">
					<a class="list-group-item text-white mybgblue" data-filter="all">
						All
					</a>
					@foreach ($category as $c)
						<a class="list-group-item" data-filter="{{strtolower($c->name)}}">{{$c->name}}</a>
					@endforeach
					<li class="list-group-item text-white mybgblue" data-filter="all">
							Brands
					</li>
					@foreach ($brand as $c)
						<a class="list-group-item" data-filter="{{strtolower($c->name)}}">{{$c->name}}</a>
					@endforeach
					
				</div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9 col-md-10 col-sm-11 col-xs-12 mx-auto">

				<div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
					<div class="blog-slider">
						<div class="blog-slider__wrp swiper-wrapper">
							@foreach ($slider as $c)
							<div class="blog-slider__item swiper-slide">
									<div class="blog-slider__img">
	
										<img src="{{Storage::url($c->id) .'?'. time()}}" alt="">
									</div>
									<div class="blog-slider__content">
										<span class="blog-slider__code">26 December 2019</span>
									<div class="blog-slider__title">{{$c->title}}</div>
									<div class="blog-slider__text">{{$c->description}}</div>
										<a href="#" class="blog-slider__button">READ MORE</a>
									</div>
								</div>
							@endforeach
							
							

						</div>
						<div class="blog-slider__pagination"></div>
					</div>
				</div>
				<div class="row filtr-container">
				<div class="row">

					@yield('stuff')


				</div>
			</div>


			</div>
			<!-- /.row -->

		</div>
		<!-- /.col-lg-9 -->

	</div>
	<!-- /.row -->

	</div>
	<!-- /.container -->


	<!-- Footer -->


	<!-- Bootstrap core JavaScript -->
	<script src="/js/jquery/jquery.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
	<script src="/js/wow.min.js"></script>
	<script src="/js/jquery.filterizr.min.js"></script>
	<script>
		var swiper = new Swiper('.blog-slider', {
			spaceBetween: 30,
			effect: 'fade',
			loop: true,
			mousewheel: {
				invert: false,
			},
			// autoHeight: true,
			pagination: {
				el: '.blog-slider__pagination',
				clickable: true,
			}
		});

	</script>

	<script>
		
		var options = {
   animationDuration: 0.2, // in seconds
   filter: 'all', // Initial filter
   callbacks: { 
      onFilteringStart: function() { },
      onFilteringEnd: function() { },
      onShufflingStart: function() { },
      onShufflingEnd: function() { },
      onSortingStart: function() { },
      onSortingEnd: function() { }
   },
   controlsSelector: '', // Selector for custom controls
   delay: 0, // Transition delay in ms
   delayMode: 'progressive', // 'progressive' or 'alternate'
   easing: 'ease-out',
   filterOutCss: { // Filtering out animation
      opacity: 0,
      transform: 'scale(0.5)'
   },
   filterInCss: { // Filtering in animation
      opacity: 0,
      transform: 'scale(1)'
   },
   layout: 'sameSize', // See layouts
   multifilterLogicalOperator: 'or',
   selector: '.filtr-container',
   setupControls: true // Should be false if controlsSelector is set 
} 
var filterizd = $('.filtr-container').filterizr(options);
filterizd.filterizr('setOptions', options);
	</script>

	
</body>

</html>
