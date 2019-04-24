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
			position: relative;
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

			<div class="col-lg-3 col-md-12 col-xs-12">

				<br>
				<br>
				<br>
				<div class="list-group">
					<a class="list-group-item" title="All" href="#"
						onclick="filterSelection('all');return false;">All</a>
					@foreach ($category as $c)
						<a class="list-group-item" title="{{$c->name}}" href="#"
						onclick="filterSelection('{{strtolower($c->name)}}');return false;">{{$c->name}}</a>	
					@endforeach
					
				</div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9 col-md-10 col-sm-11 col-xs-12 mx-auto">

				<div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
					<div class="blog-slider">
						<div class="blog-slider__wrp swiper-wrapper">
							<div class="blog-slider__item swiper-slide">
								<div class="blog-slider__img">

									<img src="img/works/51785916_2402705690016493_8102523758876557312_o.jpg" alt="">
								</div>
								<div class="blog-slider__content">
									<span class="blog-slider__code">26 December 2019</span>
									<div class="blog-slider__title">Lorem Ipsum Dolor</div>
									<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing
										elit. Recusandae voluptate repellendus magni illo ea animi? </div>
									<a href="#" class="blog-slider__button">READ MORE</a>
								</div>
							</div>
							<div class="blog-slider__item swiper-slide">
								<div class="blog-slider__img">
									<img src="img/works/44198848_2321878194765910_2163770559123423232_o.jpg" alt="">
								</div>
								<div class="blog-slider__content">
									<span class="blog-slider__code">26 December 2019</span>
									<div class="blog-slider__title">Lorem Ipsum Dolor2</div>
									<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing
										elit. Recusandae voluptate repellendus magni illo ea animi?</div>
									<a href="#" class="blog-slider__button">READ MORE</a>
								</div>
							</div>

							<div class="blog-slider__item swiper-slide">
								<div class="blog-slider__img">
									<img src="img/works/desktop.jpg" alt="">
								</div>
								<div class="blog-slider__content">
									<span class="blog-slider__code">26 December 2019</span>
									<div class="blog-slider__title">Lorem Ipsum Dolor</div>
									<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing
										elit. Recusandae voluptate repellendus magni illo ea animi?</div>
									<a href="#" class="blog-slider__button">READ MORE</a>
								</div>
							</div>

							<div class="blog-slider__item swiper-slide">
								<div class="blog-slider__img">
									<img src="img/works/desktop.jpg" alt="">
								</div>
								<div class="blog-slider__content">
									<span class="blog-slider__code">26 December 2019</span>
									<div class="blog-slider__title">Lorem Ipsum Dolor</div>
									<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing
										elit. Recusandae voluptate repellendus magni illo ea animi?</div>
									<a href="#" class="blog-slider__button">READ MORE</a>
								</div>
							</div>

						</div>
						<div class="blog-slider__pagination"></div>
					</div>
				</div>

				<div class="row project-wrapper">

					@yield('stuff')


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
		filterSelection("all")

		function filterSelection(c) {
			var x, i;
			x = document.getElementsByClassName("filterDiv");
			if (c == "all") c = "";
			for (i = 0; i < x.length; i++) {
				w3RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			}
		}

		function w3AddClass(element, name) {
			var i, arr1, arr2;
			arr1 = element.className.split(" ");
			arr2 = name.split(" ");
			for (i = 0; i < arr2.length; i++) {
				if (arr1.indexOf(arr2[i]) == -1) {
					element.className += " " + arr2[i];
				}
			}
		}

		function w3RemoveClass(element, name) {
			var i, arr1, arr2;
			arr1 = element.className.split(" ");
			arr2 = name.split(" ");
			for (i = 0; i < arr2.length; i++) {
				while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);
				}
			}
			element.className = arr1.join(" ");
		}

		// Add active class to the current button (highlight it)
		var btnContainer = document.getElementById("myBtnContainer");
		var btns = btnContainer.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
			btns[i].addEventListener("click", function () {
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			});
		}

	</script>
</body>

</html>
