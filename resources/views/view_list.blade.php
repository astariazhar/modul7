@extends('index')
@section('title', 'list')
@section('isihalaman')
    <h4>BARANG</h4>
    <div class="container">
            <div class="row py-3 justify-content-center">
                <table class="table table-bordered border-dark w-80">
                    <thead class="text-center text-black">
                        <tr>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Satuan</th>
                        </tr>
                    </thead>
                    <tbody class="text-center text-black ">
                        <tr>
                            <th scope="row">KCCBGT1</th>
                            <td>Kaos</td>
                            <td>85.000</td>
                            <td>Hitam</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row">KCCBGT2</th>
                            <td>Hoodie</td>
                            <td>100.000</td>
                            <td>Hitam, Putih</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <th scope="row">KCCBGT3</th>
                            <td>Sweater</td>
                            <td>100.000</td>
                            <td>Hitam, Putih</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
   
@endsection