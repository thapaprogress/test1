


        @extends('admin')

        @section('title', '| All Services')

        @section('content')





        	<div class="row">
        		<div class="col-md-10">
        			<h1>{{$service->title}} Service</h1>
        		</div>
            <div class="col-md-2">
              <h3>Edit Service Title</h3>
              			{{ Form::model($service, ['route' => ['addservices.update', $service->id], 'method' => "PUT"]) }}
              				{{ Form::label('name', "Title:") }}
              				{{ Form::text('title', $service->title) }}
              				{{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
              			{{ Form::close() }}
                    <img src = "{{ asset('images/'.$service->img) }}" height="250px" width="300px">
                    {!! Form::open(array('route' => ['addservices.update', $service->id], 'method' => "PUT", 'data-parsley-validate' => '', 'files' => true)) !!}
                    {{ Form::file('img') }}
                    {{ Form::submit('Change Image', array('class' => 'btn btn-success ', 'style' => 'margin-top: 20px;')) }}
                    {!! Form::close() !!}
                    {{ Form::open(['route' => ['addservices.delete', $service->id], 'method' => 'DELETE']) }}
        							{{ Form::submit('Delete Title', ['class' => 'btn btn-danger']) }}
        						{{ Form::close() }}
        		</div>
            <div class="form-group">
            <form method="POST" action="/addservices">
              {{ csrf_field() }}
              <input type="hidden" name="service_id" value="{{ $service->id }}">
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
                  @if($description->service_id == $service->id)
                    <tr>
                      <th>{{ $description->id }}</th>
                      <td >{{ $description->body }}</td>

                      <td>{{ date('M j, Y', strtotime($description->created_at)) }}</td>
                      <td>



                          <a href="{{ route('addservices.edit',$description->id) }}" class="btn btn-primary pull-right btn-block" style="margin-top:20px;">Edit</a>


                          {{ Form::open(['route' => ['addservices.destroy', $description->id], 'method' => 'DELETE']) }}
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
