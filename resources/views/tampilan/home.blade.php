 @extends ('layout.index')

@section('content')

 <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        
                            <h2 class="post-title"></h2>
                            <h3 class="post-subtitle">selamat datang dan cek apakah ada postingan terbaru?</h3>

                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="https://github.com/mahbubilgofur"><h2 class="post-title">Assalamualaikum saya Mohammad Mahbubil Gofur akan memperkenalkan website saya yang sudah saya upload di gitHub
Dan terima kasih</h2></a>
                        <p class="post-meta">
                            beri
                            <a href=""data-toggle="modal" data-target="#exampleModal">komentar</a>
                           postingan on oktober 27-10-2022
                        </p>

                    </div><!-- Button trigger modal -->

  <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="/komentar">Lihat komentar→</a></div>
<!-- Modal -->

  <div class="post-preview">
  @foreach($postingan as $postingan)
                        <h2 class="post-title">{{ $postingan->judul }}</h2>
    <div class="post-preview">
                        <a href=""><h2 class="post-title">{{ $postingan->isi}}</h2></a>
                          
                        <p class="post-meta">
                            beri
                            <a href=""data-toggle="modal" data-target="#exampleModal">komentar</a>
                           postingan on {{$postingan->tgl_post}}
                        </p>

                    </div><!-- Button trigger modal -->
                    @endforeach

  <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="/komentar">Lihat komentar→</a></div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="form-group">
   

    <form action="/komentar/tampil" method="POST">
        @csrf
      <div class="modal-body">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Tulis Nama</label>
        <input type="text" name="nama" class="form-control">
    <label for="exampleFormControlTextarea1">Tulis Komentar</label>
    <textarea name="komentar" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="/login"><button type="submit" class="btn btn-primary">Kirim Komentar</button></a>
      </div>
  </form>

  </div>
      </div>
                    <!-- Divider-->
                  
             
        @endsection