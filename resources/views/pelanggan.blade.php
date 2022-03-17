@extends('master')
@section('content')

<div id="customer" class ="why">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Data Customer </h2>
              <br><br>
 
              <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10">
                  <thead style="color:white" bgcolor="black">
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Perusahaan/Perorangan</th>
                      <th>Logo</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                    </tr>
                    </thead>
                
                    <tbody>
                
                    @foreach ($Pelanggan as $p)
                          <tr>
                            <td>{{ $p->id }}</d>
                            <td>{{ $p->nama }}</d>
                            <td><img height="80" width="160" src="{{asset('images/'.$p->gambar)}}"></td>
                            <td>{{ $p->alamat }}</d>
                            <td>{{ $p->telepon }}</d>
                          </tr> 
                    @endforeach
                    
                    </tbody>

              </table>
              <br><br>
              Halaman : {{ $Pelanggan->currentPage() }} <br>
              Jumlah Data : {{ $Pelanggan->total() }} <br>
              Data Per Halaman : {{ $Pelanggan->perPage() }}

              {{ $Pelanggan->links() }}
            </div>
      </div>
    </div>
  </div>
</div>
@endsection