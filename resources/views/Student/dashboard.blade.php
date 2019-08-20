<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css">

		*{
			font-family: Raleway,sans-serif;
/*			font-size: 12px;*/
			line-height: 1.9;
/*			color: #d3e0e9*/
		}

		.t{
			height: 100vh;
			overflow: visible;
		}

		.bg-dark{
			background-color: #48413c !important;
			border-top: 1px solid #fff;	
		}

		.content{
			font-size: 12px;
		}

		.profile{
			padding-left: 39px;
			font-size: 16px;
		}

		ul{
			text-decoration: none;
		}

		ul li{
			list-style: none;
		}

		ul li a{
			color: #fff;
			font-size: 12px;
		}

		.profile>a{
			text-decoration: unset;
			color: #fff;
		}

	</style>
</head>
<body>
	<div class="wrapper">
			<div class="row" style="background: #48413c; color: #fff;">	
				<div class="col-md-12">
					<nav class="navbar navbar-light">
						<strong class="profile"><a href="{{route('studentDashboard')}}">Admin</a></strong>
						<a class="navbar-brand">Library Management System</a>
						<a href="{{route('Student_logout')}}" style="text-decoration: none"><button class="btn btn-danger btn-block">Logout</button></a>
					</nav>
				</div>
			</div>	
	</div>



</body>
</html>