@extends('index')

@section('pageTitle')

@endsection

@section('content')

@endsection
<!-- OPTIONAL SCRIPTS -->
@section('optionalScripts')
  <script src="dist/js/demo.js"></script>
@endsection

<!-- PAGE PLUGINS -->
@section('pagePlugins')
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/world_countries.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
@endsection

<!-- PAGE SCRIPTS -->
@section('pageScripts')
  <script src="dist/js/pages/dashboard2.js"></script>
@endsection