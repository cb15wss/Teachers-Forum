<!--File which contains the styling files and navigation which is attached to page views-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magister</title>
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('frontEnd/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontEnd/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />
</head><!--/head-->

<body>
@include('layouts.header')
@show
@yield('content')
@include('layouts.footer')
<script src="{{asset('dist/js/jquery.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/price-range.js')}}"></script>
<script src="{{asset('dist/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('dist/js/main.js')}}"></script>
<script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>

<script>

// Instantiate EasyZoom instances
var $easyzoom = $('.easyzoom').easyZoom();

// Setup thumbnails example
var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

$('.thumbnails').on('click', 'a', function(e) {
var $this = $(this);

e.preventDefault();

// Use EasyZoom's `swap` method
api1.swap($this.data('standard'), $this.attr('href'));
});

// Setup toggles example
var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

$('.toggle').on('click', function() {
var $this = $(this);

if ($this.data("active") === true) {
$this.text("Switch on").data("active", false);
api2.teardown();
} else {
$this.text("Switch off").data("active", true);
api2._init();
}
});
</script>

</body>
</html>
