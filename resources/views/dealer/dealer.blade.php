@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')

<div class="container-fluid dealer-title">
	<h1>Our Dealers</h1>
</div>



<div class="container pa-tb">
	<div class="row">
		<div class="col-md-12">
			<div class="dealer-info">
				<h3>Dealer name goes here</h3>
			</div>
		</div>
		<div class="col-md-8">
			<div class="dealer-image">
				<img src="{{url('public/images/4.jpg')}}" alt="" class="img-fluid">
			</div>
		</div>
		<div class="col-md-4">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.39468939157!2d85.33959931458236!3d27.674193633556033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190fc042d399%3A0x6064967133397f28!2sCreatu+Developers!5e0!3m2!1sen!2snp!4v1563779391834!5m2!1sen!2snp" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-12">
			<div class="dealer-info">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, rem similique, neque dolorum placeat laborum nemo sapiente tempora repellendus tenetur atque eos? Dolores ex delectus id nihil modi, iure! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed debitis, eius, sunt distinctio placeat quisquam nobis, ipsam iure harum voluptatem maiores soluta porro! Aperiam voluptates eos, tenetur dolor itaque deleniti!</p>
			</div>
		</div>
	</div>
</div>


<div class="container pa-tb">
	<div class="row">
		<div class="col-md-12">
			<div class="dealer-info">
				<h3>Dealer name goes here</h3>
			</div>
		</div>
		<div class="col-md-8">
			<div class="dealer-image">
				<img src="{{url('public/images/7.jpg')}}" alt="" class="img-fluid">
			</div>
		</div>
		<div class="col-md-4">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.39468939157!2d85.33959931458236!3d27.674193633556033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190fc042d399%3A0x6064967133397f28!2sCreatu+Developers!5e0!3m2!1sen!2snp!4v1563779391834!5m2!1sen!2snp" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-12">
			<div class="dealer-info">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis aperiam, rem similique, neque dolorum placeat laborum nemo sapiente tempora repellendus tenetur atque eos? Dolores ex delectus id nihil modi, iure! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed debitis, eius, sunt distinctio placeat quisquam nobis, ipsam iure harum voluptatem maiores soluta porro! Aperiam voluptates eos, tenetur dolor itaque deleniti!</p>
			</div>
		</div>
	</div>
</div>

@endsection