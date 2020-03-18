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
			<li class="breadcrumb-item"><a href="{{route('back.index')}}" class="text-decoration-none">Admin Control Panel</a></li>
            <li class="breadcrumb-item"><a href="{{route('employeeedit',$employee->id)}}" class="text-decoration-none">Edit Employees</a></li>
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

		<div class="container">
			<br>
			<br>
            <p class="text-center font-weight-bold">Please Enter the Employee's details:</p>
            
			<form action="{{route('employeeupdate',$employee->id)}}" method="POST"  class="mx-auto d-block w-50">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="firstname">Employee's Name:</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Employees's Name" value="{{$employee->firstname}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
					</div>
                    @error('firstname')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="lastname">Employee's Lastname:</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control @error('address') is-invalid @enderror" name="lastname" placeholder="Company's lastname" value="{{$employee->lastname}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
					</div>
                    @error('lastname')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

        
                <div class="form-group">
                    <label for="email">Employee's E-mail:</label>
					<div class="input-group mb-3">
						<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Employee's Email" value="{{$employee->email}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="phone">Employee's Phone:</label>
					<div class="input-group mb-3">
						<input type="phone" class="form-control @error('website') is-invalid @enderror" name="phone" placeholder="Employee's phone" value="{{$employee->phone}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-phone"></i></span>
						</div>
					</div>
                    @error('phone')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="company">Select Employee's Company <span class="text-danger">(Current Company:{{$employee->firstname}}):</span></label>
                    <select class="form-control" id="company" name="company">
						@foreach($companies as $company)	
							<option value="{{$company->id}}">{{$company->name}}</option>
						@endforeach 
                    </select>
				</div>
				@error('companies')
					<div class="alert alert-danger">{{$message}}</div>
				@enderror 

                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Update</button>
                </div>

            </form>

			<br>
			<br>
        </div>
			<!-- Footer Section-->
			@include('footer')
			<!-- End of Footer Section-->
	</body>
</html>














