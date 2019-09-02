@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')

<div class="container-fluid pa-0 home-image-card">
	<img src="{{url('public/images/9.jpg')}}" alt="" class="img-fluid">
</div>

<div class="container home-category-card">
	<div class="row">
		<div class="col-md-4">
			<div class="home-category-image">
				<img src="{{url('public/images/8.jpg')}}" alt="" class="img-fluid">
			</div>
			<div class="home-category-btn">
				<a href="{{url('product')}}"><p>Kalimba</p></a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="home-category-image">
				<img src="{{url('public/images/6.jpg')}}" alt="" class="img-fluid">
			</div>
			<div class="home-category-btn">
				<a href="{{url('product')}}"><p>Kalimba</p></a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="home-category-image">
				<img src="{{url('public/images/4.jpg')}}" alt="" class="img-fluid">
			</div>
			<div class="home-category-btn">
				<a href="{{url('product')}}"><p>Kalimba</p></a>
			</div>
		</div>
	</div>
</div>



<div class="container pa-tb home-about-card">
	<div class="row">
		<div class="offset-md-6 col-md-6">
			<div class="home-about-text">
				<h1>Enya Guitar</h1>
				<span>classical products</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quos cum natus quo alias commodi similique odio iusto blanditiis possimus. Soluta modi, laboriosam, repudiandae asperiores et libero aut molestiae nam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius veniam iste rem neque, voluptates, dignissimos molestias ex quas placeat animi minima aperiam iure reiciendis eligendi dolores similique repellendus esse saepe!</p>
			</div>
			<ul>
				<li><a href="{{url('#')}}"><p>Learn More</p></a></li>
				<li><a href="{{url('#')}}"><p>Our Products</p></a></li>
			</ul>
		</div>
	</div>
</div>



<div class="container pa-tb home-products-title">
	<h5><span></span>Enya Products<span></span></h5>

	<div class="home-product-bg">
		<div class="home-product-menu">
			<ul class="nav nav-pills mb-3" id="pills-tabContent" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-aria-all" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-guitar-tab" data-toggle="pill" href="#pills-guitar" role="tab" aria-controls="pills-guitar" aria-selected="false">Guitar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-kalimba-tab" data-toggle="pill" href="#pills-kalimba" role="tab" aria-controls="pills-kalimba" aria-selected="false">Kalimba</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-ukelele-tab" data-toggle="pill" href="#pills-ukelele" role="tab" aria-controls="pills-ukelele" aria-selected="false">ukelele</a>
				</li>
			</ul>
		</div>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
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
						<div class="col-md-4">
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
						<div class="col-md-4">
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
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-guitar" role="tabpanel" aria-labelledby="pills-guitar-tab">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
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
						<div class="col-md-4">
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
						<div class="col-md-4">
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
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-kalimba" role="tabpanel" aria-labelledby="pills-kalimba-tab">
				<div class="container-fluid">
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
										<img src="{{url('public/images/9.jpg')}}" alt="" class="img-fluid">
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
										<img src="{{url('public/images/1.jpg')}}" alt="" class="img-fluid">
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
			</div>
			<div class="tab-pane fade" id="pills-ukelele" role="tabpanel" aria-labelledby="pills-ukelele-tab">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
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
						<div class="col-md-4">
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
						<div class="col-md-4">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>







<div class="container pa-tb">
	<div class="embed-responsive embed-responsive-16by9">
		<iframe width="100%" height="auto" src="https://www.youtube.com/embed/9znc7kPzong" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>









<div class="container-fluid pa-0">
	<div id="owl-featured" class="owl-carousel owl-theme">
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/1.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/2.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/3.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/4.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/5.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/6.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/7.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/8.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="item">
			<div class="featured-carousel">
				<a href="">
					<div class="featured-carousel-img">
						<img src="{{url('public/images/9.jpg')}}" alt="">
					</div>
				</a>
			</div>
		</div>
	</div>
</div>












@endsection