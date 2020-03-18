<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo($pageTitle)?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<!-- Header Section -->
		@include('topmenu')
		<!-- End of Header Section -->

		<br>

		<div class="container">
			<!-- Logo Section -->
			<div class="row">
				<div class="col">
					<a href="{{route('index')}}">
						<img src="/images/logo.png" width="auto" height="auto" alt="websiteLogo" class="img-fluid d-block mx-auto float-left">
					</a>
                    
				</div>
			</div>
			<!-- End of Logo Section -->

			<br>

			<!-- Carousel Section -->
			<div id="slideShow" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/images/CAROUSEL.png" class="slideShowImage d-block mx-auto img-fluid" alt="firstImage" width="auto" height="auto">
					</div>
					<div class="carousel-item">
						<img  src="/images/CAROUSEL2.png" class="slideShowImage d-block mx-auto img-fluid" alt="secondImage" width="auto" height="auto">
					</div>
					<div class="carousel-item">
						<img src="/images/CAROUSEL3.png" class="slideShowImage d-block mx-auto img-fluid" alt="thirdImage" width="auto" height="auto">
					</div>
					<div class="carousel-item">
						<img src="/images/CAROUSEL4.png" class="slideShowImage d-block mx-auto img-fluid" alt="fourthImage" width="auto" height="auto">
					</div>
				</div>
			</div>
			
				
			<!-- End of Carousel Section -->
			
			<br>
			<br>

			<!-- Companies Section -->
			<div class=" mx-auto d-block text-center">
				<div class="card-deck mx-auto">
					@foreach($companies as $company)
							<div class="card mx-auto d-block">
								<div class="cardImage">
								<img src="<?php echo asset('storage/logos/'.$company->logo) ?>" class="card-img-top rounded img-fluid mx-auto" alt="companyLogo" width="100px" height="100">
								</div>
								<div class="card-body">
									<h4 class="card-title">{{$company->name}}</h4>
									<a href="#" class="stretched-link text-decoration-none">{{$company->website}}</a>
								</div>
							</div>
				@endforeach
				</div>
			</div>
			<br>
			
			<!-- End of Companies Section -->
			
		</div>
		
		<br>
		<br>
			<!-- Footer Section-->
			@include('footer')
			<!-- End of Footer Section-->
	</body>
</html>














