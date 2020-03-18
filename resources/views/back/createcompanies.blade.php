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
            <li class="breadcrumb-item"><a href="{{route('create')}}" class="text-decoration-none">Create Companies</a></li>
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

            <p class="text-center font-weight-bold">Please fill the inputs and then click save</p>
            
			<form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="mx-auto d-block w-50">
                @csrf
                <div class="form-group">
                    <label for="name">Company's Name:</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Company's Name" value="{{old('name')}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-building"></i></span>
						</div>
					</div>
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="address">Company's Address:</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter Company's Address" value="{{old('address')}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-map-marker"></i></span>
						</div>
					</div>
                    @error('address')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Company's Phone Number:</label>
					<div class="input-group mb-3">
						<input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Company's Phone" value="{{old('phone')}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-phone"></i></span>
						</div>
					</div>
                    @error('phone')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="email">Company's E-mail:</label>
					<div class="input-group mb-3">
						<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Company's Email" value="{{old('email')}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
					</div>
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="website">Company's Website:</label>
					<div class="input-group mb-3">
						<input type="url" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Enter Company's Website" value="{{old('website')}}">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fa fa-globe"></i></span>
						</div>
					</div>
                    @error('website')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="logo">Company's Logo <span class="text-danger">(Square & Minimum width and height: 100 pixels)</span>:</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input @error('logo') is-invalid @enderror " name="logo" id="customFile">
						<label class="custom-file-label" for="customFile">Choose file</label>
					</div>
					<script>
						$(".custom-file-input").on("change", function() {
							var fileName = $(this).val().split("\\").pop();
						$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
						});
					</script>
				   
				    @error('logo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>  

                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Save</button>
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














