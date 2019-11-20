@extends('admin')

@section('title', '| Contacts')

@section('content')



	<div class="row">
		<div class="col-md-10">
			<h1>contacts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('contacts.index') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Unarchieved Contacts</a>
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
          <th>Message</th>
          <th>Email</th>
					<th>Contacted Date</th>
				</thead>

				<tbody>

					@foreach ($contacts as $contact)
          @if($contact->archived == "Y")
						<tr>
							<th>{{ $contact->id }}</th>
							<td><a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->name }}</a></td>
              <td>{{ $contact->message }}</td>
              <td>{{ $contact->email}}</td>
							<td>{{ date('M j, Y', strtotime($contact->created_at)) }}</td>
              	<td>{{ Form::model($contact, ['route' => ['contacts.update', $contact->id], 'method' => "PUT"]) }}
                {{ Form::hidden('archived','N') }}
                {{ Form::submit('Unarchive', ['class' => 'btn btn-success']) }}
              {{ Form::close() }}
              {{ Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'DELETE']) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
              {{ Form::close() }}</td>
          @endif
					@endforeach

				</tbody>
			</table>


		</div>
	</div>



@endsection
