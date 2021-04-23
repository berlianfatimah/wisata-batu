@extends('layout/main')

@section('title', 'Batu')
@section('container')

<div id='map' style='position: absolute; top: 0; bottom: 0; width: 100%;'></div>
<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiYmVybGlhbmZhdGltYWgiLCJhIjoiY2tuYnFjbnN3MHVsZDJ1b29lM3B0N2loeCJ9.viiJzFqhao-AKhV3ESg1fg';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
center: [-74.5, 40], // starting position
zoom: 9 // starting zoom
});
  map.addControl(new mapboxgl.NavigationControl());
</script>
<!-- <div id='map' style='position: absolute; top: 0; bottom: 0; width: 100%;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiYmVybGlhbmZhdGltYWgiLCJhIjoiY2tuYnFjbnN3MHVsZDJ1b29lM3B0N2loeCJ9.viiJzFqhao-AKhV3ESg1fg';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});
</script> -->


@endsection