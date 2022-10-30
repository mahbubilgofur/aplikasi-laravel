<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>APLIKASI_LARAVEL</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
       
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <a href="#!"><img class="img-fluid" src="assets/img/postt-sample-image.jpg" alt="..." /></a>
                        <p>Di zaman sekarang ini semua sudah berbasis teknologi, hal tersebut membuat kebanyakan orang ingin bisa menguasai sebuah bahasa pemrograman dan bisa membuat program yang bisa berguna untuk orang lain. Bahasa pemrograman merupakan sarana yang digunakan orang untuk membuat aplikasi.</p>
                        <p>Untuk Anda yang masih pemula, tentu tidak bisa langsung mengerti bahasa pemrograman dengan mudah. Oke, kali ini kami akan memberikan informasi tentang cara membuat program sederhana dan beberapa tahapan yang harus Anda lakukan jika ingin cepat bisa membuat program.</p>
                        <p>Memang banyak sekali jenis bahasa pemrograman yang bisa Anda pelajari untuk bisa membuat sebuah aplikasi. Namun bagi Anda yang pemula maka terlebih dahulu pahami cara membuat program sederhana menggunakan Visual Basic.</p>
                        <p>Bahasa pemrograman yang satu ini dianggap paling mudah untuk dipelajari. Visual Basic sering digunakan untuk membuat berbagai aplikasi berbasis windows. Anda bisa mulai membuat program yang sederhana sampai yang kompleks dengan menggunakan Visual Basic ini.</p>
                        <p>Untuk dapat membuat sebuah program, selain memahami cara membuat program sederhana maka Anda juga harus mengetahui apa saja kelebihan dari bahasa pemrograman Visual Basic. Bahasa pemrograman yang satu ini sangat disukai karena sederhana dan mudah untuk dipelajari.</p>
                         <div class="post-preview">
                           <div class="post-title">
                            <p>beri
                               <a href=""data-toggle="modal" data-target="#exampleModal">komentar</a>
                           postingan on oktober 27-10-2022
                        </p>
                        <div class="modal-footer">
                        <button  class="btn btn-primary"><a href="/index">kembali halaman utama</a></button>
                    </div>
                        <h3>isi komentar</h3>
                         @foreach($komen as $komen)
                              <h5>{{ $komen->nama }}</h5>
                        <p>{{ $komen->komentar }}</p>
                        @endforeach
                    </div>

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
       <button type="submit" class="btn btn-primary">Kirim Komentar</button>
      </div>
  </form>
  </div>
      </div>
         </div>
             </div>
                 </div>
        </article>

        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

