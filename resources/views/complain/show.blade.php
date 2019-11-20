@extends('admin')

@section('title', "| $complain->name ")

@section('content')
<h3> Complain Detail </h3>
<br>
<label>Full Name:</label> {{$complain->name}}<br>
<label>Product:</label> {{$complain->product}}<br>
@if($complain->model != '')
<label>Model:</label> {{$complain->model}}<br>
@endif
<label>Complaint:</label> {{$complain->complain}}<br>
<label>Contact Number:</label> {{$complain->phone}}<br>
@if($complain->email != '')
<label>Email:</label> {{$complain->email}}<br><hr>
@endif
{{ Form::model($complain, ['route' => ['complain.update', $complain->id], 'method' => "PUT"]) }}


  {{ Form::hidden('archived','Y') }}

  {{ Form::submit('Archive', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
{{ Form::close() }}






@endsection
