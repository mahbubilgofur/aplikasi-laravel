<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>halaman register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/cssku/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container">
<div class="row justify-content-center">
<div class="col-md-4">
<main class="form-signin w-100 m-auto">
  <form action="/register" method="POST">
    @csrf
    
    <h1 class="h3 mb-3 fw-normal">Please Register</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="name" placeholder="name" required="" value="{{ old('name') }}">
      <label for="floatingInput">name</label>
      @error('name')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>
        @enderror
    </div>
     <div class="form-floating">
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror " id="username" placeholder="username" required="" value="{{ old('username') }}">
      <label for="floatingInput">username</label>
        @error('username')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>
        @enderror
    </div>
     <div class="form-floating">
      <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror " id="email" placeholder="name@example.com" required="" value="{{ old('email') }}">
      <label for="floatingInput">Email</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror " id="password" placeholder="Password" required="">
      <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>
        @enderror
    </div>
    <div class="checkbox mb-3">
     
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>
</main>

</div>
</div>
</div>
    
  </body>
</html>
