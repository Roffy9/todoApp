@extends('layouts.app')
@section('content')

<div class="card">
	<div class="card-header text-center">
		<b>Todos App</b>
	</div>
	<div class="card-body">
		<div class="row justiy-content-center">
			<div class="col-md-12">
			<ul class="list-group list-group-flush">
					@foreach($todo as $todos)

					<li class="list-group-item">{{ $todos->name }}
						@if($todos->completed == false)
					<a href="/todo/{{ $todos->id }}/complete">
						<button class="btn btn-warning btn-sm float-right" style="color: white;">Completed</button>
					</a>
					@endif
					<a href="/todo/{{ $todos->id }}">
						<button class="btn btn-primary btn-sm float-right mr-2">View </button>
					</a>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection