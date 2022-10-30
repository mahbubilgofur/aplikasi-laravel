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
    @foreach($postingan as $postingan)
         <h2 class="post-title"><a>{{ $postingan->judul }}</a></h2>
            <div class="post-preview">
                        <a href="{{ $postingan->link }}"><h2 class="post-title">{{ $postingan->isi }}</h2></a>
                        <p class="post-meta">
                           postingan on {{$postingan->tgl_post}}
                        </p>

                    </div><!-- Button trigger modal -->
                    @endforeach
<!-- Modal -->

        @endsection