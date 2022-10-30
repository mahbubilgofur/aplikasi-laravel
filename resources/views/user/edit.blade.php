 @extends ('layout.dasboard')

@section('contents')

<section class="section">
        <div class="card">
            <div class="card-header">
               <form action="/user/edit/{{ $user->id }}" method="POST">
    @csrf
    
    <div class="form-floating">
      <label for="floatingInput">name</label>
      <input type="text" name="name" class="form-control " id="name" placeholder="name" required="" value="{{ $user->name }}">
      </div>

     <div class="form-floating">
       <label for="floatingInput">username</label>
      <input type="text" name="username" class="form-control " id="username" placeholder="username" required="" value="{{ $user->username }}">
     </div>

     <div class="form-floating">
      <label for="floatingInput">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required="" value="{{ $user->email }}">
    </div>
    <div class="form-floating">
       <label for="floatingPassword">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="" value="{{ $user->password }}">
    </div>
     <div class="form-group row">
                          <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
  </form>
            </div>
          </div>
        </section>
        @endsection