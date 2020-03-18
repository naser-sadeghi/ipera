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
		@include('topMenu')
		<!-- End of Header Section -->

        <ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('index')}}" class="text-decoration-none">Home</a></li>
			<li class="breadcrumb-item"><a href="{{route('employees')}}" class="text-decoration-none">Employees</a></li>
			<li class="breadcrumb-item"><a href="{{route('employees')}}/{{$employee->id}}" class="text-decoration-none">{{$employee->firstname}} {{$employee->lastname}}</a></li>
		</ul>

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
			<br>

			<!-- Employee Section -->
			<div class="container-fluid text-center">
				<div class="card mx-auto">
					<div class="card-body">
						<h4 class="card-title">{{$employee->firstname}} {{$employee->lastname}}</h4>
						<br>
						<p class="card-text text-left">
							<span><i class="fa fa-phone"></i> Phone: {{$employee->phone}}</span>
							<br>
							<br>
							<span><i class="fa fa-envelope"></i> Email: {{$employee->email}}</span>
							<br>
							<br>
							<span><i class="fa fa-bulding"></i> Company: {{$company}}</span>
						</p>
						@if(!auth::guest() && Auth::user()->role == 1)
							<a href="{{route('employeeedit',$employee->id)}}" class="btn btn-primary">Edit Company</a>
						@endif
					</div>
				</div>
       		</div>

			<!-- End of Employee Section -->
		</div>
		
		<br>
		<br>
			<!-- Footer Section-->
			@include('footer')
			<!-- End of Footer Section-->
	</body>
</html>














