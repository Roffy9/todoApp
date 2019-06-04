<!DOCTYPE html>
<html>
<head>
	<title>Todo Apps</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="/">Todos App</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/">Todos App</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="new-todo">Create Todos</a>
	      </li>
	    </ul>

	  </div>
	</nav>

	<div class="container">
	  		@if(session()->has('success'))
		  		<div class="alert alert-success">
		  			{{ session()->get('success') }}
		  		</div>
	  		@endif
	 </div>

	@yield('content')
</div>
</body>
</html>