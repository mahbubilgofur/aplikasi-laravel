 @extends ('layout.dasboard')

@section('contents')
	 <section class="section">
        <div class="card">
            <div class="card-header">

            	 <form class="form-horizontal" action="/postingan/edit/{{ $postingan->id }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID POST</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_post" class="form-control" id="inputEmail3" placeholder="id_post" value="{{ $postingan->id_post }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">JUDUL</label>
                    <div class="col-sm-10">
                      <input type="text" name="judul" class="form-control" id="inputPassword3" placeholder="judul" value="{{ $postingan->judul }}">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">ISI</label>
                    <div class="col-sm-10">
                      <input type="text"  name="isi"  class="form-control" id="inputPassword3" placeholder="isi" value="{{ $postingan->isi }}">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">TGL POST</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_post" class="form-control" id="inputPassword3" placeholder="tgl_post" value="{{ $postingan->tgl_post }}">
                    </div>
                    
                </div>
                 <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">LINK</label>
                    <div class="col-sm-10">
                      <input type="text" name="link" class="form-control" id="inputPassword3" placeholder="link" value="{{ $postingan->link }}">
                    </div>
                    <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Save Data</button>
                   </div>
                </div>
            </div>
        </div>
    </section>
@endsection