@extends('layout/main')

@section('title', 'Batu')
@section('container')
<!-- isi -->
<div class="container">
  <div class="row">
   <div class="col-6">
    <h2 class="text-success text-center title">Tambah Data Lokasi</h2>
    <hr>
    <form>
      <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Nama Tempat</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Tempat">
      </div>
      <div class="mb-1">
        <label for="formFile" class="form-label">Gambar</label>
        <input class="form-control" type="file" id="formFile">
      </div>
      <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Longitude</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Longitude">
      </div>
      <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Latitude</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Latitude">
      </div>
      <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat">
      </div>
      <div class="mb-2">
        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-success">SUBMIT</button>
    </form>

  </div>
  <div class="col-6 mt-5">
   <div id='map' style='width: 100%; height: 300px;'></div>
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
  </div>
</div>
</div>

@endsection