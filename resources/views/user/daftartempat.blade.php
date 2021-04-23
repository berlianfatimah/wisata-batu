@extends('layout/main')

@section('title', 'Batu')
@section('container')

<!-- isi -->
<div class="container">  
  <h1>  Tempat</h1>
  <hr>
  <div class="row">
    <div class="col-8">
    </div>
    <div class="col-4">
      <form class="d-flex justify-content-end pt-2 pb-2">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary me-2" type="submit"><i class="fas fa-search"></i></button>
        <button class="btn btn-success me-2" type="submit"><i class="fas fa-sync-alt"></i></button>
        
      </form>
    </div>
  </div>  

  <!-- search -->
  
  <!-- table -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col " colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>   
      <tr>
        <th scope="row">1</th>
        <td>
          <img src="https://asset.kompas.com/crops/oUbd-oWgmK9GQitYBij1i8DX-1Y=/0x73:1280x713/750x500/data/photo/2019/07/24/5d37bf7ba9d0f.jpg" class="img-thumbnail" alt="..."  width="150">
        </td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>
          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="far fa-edit text-white rounded"></i> Lihat Detail</button>
        </td>
        
      </tr>
     
      
    </tbody>
  </table>



</div>  


@endsection