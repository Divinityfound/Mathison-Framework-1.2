<html>
	<head>
		@include('superAdmin.master.head')
	</head>
	<body>
		<div class='container'>
			<div class='row'>
				<div class='col-md12'>
					@yield('content')
				</div>
			</div>
		</div>
		@include('superAdmin.master.bootstrap-footer')
	</body>
</html>