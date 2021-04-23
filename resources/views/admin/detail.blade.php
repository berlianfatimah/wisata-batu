@extends('layout/main')

@section('title', 'Batu')
@section('container')

<div class="container">
  <div class="row">
    <div class="col-6">
      <h3 class="text-center text-success title">Title</h3>
      <img src="https://asset.kompas.com/crops/oUbd-oWgmK9GQitYBij1i8DX-1Y=/0x73:1280x713/750x500/data/photo/2019/07/24/5d37bf7ba9d0f.jpg" class="img-thumbnail" alt="..."  >

    </div>
    <div class="col-6 pt-5">
      <h6 class="text-success">Lokasi:</h6> 
      <p class="text-secondary">Jalan ...</p>
     <p class="detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  </div>
  <div class="col-12 pt-5">
   <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="far fa-edit text-white rounded"></i> Lihat Semua Tempat</button>
   <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="far fa-edit text-white rounded"></i> Tampilkan Rute</button>
   <div class="pt-3">
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
</div>


@endsection