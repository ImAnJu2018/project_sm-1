<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href={{asset("back_end/assets/css/icons/icomoon/styles.css")}} rel="stylesheet" type="text/css">
	<link href={{asset("back_end/assets/css/minified/bootstrap.min.css")}} rel="stylesheet" type="text/css">
	<link href={{asset("back_end/assets/css/minified/core.min.css")}} rel="stylesheet" type="text/css">
	<link href={{asset("back_end/assets/css/minified/components.min.css")}} rel="stylesheet" type="text/css">
	<link href={{asset("back_end/assets/css/minified/colors.min.css")}} rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	@stack('css')

	<!-- Core JS files -->
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/loaders/pace.min.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/core/libraries/jquery.min.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/core/libraries/bootstrap.min.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/loaders/blockui.min.js")}}></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/visualization/d3/d3.min.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/visualization/d3/d3_tooltip.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/forms/styling/switchery.min.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/forms/styling/uniform.min.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/forms/selects/bootstrap_multiselect.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/ui/moment/moment.min.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/plugins/pickers/daterangepicker.js")}}></script>

	<script type="text/javascript" src={{asset("back_end/assets/js/core/app.js")}}></script>
	<script type="text/javascript" src={{asset("back_end/assets/js/pages/dashboard.js")}}></script>
	<!-- /theme JS files -->

	@stack('script')

</head>

<body>

	@include('back_end.layouts._nav')

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			@include('back_end.layouts._sidebar')
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> -Admin Dashboard</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Admin Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
				@yield('content')
					<!-- /main charts -->


					<!-- Dashboard content -->
					
					<!-- /dashboard content -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2018. <a href="#">Admin panel</a> by <a href="#" target="_blank">Esprit IT & Software</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
