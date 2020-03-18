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
			<li class="breadcrumb-item"><a href="{{route('employees')}}" class="text-decoration-none">Employees</a></li>
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

			<!-- Employees Section -->
			@if(!auth::guest() && Auth::user()->role == 1)
				<a href="{{route('employeecreate')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Employee</a>
			@endif
			<br>
			<br>
				<table class="table table-striped text-center table-responsive-lg">
					<thead class="thead-dark">
						<tr>
                            <th>Employee's Full Name</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Company</th>
							@if(!auth::guest() && Auth::user()->role == 1)
                                <th>Edit</th>
                                <th>Delete</th>
							@endif
						
						</tr>
					</thead>
					<tbody>

						@foreach($employees as $employee)
						<tr>
								<td><i class="fa fa-user"> <a href="{{route('employeeshow',$employee->id)}}">{{$employee->firstname}} {{$employee->lastname}}</a></td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>{{$employee->company_id}}</td>
								@if(!auth::guest() && Auth::user()->role == 1)
                                    <td>
                                        <a href="{{route('employeeedit',$employee->id)}}"><i class="far fa-edit"></i></a>
                                    </td>
                                    
                                    <td>
                                    <a href="{{route('employeedestroy',$employee->id)}}" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                                    </td>
								@endif

								
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$employees->links()}}
		</div>
			<br>
			
			<!-- End of Employees Section -->

			<br>
			<br>
			<!-- Footer Section-->
			@include('footer')
			<!-- End of Footer Section-->
	</body>
</html>














