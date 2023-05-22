<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/layout.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/components.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/colors.min.css')}}" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->
</head>
<body>
@include('layouts.client.navbar')
<div class="page-content">
  @include('layouts.client.sidebar')
  <div class="content-wrapper">
    @include('layouts.client.page_header')
    @yield('content')
    @include('layouts.client.footer')
  </div>
</div>
<!-- Core JS files -->
<script src="{{asset('admin/global_assets/js/main/jquery.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/ui/ripple.min.js')}}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{asset('admin/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

<!-- Theme JS files -->
<script src="{{asset('admin/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js')}}"></script>

<script src="{{asset('admin/global_assets/js/demo_pages/uploader_bootstrap.js')}}"></script>
<!-- /theme JS files -->

<script src="{{asset('admin/assets/js/app.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/dashboard.js')}}"></script>
</body>

</html>