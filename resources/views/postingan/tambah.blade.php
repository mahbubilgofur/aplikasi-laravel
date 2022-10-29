  @extends ('layout.dasboard')

@section('contents')

 <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
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
                 
                 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">tambah data</button>
                  <button type="Cancel" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          @endsection