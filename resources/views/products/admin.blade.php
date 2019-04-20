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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	</style>
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="box-shadow: 0px 4px 3px;">
		<div class="container">
			<a class="navbar-brand" href="#">Mega Jordan</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/admin">Home
							<span class="sr-only">(current)</span>
						</a>
                    </li>
                    <li class="nav-item active">
						<a class="nav-link" href="">
							
						</a>
					</li>
                    <li class="nav-item active">
						<a class="nav-link" href=".">Products
							<span class="sr-only">(current)</span>
						</a>
                    </li>
                   
					
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Content -->
	<div class="container"style="overflow:visible;">

		<div class="row">

			

			

					@yield('mytable')


				

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

		$('#edit').on('show.bs.modal', function (e) {
			var button = $(e.relatedTarget);
			var title = button.data('title');

			var modal = $(this);
			modal.find('#item-title').val(title);
		})
		
		
		
		
		
		
		
		
		
			
			

		</script>
</body>

</html>
