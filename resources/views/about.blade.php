<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>{{$pageTitle}}</title>
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
		@include('topMenu')
		<!-- End of Header Section -->

		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('index')}}" class="text-decoration-none">Home</a></li>
			<li class="breadcrumb-item"><a href="{{route('about')}}" class="text-decoration-none">About Us</a></li>
		</ul>

		<div class="container">
			<!-- Logo Section -->
			<div class="row">
				<div class="col">
					<a href="#">
					<img src="images/logo.png" width="auto" height="auto" alt="websiteLogo" class="img-fluid d-block mx-auto float-left">
					</a>
                    
				</div>
			</div>
			<!-- End of Logo Section -->
            <br>
            <br>
            <h2>About This Project:</h2>
            <p>This project has been implemented by Naser Sadeghi Gharagoz for IPERA Solutions as a Demo. <br><br>In this project's home page, a carousel is designed which benefits from banners that have been downloaded from freepik.com and edited in Photoshop. <br><br>Here are the links:</p>
            <a href="https://www.freepik.com/free-photos-vectors/business">Business vector created by freepik - www.freepik.com</a>
            <br>
            <a href="https://www.freepik.com/free-photos-vectors/technology">Technology vector created by pikisuperstar - www.freepik.com</a>
            <br>
            <a href="https://www.freepik.com/free-photos-vectors/music">Music vector created by pch.vector - www.freepik.com</a>
            <br>
            <a href="https://www.freepik.com/free-photos-vectors/banner">Banner vector created by roserodionova - www.freepik.com</a>
            <br>
            <br>
        </div>
            
			<!-- Footer Section-->
			@include('footer')
			<!-- End of Footer Section-->
	</body>
</html>














