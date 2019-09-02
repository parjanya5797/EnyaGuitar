@extends('cd-admin.home-master')

@section('page-title')	
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i> Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
					
						<h3>0</h3>

						<p>News</p>
					</div>
					<div class="icon">
						<i class="fa fa-copy"></i>
					</div>
					{{-- <a href="{{url('view-all-user')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
					
						<h3>0</h3>

						<p>Event</p>
					</div>
					<div class="icon">
						<i class="fa fa-calendar"></i>
					</div>
					{{-- <a href="{{url('view-all-user')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
					
						<h3>0</h3>

						<p>Blog</p>
					</div>
					<div class="icon">
						<i class="fa fa-copy"></i>
					</div>
					{{-- <a href="view-all-travel" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
					
						<h3>0</h3>

						<p>Video</p>
					</div>
					<div class="icon">
						<i class="fa fa-calendar"></i>
					</div>
					{{-- <a href="view-all-vehicle" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
				</div>
			</div>
			<!-- ./col -->
		</div>
		<!-- /.row -->
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-7 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				{{-- <div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Booking</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
							</button>
							<!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
						</div>
					</div>
					<div class="box-body">
						<div class="chart">
							<canvas id="areaChart" style="height:250px"></canvas>
						</div>
					</div>
					<!-- /.box-body -->
				</div> --}}
				<!-- /.nav-tabs-custom -->

				{{-- <div class="box box-info">
					<div class="box-header">
						<h3 class="box-title">Recent Activities</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Date</th>
								<th>User</th>
								<th>Activity</th>
							</tr>
							<tr>
								<td>11-7-2014</td>
								<td>John Doe</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
							</tr>
							<tr>
								<td>11-7-2014</td>
								<td>Alexander Pierce</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
							</tr>
							<tr>
								<td>11-7-2014</td>
								<td>Bob Doe</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
							</tr>
							<tr>
								<td>11-7-2014</td>
								<td>Mike Doe</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
							</tr>
							<tr>
								<td>11-7-2014</td>
								<td>Bob Doe</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
							</tr>
							<tr>
								<td>11-7-2014</td>
								<td>Mike Doe</td>
								<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
				</div> --}}


				<!-- quick email widget -->
				<div class="box box-info">
					@if(Session::has('success'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong> SEND SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
					</div>
					@endif
					<div class="box-header">
						<i class="fa fa-envelope"></i>

						<h3 class="box-title">Quick Email</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i>
							</button>
						</div>
						<!-- /. tools -->
					</div>
					<div class="box-body">
						<form action="{{url('quickmessage')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email to:" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
							</div>
							<div>
								<textarea class="textarea" name="message" required="message" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
							</div>
					
					</div>
					<div class="box-footer clearfix">
						<button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
							<i class="fa fa-arrow-circle-right"></i>
						</button>
					</div>
					</form>
				</div>
			</section>
			<!-- /.Left col -->
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-5 connectedSortable">

				<!-- Map box -->
				{{-- <div class="box box-solid bg-light-blue-gradient">
					<div class="box-header">
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
								<i class="fa fa-calendar"></i>
							</button>
							<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
								<i class="fa fa-minus"></i>
							</button>
						</div>
						<!-- /. tools -->

						<i class="fa fa-map-marker"></i>

						<h3 class="box-title">
							Visitors
						</h3>
					</div>
					<div class="box-body">
						<div id="world-map" style="height: 250px; width: 100%;"></div>
					</div>
					<!-- /.box-body-->
					<div class="box-footer no-border">
						<div class="row">
							<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								<div id="sparkline-1"></div>
								<div class="knob-label">Visitors</div>
							</div>
							<!-- ./col -->
							<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								<div id="sparkline-2"></div>
								<div class="knob-label">Online</div>
							</div>
							<!-- ./col -->
							<div class="col-xs-4 text-center">
								<div id="sparkline-3"></div>
								<div class="knob-label">Exists</div>
							</div>
							<!-- ./col -->
						</div>
						<!-- /.row -->
					</div>
				</div> --}}
				<!-- /.box -->

				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Recently Added </h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
							</button>
							<!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
						</div>
					</div>
					<!-- /.box-header -->
					<?php $admin = App\Admin::take(3)->orderBy('id', 'desc')->get(); ?>
					@foreach($admin as $admin)
					@if($admin->role=='admin')
					<div class="box-body">
						<ul class="products-list product-list-in-box">
							<li class="item">
								<div class="product-info" style="margin-left: 10px;">
									<a href="javascript:void(0)" class="product-title">{{$admin->name}}
										<span class="label label-success pull-right">Active</span>
									</a>
									<span class="product-description">
										{{$admin->role}}
									</span>

								</div>
							</li>
							
							
						</ul>
					</div>
					@else
					@endif
					@endforeach
					<!-- /.box-body -->
					<div class="box-footer text-center">
						<a href="{{url('view-all-admin')}}" class="uppercase">View All Users</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Quick mail </h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
							</button>
							
						</div>
					</div>
					<!-- /.box-header -->
					
					
					<div class="box-body">
						<ul class="products-list product-list-in-box">
							<li class="item">
								<div class="product-info" style="margin-left: 10px;">
									<a href="javascript:void(0)" class="product-title">test
									</a>
									<span class="product-description">
										<span>test</span>
									</span>

								</div>
							</li>
							
							
						</ul>
					</div>
					
				
					<!-- /.box-footer -->
				</div>

				<!-- Calendar -->
				{{-- <div class="box box-solid bg-green-gradient">
					<div class="box-header">
						<i class="fa fa-calendar"></i>

						<h3 class="box-title">Calendar</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<!-- button with a dropdown -->
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bars"></i>
								a							</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Add new event</a></li>
									<li><a href="#">Clear events</a></li>
									<li class="divider"></li>
									<li><a href="#">View calendar</a></li>
								</ul>
							</div>
							<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
							</button>
						</div>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<!--The calendar -->
						<div id="calendar" style="width: 100%"></div>
					</div>
				</div> --}}
				<!-- /.box -->

			</section>
			<!-- right col -->
		</div>
		<!-- /.row (main row) -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection