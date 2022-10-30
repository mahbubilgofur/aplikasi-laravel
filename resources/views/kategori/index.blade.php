 @extends ('layout.dasboard')

@section('contents')

 <section class="section">
        <div class="card">
            <div class="card-header">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  tambah data
</button>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                  
                    <th scope="col">ID KATEGORI</th>
                    <th scope="col">NAMA KATEGORI</th>
                    <th scope="col">AKSI</th>
                  </tr>
                  </thead>
           <tbody>
             @foreach($kategori  as $kategori )
             <tr class="isi">
             <td class="bg-info">{{ $kategori->id_kategori }}</td>
             <td class="bg-info">{{ $kategori->nama_kategori }}</td>
            
              <td class="bg-info"><a href="/kategori/edit/{{ $kategori->id }}"  class="btn btn-warning">EDIT</a>
          <a data-toggle="modal" data-target="#exampleModall" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>  
                </table>
                <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/kategori/tampil" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col col-form-label">ID KATEGORI</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_kategori" class="form-control" id="inputEmail3" placeholder="id_kategori">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col col-form-label">NAMA KATEGORI</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_kategori" class="form-control" id="inputPassword3" placeholder="nama_kategori">
                    </div>
                  </div>
                  
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
      </div>
                 
                <!-- /.card-body -->
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
      </div>
     
    </div>
  </div>
</div>
  @endsection 
  <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin Mau Hapus Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/kategori/hapus/{{ $kategori->id }}"><button type="submit" class="btn btn-primary">Hapus</button></a>
      </div>
    </div>
  </div>
</div>
