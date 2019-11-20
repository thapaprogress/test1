@extends('admin')

@section('title', '| Complaints')

@section('content')



	<div class="row">
		<div class="col-md-10">
			<h1>Complains</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('complain.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Archieved Complaints</a>
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
					<th>Name</th>
          <th>Product</th>
          <th>Model</th>
          <th>Complaint</th>
          <th>Contact Number</th>
					<th>Address</th>
          <th>Email</th>
					<th>Registered Date</th>
				</thead>

				<tbody>

					@foreach ($complains as $complain)
          @if($complain->archived == "N")
						<tr>
							<th>{{ $complain->id }}</th>
							<td><a href="{{ route('complain.show', $complain->id) }}">{{ $complain->name }}</a></td>
              <td>{{ $complain->product }}</td>
              <td>{{ $complain->model }}</td>
              <td>{{ $complain->complain }}</td>
              <td>{{ $complain->phone }}</td>
							<td>{{ $complain->address }}</td>
              <td>{{ $complain->email}}</td>

							<td>{{ date('M j, Y', strtotime($complain->created_at)) }}</td>
              	<td>{{ Form::model($complain, ['route' => ['complain.update', $complain->id], 'method' => "PUT"]) }}


								  {{ Form::hidden('archived','Y') }}

								  {{ Form::submit('Archive', ['class' => 'btn btn-success']) }}
								{{ Form::close() }}</td>
          @endif
					@endforeach

				</tbody>
			</table>


		</div>
	</div>



@endsection
