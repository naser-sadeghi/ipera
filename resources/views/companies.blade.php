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
			<li class="breadcrumb-item"><a href="{{route('companies')}}" class="text-decoration-none">Companies</a></li>
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

			<!-- Companies Section -->
			@if(!auth::guest() && Auth::user()->role == 1)
				<a href="{{route('create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Company</a>
			@endif
			<br>
			<br>
				<table class="table table-striped text-center table-responsive-lg">
					<thead class="thead-dark">
						<tr>
							<th>Logo</th>
							<th>Company</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Website</th>
							@if(!auth::guest() && Auth::user()->role == 1)
								<th>Edit</th>
								<th>Delete</th>
							@endif
							
						</tr>
					</thead>
					<tbody>

						@foreach($companies as $company)
						<tr>
								<td><a href="{{route('show',$company->id)}}"><img src="<?php echo asset('storage/logos/'.$company->logo) ?>" class="img-fluid d-block mx-auto" alt="companyLogo" width="100px" height="100"></a></td>
								
								<td>{{$company->name}}</td>
								<td>{{$company->address}}</td>
								<td>{{$company->phone}}</td>
								<td>{{$company->email}}</td>
								<td><a href="{{$company->website}}" title="{{$company->name}}" class="text-decoration-none text-info">{{$company->website}}</a></td>
								@if(!auth::guest() && Auth::user()->role == 1)
									<td>
										<a href="{{route('edit',$company->id)}}"><i class="far fa-edit"></i></a>
									</td>
									<td>
										<a href="{{route('destroy',$company->id)}}" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
									</td>
								@endif

								
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$companies->links()}}
		</div>
			<br>
			
			<!-- End of Companies Section -->

			<br>
			<br>
			<!-- Footer Section-->
			@include('footer')
			<!-- End of Footer Section-->
	</body>
</html>














