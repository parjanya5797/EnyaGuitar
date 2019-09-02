@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')

<div class="container-fluid product-detail-title">
	<h1>Product Name</h1>
</div>


<div class="container pa-tb">

	<!-- default start -->
	<section id="default" class="padding-top0">
		<div class="row">
			<div class="col-md-6">
				<div class="xzoom-container">
					<img class="xzoom" id="xzoom-default" src="{{url('public/images/1.jpg')}}" xoriginal="{{url('public/images/1.jpg')}}" />
					<div class="xzoom-thumbs">
						<a href="{{url('public/images/1.jpg')}}"><img class="xzoom-gallery" width="80" src="{{url('public/images/1.jpg')}}"  xpreview="{{url('public/images/1.jpg')}}" title="The description goes here"></a>

						<a href="{{url('public/images/2.jpg')}}"><img class="xzoom-gallery" width="80" src="{{url('public/images/2.jpg')}}" title="The description goes here"></a>

						<a href="{{url('public/images/3.jpg')}}"><img class="xzoom-gallery" width="80" src="{{url('public/images/3.jpg')}}" title="The description goes here"></a>

						<a href="{{url('public/images/4.jpg')}}"><img class="xzoom-gallery" width="80" src="{{url('public/images/4.jpg')}}" title="The description goes here"></a>
					</div>
				</div>        
			</div>


			<div class="col-md-6">
				<h3>Product name goes here</h3>	
				<div class="container-fluid pa-0">
					<div class="row">
						<div class="col-md-6">
							<p><span>Price: </span>Rs:14,000/-</p>
						</div>
						<div class="col-md-6">
							<p><span>Product Code: </span>EG-121</p>
						</div>
					</div>
				</div>
				<h5>Description</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolor quibusdam iure nam, repellendus aperiam obcaecati voluptatem eligendi est, nobis nostrum, corporis alias reprehenderit in minima veritatis quia, numquam. Est! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus qui voluptatibus eligendi, praesentium autem pariatur velit cupiditate nam quam adipisci. Labore recusandae cupiditate sunt accusamus neque quia repudiandae dolorem eum?</p>
				<h5>Feature</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, doloremque, porro! Ipsum corporis ab fugiat ea nihil, beatae. Pariatur nulla, at animi id nam aliquid doloremque unde incidunt nesciunt iusto!</p>
			</div>
		</div>
	</section>
	<!-- default end -->
</div>


<div class="container pa-tb">
	<div class="embed-responsive embed-responsive-16by9">
		<iframe width="100%" height="auto" src="https://www.youtube.com/embed/9znc7kPzong" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>



<div class="container pa-tb">
	<h3>Related Product</h3>
	<div class="row">
		<div class="col-md-4">
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
		<div class="col-md-4">
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
		<div class="col-md-4">
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