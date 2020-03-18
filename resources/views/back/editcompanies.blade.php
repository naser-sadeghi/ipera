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
			<li class="breadcrumb-item"><a href="{{route('back.index')}}" class="text-decoration-none">Admin Control Panel</a></li>
            <li class="breadcrumb-item"><a href="{{route('edit',$company->id)}}" class="text-decoration-none">Edit Companies</a></li>
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
            <p class="text-center font-weight-bold">Please change the inputs that you want and then click on update</p>
            
            <form action="{{route('update',$company->id)}}" method="POST" enctype="multipart/form-data" class="w-50 mx-auto d-block">
                @method('put')
                @csrf
                

                <div class="form-group">
                    <label for="name">Company's Name:</label>
					<div class="input-group mb-3">
						<input type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{$company->name}}"  placeholder="Enter Company's Name">
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
						<input type="text" class="form-control @error('title') is-invalid @enderror" name="address" value="{{$company->address}}" placeholder="Enter Company's Address">
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
						<input type="phone" class="form-control @error('title') is-invalid @enderror" name="phone" value="{{$company->phone}}" placeholder="Enter Company's Phone">
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
						<input type="email" class="form-control @error('title') is-invalid @enderror" name="email" value="{{$company->email}}" placeholder="Enter Company's Email">
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
						<input type="url" class="form-control @error('title') is-invalid @enderror" name="website" value="{{$company->website}}" placeholder="Enter Company's Website">
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
						<input type="file" class="custom-file-input @error('logo') is-invalid @enderror " name="logo" id="customFile" value="{{$company->logo}}">
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
                    <button type="submit" class="btn btn-success form-control">Update</button>
                </div>
            </form>
        </div>
		
		<br>
		<br>
			<!-- Footer Section-->
			@include('footer')
			<!-- End of Footer Section-->
	</body>
</html>














