@extends('admin')

@section('title', '| Services')

@section('content')
<h3>Add Service Title </h3>
<div class="form-group">

  {!! Form::open(array('route' => 'addservices.store', 'data-parsley-validate' => '', 'files' => true)) !!}
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, array( 'required' => '', 'maxlength' => '255')) }}<br>
    {{ Form::label('img', 'Upload a Featured Image') }}
    {{ Form::file('img') }}
    {{ Form::submit('Create Service Title', array('class' => 'btn btn-success ', 'style' => 'margin-top: 20px;')) }}
  {!! Form::close() !!}

</div>
@endsection
