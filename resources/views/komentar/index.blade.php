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
                    <th scope="col">NAMA KOMENTAR</th>
                    <th scope="col">KOMENTAR</th>
                    <th scope="col">AKSI</th>
                  </tr>
                  </thead>
           <tbody>
             @foreach($komentar  as $komentar )
             <tr class="isi">
              <td class="bg-info">{{ $loop->iteration }}</td>
             <td class="bg-info">{{ $komentar->nama }}</td>
             <td class="bg-info">{{ $komentar->komentar }}</td>
               <td  class="bg-info"><a  data-toggle="modal" data-target="#exampleModal" class="btn btn-danger">DELETE</a></td>
    </tr>
    @endforeach
  </tbody>
</table>  
              </div>
            </div>
          </section>
  @endsection 
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">yakin mau hapus komentar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/komen/hapus/{{ $komentar->id }}"><button class="btn btn-primary">Hapus</button></a>
      </div>
    </div>
  </div>
</div>
