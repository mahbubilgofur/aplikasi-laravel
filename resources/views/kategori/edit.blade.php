 @extends ('layout.dasboard')

@section('contents')

<section class="section">
        <div class="card">
            <div class="card-header">
                 <form class="form-horizontal" action="/kategori/edit/{{ $kategori->id}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col col-form-label">ID KATEGORI</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_kategori" class="form-control" id="inputEmail3" placeholder="id_kategori" value="{{ $kategori->id_kategori}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col col-form-label">NAMA KATEGORI</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_kategori" class="form-control" id="inputPassword3" placeholder="nama_kategori" value="{{ $kategori->nama_kategori}}">
                    </div>
                  </div>
                <div class="form-group row">
                          <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
                </div>
              </form>
            </div>
          </div>
        </section>
        @endsection