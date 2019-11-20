@extends('admin')

@section('title', '| Edit Notices')


@section('content')

		<h3>Edit Service Description</h3>
		{{ Form::model($description, ['route' => ['addnotices.update', $description->id], 'method' => "PUT"]) }}
			{{ Form::textarea('body', $description->body) }}
			{{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
			<button onclick="goBack()" class="btn btn-danger">Cancel</button>

		{{ Form::close() }}
<script>
function goBack() {
 window.history.back();
}
</script>

@endsection
