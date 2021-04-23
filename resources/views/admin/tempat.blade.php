@extends('layout/main')

@section('title', 'Batu')
@section('container')

<!-- isi -->
<div class="container">  
  <h1 class="text-success title">  Tempat</h1>
  <hr>
  <div class="row">
    <div class="col-8">
      <a href=" {{asset('tambah')}}"  class="btn btn-danger" ><i class="fas fa-plus"></i></i> Tambah</a>
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
        <th scope="col">Longitude</th>
        <th scope="col">Latitude</th>
        <th scope="col">Alamat</th>
        <th scope="col " colspan="3">Aksi</th>
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
        <td>Mark</td>
        <td>Otto</td>
        <td>
          <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="far fa-edit text-white rounded"></i></button>
          <!-- modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title title text-success" id="exampleModalLabel">Edit</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                    <div class="mb-1">
                      <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal -->
          <button type="button" class="btn btn-sm btn-danger"> <i class="far fa-trash-alt "></i></button>
          <a href="{{asset('detail')}}" class="btn btn-sm btn-secondary"><i class="fas fa-chevron-circle-down"></i></a>
        </td>
        
      </tr>
      
    </tbody>
  </table>



</div>  


@endsection