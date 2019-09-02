@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')

<div class="container-fluid product-title">
	<h1>Product Name</h1>
</div>



<div class="container pa-tb">
	<div class="row">
		<div class="col-md-3">
			<a href="{{url('#')}}">
				<div class="home-product-card">
					<div class="home-product-image">
						<img src="{{url('public/images/1.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="home-product-card-info">
						<h6>Enya guitar product one</h6>
						<p>Rs.10,000/-</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{url('#')}}">
				<div class="home-product-card">
					<div class="home-product-image">
						<img src="{{url('public/images/2.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="home-product-card-info">
						<h6>Enya guitar product one</h6>
						<p>Rs.10,000/-</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{url('#')}}">
				<div class="home-product-card">
					<div class="home-product-image">
						<img src="{{url('public/images/3.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="home-product-card-info">
						<h6>Enya guitar product one</h6>
						<p>Rs.10,000/-</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{url('#')}}">
				<div class="home-product-card">
					<div class="home-product-image">
						<img src="{{url('public/images/4.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="home-product-card-info">
						<h6>Enya guitar product one</h6>
						<p>Rs.10,000/-</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{url('#')}}">
				<div class="home-product-card">
					<div class="home-product-image">
						<img src="{{url('public/images/5.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="home-product-card-info">
						<h6>Enya guitar product one</h6>
						<p>Rs.10,000/-</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{url('#')}}">
				<div class="home-product-card">
					<div class="home-product-image">
						<img src="{{url('public/images/6.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="home-product-card-info">
						<h6>Enya guitar product one</h6>
						<p>Rs.10,000/-</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{url('#')}}">
				<div class="home-product-card">
					<div class="home-product-image">
						<img src="{{url('public/images/7.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="home-product-card-info">
						<h6>Enya guitar product one</h6>
						<p>Rs.10,000/-</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="{{url('#')}}">
				<div class="home-product-card">
					<div class="home-product-image">
						<img src="{{url('public/images/8.jpg')}}" alt="" class="img-fluid">
					</div>
					<div class="home-product-card-info">
						<h6>Enya guitar product one</h6>
						<p>Rs.10,000/-</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

@endsection