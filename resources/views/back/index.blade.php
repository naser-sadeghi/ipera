<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Administrator</title>
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
			<li class="breadcrumb-item"><a href="{{route('back.index')}}" class="text-decoration-none">Admin Control Panel</a></li>
		</ul>
		

		@if($errors->any())
			<div class="alert alert-danger w-50 mx-auto d-block">
				<ul>
					@foreach($errors->all() as $error)
						<li>
							{{$error}}
						</li>
					@endforeach
				</ul>
			</div>
		@endif

		@if(session('success'))
                <div class="alert alet-dismissible alert-info mx-auto d-block">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif

		@if(session('warning'))
			<div class="alert alet-dismissible alert-danger mx-auto d-block">
				An error with {{session('warning')}} code, has occured.
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
		@endif

			
		<div class="container-fluid">			
			<div class="row">
				<nav class="col col-md-3 bg-light">
					<ul class="nav nav-pills flex-column" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#" data-toggle="pill" onClick="adminSidebar(1)">Companies</a>
						</li>
						<br>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="pill" onClick="adminSidebar(2)">Employees</a>
						</li>
						<br>
					</ul>
				</nav>
				<div class="col col-md-9">
				<div class="bg-light" id="section1">
					<a href="{{route('create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Company</a>
					<br>
					<br>
					<table class="table table-striped table-responsive-xlg">
						<thead class="thead-dark">
							<tr>
								<th>Logo</th>
								<th>Company</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Website</th>
								<th>Edit</th>
								<th>Delete</th>
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
									<td>
										<a href="{{route('edit',$company->id)}}"><i class="far fa-edit"></i></a>
									</td>
								
									<td>
									<a href="{{route('destroy',$company->id)}}" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$companies->links()}}
				</div>
				<div class="bg-light collapse" id="section2">
				<a href="{{route('employeecreate')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Employee</a>
					<br>
					<br>
					<table class="table table-striped table-responsive-lg text-center">
						<thead class="thead-dark">
							<tr>
								<th>Employee's Full Name</th>
								<th>E-mail</th>
								<th>Phone</th>
								<th>Company</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>

							@foreach($employees as $employee)
								<tr>
									<td><i class="fa fa-user"> <a href="{{route('employeeshow',$employee->id)}}">{{$employee->firstname}} {{$employee->lastname}}</a></td>
									<td>{{$employee->email}}</td>
									<td>{{$employee->phone}}</td>
									<td>{{$employee->company_id}}</td>
									<td>
										<a href="{{route('employeeedit',$employee->id)}}"><i class="far fa-edit"></i></a>
									</td>
								
									<td>
									<a href="{{route('employeedestroy',$employee->id)}}" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$employees->links()}}
				</div>
				</div>
			</div>

		</div>
		<br>
		<br>

		<!-- Footer Section-->
		@include('footer')
		<!-- End of Footer Section-->

		<script>
			function adminSidebar(section){
					if(section == 1){
						document.getElementById('section2').classList.add('collapse');
						document.getElementById('section1').classList.remove('collapse');		
					}	
					if(section == 2){
						document.getElementById('section1').classList.add('collapse');
						document.getElementById('section2').classList.remove('collapse');	
					}
				}
		</script>
		
	</body>
</html>














