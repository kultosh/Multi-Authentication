<!DOCTYPE html>
<html>
<head>
	<title>SuperAdmin Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		*{
			font-family: Raleway,sans-serif,"Whitney SSm A", "Whitney SSm B";
			font-size: 12px;
			line-height: 1.9;
			color: #000;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 mt-4 offset-md-4">
				<strong style="padding-left: 100px;font-size: 20px;color:#7b8793">Super Admin</strong>
				<form method="post" action="{{route('superAdmin_login')}}" class="jumbotron">
					{{csrf_field()}}
					<div class="form-group">
						<label>email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="sbtn" class="btn btn-primary" value="Login">
					</div>
				</form>
				@if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
						<ul>
							<li>{{$error}}</li>
						</ul>
						@endforeach
					</div>
				@endif
			</div>	
		</div>
	</div>
</body>
</html>