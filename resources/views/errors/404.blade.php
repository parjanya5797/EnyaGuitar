@extends('home-master')

@section('page-title')	
ERROR	
@endsection

@section('content')
<div class="container-fluid">
	<div class="container" style="padding:100px;">
		<h1 style="text-align: center; font-size: 50px;">404 ERROR</h1>
		<h3 style="text-align: center; font-size: 45px;">Sorry, the page you are looking for is not found.</h3>
	
		<a href="{{url('home')}}" style="text-align: center; color: var(--primary-color);"><h2>Go to home</h2></a>
	</div>
</div>

@endsection