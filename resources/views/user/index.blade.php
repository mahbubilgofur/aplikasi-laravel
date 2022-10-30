 @extends ('layout.dasboard')

@section('contents')

 <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                  
                    <th scope="col">ID</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">USERNAME</th>
                     <th scope="col">EMAIL</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">AKSI</th>
                  </tr>
                  </thead>
           <tbody>
             @foreach($user  as $user )
             <tr class="isi">
             <td class="bg-info">{{ $loop->iteration }}</td>
              <td class="bg-info">{{ $user->name }}</td>
               <td class="bg-info">{{ $user->username }}</td>
             <td class="bg-info">{{ $user->email }}</td>
            <td class="bg-info">{{ $user->password }}</td>
              <td class="bg-info"><a href="/user/edit/{{ $user->id }}"  class="btn btn-warning">EDIT</a>
          <a data-toggle="modal" data-target="#exampleModall" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>  
</div>
</div>
</section>
  @endsection 
  <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin Mau Hapus Data user ini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/user/hapus/{{ $user->id }}"><button type="submit" class="btn btn-primary">Hapus</button></a>
      </div>
    </div>
  </div>
</div>
