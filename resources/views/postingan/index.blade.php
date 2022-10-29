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
                    <tr ><style type="text/css">th{ text-align: center; }</style>      
                    <th scope="col">ID POST</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">ISI</th>
                     <th scope="col">TGL POST</th>
                    <th scope="col" colspan="2">AKSI</th>
                  </tr>
                  </thead>
           <tbody>
             @foreach($postingan  as $postingan )
             <tr class="isi">
             <td class="bg-info">{{ $postingan->id_post }}</td>
             <td class="bg-info">{{ $postingan->judul }}</td>
             <td class="bg-info">{{ $postingan->isi }}</td>
             <td class="bg-info">{{ $postingan->tgl_post }}</td>
              <td class="bg-info"><a href="/postingan/edit/{{ $postingan->id }}"  class="btn btn-warning">EDIT</a>
          <td  class="bg-info"><a href="/postingan/hapus/{{ $postingan->id }}" class="btn btn-danger">DELETE</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Create Data Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Postingan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/postingan/tampil" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID POST</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_post" class="form-control" id="inputEmail3" placeholder="id_post">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">JUDUL</label>
                    <div class="col-sm-10">
                      <input type="text" name="judul" class="form-control" id="inputPassword3" placeholder="judul">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">ISI</label>
                    <div class="col-sm-10">
                      <input type="text"  name="isi"  class="form-control" id="inputPassword3" placeholder="isi">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">TGL POST</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_post" class="form-control" id="inputPassword3" placeholder="tgl_post">
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
