@extends('admin')

@section('title', '| All Services')

@section('content')



		<div class="row">
			<div class="col-md-10">
			<h1>Services</h1>
		</div>
		<div class="col-md-2">
		
			<a href="{{ route('addservices.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Add New Service</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>S.N</th>
					<th>Title</th>

					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>

					@foreach ($services as $service)

						<tr>
							<th>{{ $service->id }}</th>
							<td><a href="{{ route('addservices.show', $service->id) }}" >{{ $service->title }}</a></td>
							<td>{{ date('M j, Y', strtotime($service->created_at)) }}</td>
					@endforeach

				</tbody>
			</table>


		</div>
	</div>



@endsection
