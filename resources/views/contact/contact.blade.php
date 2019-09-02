@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')

<div class="container-fluid contact-title">
	<h1>Contact us anytime</h1>
</div>


<div class="container pa-tb">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.39468939157!2d85.33959931458236!3d27.674193633556033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190fc042d399%3A0x6064967133397f28!2sCreatu+Developers!5e0!3m2!1sen!2snp!4v1563523364265!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<div class="container pa-tb">
	<div class="row">
		<div class="col-md-4">
			<div class="contact-info-card">
				<h3>Contact Us</h3>
				<ul class="contact-info-list">
					<li><a href="#"><p><span>Address:</span> address goes here</p></a></li>
					<li><a href="#"><p><span>We Are Open:</span> time goes here</p></a></li>
					<li><a href="#"><p><span>Call:</span> number goes here</p></a></li>
					<li><a href="#"><p><span>Email:</span> email goes here</p></a></li>
				</ul>
			</div>
			<div class="contact-info-card contact-info-text">
				<h3>Information</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, possimus veniam porro maxime, ipsam quia dolores omnis mollitia quasi illum dolor eos veritatis cumque incidunt delectus vel consequuntur nesciunt aliquid. Aperiam, possimus veniam porro maxime, ipsam quia dolores omnis.</p>
			</div>
			<div class="contact-info-card">
				<h3>Stary Social</h3>
				<ul class="contact-social-list">
					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					<li><a href=""><i class="fab fa-twitter"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-8">
			<form class="contact-message-form">
				<div class="form-group">
					<input type="text" class="form-control" id="exampleInputName1" placeholder="Name *">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email *">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputSubject1" placeholder="Subject">
				</div>
				<div class="form-group">
					<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="5"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Send Message</button>
			</form>
		</div>
	</div>
</div>



@endsection