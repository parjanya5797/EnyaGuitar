@extends('home-master')

<!-- page title -->
@section('page-title')	

@endsection


<!-- page content -->
@section('content')



<div class="container-fluid about-title">
	<h1>About Us</h1>
</div>


<div class="container pa-tb about-intro">
	<h5>Hello, we are enya guitar</h5>
	<div class="row about-intro-card">
		<div class="col-md-6 about-intro-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet enim mollitia harum pariatur fugiat iste, aliquam quis non ipsam, ab optio numquam dolorum culpa. Autem, dolor, eaque. Voluptas temporibus, ut? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nisi quae, ipsum tempora consequatur nobis, labore inventore eaque dicta qui provident at quas totam autem ratione error obcaecati ullam nam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, tempore distinctio porro voluptatibus minus ipsum architecto magni, in perferendis nostrum, totam aperiam. Ad sint voluptatum placeat officia, illum iure facilis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nulla optio, temporibus aperiam ea! Architecto voluptatem nisi rerum explicabo veniam perferendis ipsum, eaque saepe vero, aliquid commodi doloremque consequuntur dicta! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aliquid, libero earum, iure consequatur, quo incidunt a eligendi expedita labore et delectus amet. Rem totam illo optio vero nemo eaque.</p>
		</div>
		<div class="col-md-6">
			<div class="about-intro-image">
				<img src="{{url('public/images/5.jpg')}}" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</div>


<div class="container pa-tb">
	<div class="embed-responsive embed-responsive-16by9">
		<iframe width="100%" height="auto" src="https://www.youtube.com/embed/9znc7kPzong" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>





@endsection