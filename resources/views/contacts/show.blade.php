@extends('admin')

@section('title', "| $contact->name ")

@section('content')
<h3> Contact Detail </h3>
<br>
<label>Full Name:</label> {{$contact->name}}<br>
<label>E-Mail:</label> {{$contact->email}}<br>
@if($contact->message != '')
<label>Comment:</label> {{$contact->message}}<br>
@endif

{{ Form::model($contact, ['route' => ['contacts.update', $contact->id], 'method' => "PUT"]) }}


  {{ Form::hidden('archived','Y') }}

  {{ Form::submit('Archive', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
{{ Form::close() }}






@endsection
