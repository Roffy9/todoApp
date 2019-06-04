@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row text-center my-5">
		<div class="col-md-12">
			<div class="card card-default">
				<div class="card-header">
					{{ $todo->name }}
				</div>
				<div class="card-body">
					<ul class="list-group">
						<li class="list-group-item">{{ $todo->description }}</li>
					</ul>
					<a href="/todo/{{ $todo->id }}/edit" class="btn btn-success btn-sm my-2">Update Todo</a>
					<a href="/todo/{{ $todo->id }}/delete" class="btn btn-danger btn-sm my-2">Delete Todo</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection