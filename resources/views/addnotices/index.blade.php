@extends('admin')

@section('title', '| All Notices')

@section('content')
<div class="row">
		<div class="col-md-10">
			<h1>Notices</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('addnotices.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Add New notice</a>
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

					@foreach ($notices as $notice)

						<tr>
							<th>{{ $notice->id }}</th>
					<td>	<a href="{{ route('addnotices.show', $notice->id) }}">	{{ $notice->title }}</a></td>
							<td>{{ date('M j, Y', strtotime($notice->created_at)) }}</td>

					@endforeach

				</tbody>
			</table>


		</div>
	</div>



@endsection
