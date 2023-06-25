@extends('index')
@section('title', 'barang')

@section('isihalaman')
    <h3><center>Daftar Produk Cece Berbisnis</center></h3>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalbaranginput"> 
        Input barang
    </button>

    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID barang</td>
                <td align="center">Kode barang</td>
                <td align="center">Nama barang</td>
                <td align="center">Harga</td>
                <td align="center">Deskripsi</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($barang as $index=>$bk)
                <tr>
                    <td align="center" scope="row">{{ $index + $barang->firstItem() }}</td>
                    <td>{{$bk->id_barang}}</td>
                    <td>{{$bk->kode_barang}}</td>
                    <td>{{$bk->nama}}</td>
                    <td>{{$bk->harga}}</td>
                    <td>{{$bk->deskripsi}}</td>
                    <td align="center">
                        
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalbarangEdit{{$bk->id_barang}}"> 
                            Edit
                        </button>
                         <!-- Awal Modal EDIT data barang -->
                        <div class="modal fade" id="modalbarangEdit{{$bk->id_barang}}" tabindex="-1" role="dialog" aria-labelledby="modalbarangEditLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalbarangEditLabel">Form Edit Data barang</h5>
                                    </div>
                                    <div class="modal-body">

                                        <form name="formbarangedit" id="formbarangedit" action="/barang/edit/{{ $bk->id_barang}} " method="post" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="form-group row">
                                                <label for="id_barang" class="col-sm-4 col-form-label">Kode barang</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukan Kode barang">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="nama" class="col-sm-4 col-form-label">nama barang</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $bk->nama}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="harga" class="col-sm-4 col-form-label">Nama harga</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $bk->harga}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="form-group row">
                                                <label for="deskripsi" class="col-sm-4 col-form-label">deskripsi</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $bk->deskripsi}}">
                                                </div>
                                            </div>

                                            <p>
                                            <div class="modal-footer">
                                                <button type="button" name="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="input" class="btn btn-success">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal EDIT data barang -->
                        |
                        <a href="barang/hapus/{{$bk->id_barang}}" onclick="return confirm('Hapus barang Ini?')">
                            <button class="btn-danger">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--awal pagination-->
    Halaman : {{ $barang->currentPage() }} <br />
    Jumlah barang : {{ $barang->total() }} <br />
    Data Per Halaman : {{ $barang->perPage() }} <br />

    {{ $barang->links() }}
    <!--akhir pagination-->

    <!-- Awal Modal input data barang -->
    <div class="modal fade" id="modalbaranginput" tabindex="-1" role="dialog" aria-labelledby="modalbaranginputLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalbaranginputLabel">Form Input Data barang</h5>
                </div>
                <div class="modal-body">
                    <form name="formbaranginput" id="formbaranginput" action="/barang/input " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="id_barang" class="col-sm-4 col-form-label">Kode barang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukan Kode barang">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama barang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama barang">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi">
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="baranginput" class="btn btn-success">Input</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal input data barang -->
    
@endsection