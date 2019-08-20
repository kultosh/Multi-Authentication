@extends('Admin.dashboard')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 mt-3 offset-md-3">
				<strong style="font-size: 20px;color:#7b8793">Admin</strong>
				@if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $error)
						<ul>
							<li>{{$error}}</li>
						</ul>
						@endforeach
					</div>
				@endif
				<form method="post" action="{{route('studentRegisterPost')}}" class="jumbotron test">
					{{csrf_field()}}
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="uname" class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="number" name="cnt" class="form-control">
					</div>
					<div class="form-group">
						<label>Faculty</label>
						<input type="text" name="fclt" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pwd" class="form-control">
					</div>
					<div class="form-group">
						<label>Gender</label>
							<input type="radio" name="gender" value="m"><label>Male</label>
							<input type="radio" name="gender" value="f"><label>Female</label>
					</div>
					<div class="form-group">
						<input type="submit" name="sbt" class="btn btn-primary" value="Register">
					</div>
				</form>
			</div>	
		</div>
	</div>
@endsection