<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
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
			<li class="breadcrumb-item"><a href="{{route('login')}}" class="text-decoration-none">Login</a></li>
		</ul>
		<div class="container text-center">
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
			<form action="{{route('login')}}" method="POST" class="w-50 mx-auto d-block">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
					<div class="input-group mb-3">
						<input type="email" class="form-control @error('title') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Enter Email">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

				<div class="form-group">
					<label for="password">Password:</label>
					<div class="input-group mb-3">
					<input type="password" class="form-control @error('title') is-invalid @enderror" name="password" placeholder="Enter Password">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-fingerprint"></i></span>
						</div>
					</div>
                    @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-success form-control">Login</button>
                </div>

				<div class="form-check mb-3">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" name="remember">Remember me
					</label>
				</div>
            </form> 
        </div>

		<br>

		<!-- Footer Section-->
		@include('footer')
		<!-- End of Footer Section-->
	</body>
</html>














