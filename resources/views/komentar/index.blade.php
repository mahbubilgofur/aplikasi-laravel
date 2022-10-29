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
                  
                    <th scope="col">NAMA KOMENTAR</th>
                    <th scope="col">KOMENTAR</th>
                    <th scope="col">AKSI</th>
                  </tr>
                  </thead>
           <tbody>
             @foreach($komentar  as $komentar )
             <tr class="isi">
             <td class="bg-info">{{ $komentar->nama }}</td>
             <td class="bg-info">{{ $komentar->komentar }}</td>
         <td class="bg-info"> <a href="/komen/hapus/{{ $komentar->id }}" class="btn btn-danger">DELETE</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>  
              </div>
            </div>
          </section>
  @endsection 
