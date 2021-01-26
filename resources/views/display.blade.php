@extends('layouts.master2')
@section('Title', 'Display Data')
@section('body')

<style type="text/css">
	table{
		background: white;
		height: 300px;
		width: 95%;
		border-radius: 5px;
		margin-left: 40px;
	}
	td{
		font-size: 15px;
		font-family: sans-serif;
		text-align: center;
	}
</style>
<table border="1" cellspacing="0">
	
	<tr>
		<td>Name:</td>
		<td>Father Name:</td>
		<td>Address:</td>
		<td>Gender:</td>
		<td>State:</td>
		<td>City:</td>
		<td>Date Of Birth:</td>
		<td>Pincode:</td>
		<td>Course:</td>
		<td>Email:</td>
	</tr>
	<tr>
		<td>{{ $name }}</td>
		<td>{{ $father_name }}</td>
		<td>{{ $address }}</td>
		<td>{{ $gender }}</td>
		<td>{{ $state }}</td>
		<td>{{ $city }}</td>
		<td>{{ $dob }}</td>
		<td>{{ $pincode }}</td>
		<td>{{ $course }}</td>
		<td>{{ $email }}</td>
	</tr>

</table>
	
	
	
	
	
	
	
	
	
	

@endsection