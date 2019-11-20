@extends('admin')

@section('title', '| All notices')

@section('content')


<div class="row">
		<div class="col-md-10">
			<h1>{{$notice->title}} notice</h1>
		</div>
    <div class="col-md-2">

      <h3>Edit Notice Title</h3>
      			{{ Form::model($notice, ['route' => ['addnotices.update', $notice->id], 'method' => "PUT"]) }}
      				{{ Form::label('name', "Title:") }}
      				{{ Form::text('title', $notice->title) }}

      				{{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
      			{{ Form::close() }}
							<img src = "{{ asset('images/'.$notice->img) }}" height="100px" width="100px">
						{!! Form::open(array('route' => ['addnotices.update', $notice->id], 'method' => "PUT", 'data-parsley-validate' => '', 'files' => true)) !!}
						{{ Form::file('img') }}
						{{ Form::submit('Change Image', array('class' => 'btn btn-success ', 'style' => 'margin-top: 20px;')) }}
						{!! Form::close() !!}

						{{ Form::open(['route' => ['addnotices.delete', $notice->id], 'method' => 'DELETE']) }}
							{{ Form::submit('Delete Title', ['class' => 'btn btn-danger']) }}
						{{ Form::close() }}
		</div>




    <div class="form-group">
    <form method="POST" action="/addnotices">
      {{ csrf_field() }}
      <input type="hidden" name="notice_id" value="{{ $notice->id }}">
    <textarea name="body" cols="100" rows="10" placeholder="Write Description" autofocus></textarea>
    <br>
    <input type="submit" value="Add" class="btn btn-success">
    </form>
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
					<th>Description</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
          @foreach ($descriptions as $description)
          @if($description->notice_id == $notice->id)
            <tr>
              <th>{{ $description->id }}</th>
              <td >{{ $description->body }}</td>

              <td>{{ date('M j, Y', strtotime($description->created_at)) }}</td>
              <td>
                  <a href="{{ route('addnotices.edit',$description->id) }}" class="btn btn-primary pull-right btn-block" style="margin-top:20px;">Edit</a>
                  {{ Form::open(['route' => ['addnotices.destroy', $description->id], 'method' => 'DELETE']) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'style' => 'margin-top:20px;']) }}
                  {{ Form::close() }}
            </td>
          @else
          @endif
          @endforeach
				</tbody>
			</table>
		</div>
	</div>



@endsection
