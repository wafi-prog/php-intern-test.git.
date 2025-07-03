@extends('dashboard.base')
 @section('title','Dashboard Employee')
 
 @section('content')
  <!-- Begin Page Content -->
 
     <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dashboard Employee</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Data Employee</h6> <br>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Data</button>
        </div>
        <div class="card-body">
           {{-- Alert create --}}
           @if(Session::get('Create'))
           <div class="alert alert-success alert-dismissble fade show " role="alert">
               {{Session::get('Create')}}
               <button type="button" class="close" data-dismiss="alert" aria-label="close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           @endif
           {{-- Alert Update --}}
           @if(Session::get('Update'))
           <div class="alert alert-success alert-dismissble fade show " role="alert">
               {{Session::get('Update')}}
               <button type="button" class="close" data-dismiss="alert" aria-label="close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           @endif
           {{-- Alert Delete --}}
           @if(Session::get('Delete'))
           <div class="alert alert-danger alert-dismissble fade show " role="alert">
               {{Session::get('Delete')}}
               <button type="button" class="close" data-dismiss="alert" aria-label="close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           @endif
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Tanggal Lahir</th>
                            <th>Photo</th>
                            <th>Created At</th>
                            <th colspan="2">Action</th>
                          </tr>
                    </thead>
                    <tbody>
                       {{-- foreach buat nampilin semua data --}}
                       {{-- @foreach ($Employee as $row)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->deskripsi}}</td>
                            <td>{{$row->filters->filter}}</td>
                            <td>{{$row->tutorial}}</td>
                            <td>{{$row->link_yt}}</td>
                            <td>{{ $row->created_at->format('d M Y') }}</td>
                            <td>
                             <a href="" class="btn btn-secondary">Edit</a>
                         </td>
                         <td>
                            <a href="" data-toggle="modal" data-target="#delete{{$row->id}}" class="btn btn-danger">Delete</a>
                         </td>
                          </tr>
                          @include('Employee.deleteEmployee')
                      @endforeach --}}
                      </tbody> 
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>
 
</div>
 {{-- modal tambah employe --}}
 <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Employe</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('create.employe')}}" method="POST" enctype="multipart/form-data">
          @csrf 
          <div class="mb-3">
              <label for="nama">Nama Employe</label>
              <input type="text" class="form-control" name="nama" >
                       
          </div>
                    <div class="mb-3">
               <label for="nomor">Nomor Employe</label>
              <input type="text" class="form-control" name="nomor" >
          </div>
          <div class="mb-3">
              <label for="talahir">Ttl Employe</label>
              <input type="text" class="form-control" name="talahir" >
          </div>
          <div class="mb-3">
               <label for="jabatan">Jabatan Employe</label>
              <input type="text" class="form-control" name="jabatan" >
          </div>

          <div class="form-group">
                            <label for="photo_upload_path">Photo</label>
                            <input type="file" class="form-control-file" id="photo_upload_path" name="image">
                          </div>
      
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
  </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>

 @endsection