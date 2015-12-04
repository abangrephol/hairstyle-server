<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from prototype-crm.embedinfosoft.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2014 15:14:59 GMT -->
<head>
<script src="{{url('/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{url('/js/jquery.pointr.js')}}"></script>
<script src="{{url('/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{url('/js/jquery-ui-1.10.3.min.js')}}"></script>
<script src="{{url('/js/bootstrap.min.js')}}"></script>
<script src="{{url('/js/modernizr.min.js')}}"></script>
<script src="{{url('/js/jquery.sparkline.min.js')}}"></script>
<script src="{{url('/js/toggles.min.js')}}"></script>
<script src="{{url('/js/retina.min.js')}}"></script>
<script src="{{url('/js/jquery.cookies.js')}}"></script>
<script src="{{url('/js/morris.min.js')}}"></script>
<script src="{{url('/js/raphael-2.1.0.min.js')}}"></script>
<script src="{{url('/js/jquery.datatables.min.js')}}"></script>
<script src="{{url('/js/chosen.jquery.min.js')}}"></script>
<script src="{{url('/js/custom.js')}}"></script>a
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
 <!-- <link rel="shortcut icon" href="images/favicon.png" type="image/png">-->

  <title>WiredNest</title>
  <link rel="stylesheet" href="{{url('/css/style.default.css')}}">
  <link rel="stylesheet" href="{{url('/css/jquery.datatables.css')}}">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="{{url('/js/html5shiv.js')}}"></script>
  <script src="{{url('/js/respond.min.js')}}"></script>
  <![endif]-->
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
	    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
	</div>
	<section>
		<div class="leftpanel">
			@include('includes.leftpanel')
		</div><!-- leftpanel -->
		<div class="mainpanel">
			@include('includes.headerbar')
			@include('includes.pageheader')
			@yield('contentpanel')
		</div><!-- mainpanel -->
		<div class="rightpanel">
		@include('includes.rightpanel')
		</div><!-- rightpanel -->
	</section>

@section('footer')
{{--<script src="{{url('/js/jquery-1.10.2.min.js')}}"></script>--}}
{{--<script src="{{url('/js/jquery-migrate-1.2.1.min.js')}}"></script>--}}
{{--<script src="{{url('/js/jquery-ui-1.10.3.min.js')}}"></script>--}}
{{--<script src="{{url('/js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{url('/js/modernizr.min.js')}}"></script>--}}
{{--<script src="{{url('/js/jquery.sparkline.min.js')}}"></script>--}}
{{--<script src="{{url('/js/toggles.min.js')}}"></script>--}}
{{--<script src="{{url('/js/retina.min.js')}}"></script>--}}
{{--<script src="{{url('/js/jquery.cookies.js')}}"></script>--}}
{{--<script src="{{url('/js/morris.min.js')}}"></script>--}}
{{--<script src="{{url('/js/raphael-2.1.0.min.js')}}"></script>--}}
{{--<script src="{{url('/js/jquery.datatables.min.js')}}"></script>--}}
{{--<script src="{{url('/js/chosen.jquery.min.js')}}"></script>--}}
{{--<script src="{{url('/js/custom.js')}}"></script>--}}

@show
</body>
</html>
