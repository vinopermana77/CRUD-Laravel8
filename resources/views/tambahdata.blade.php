@extends('layout.admin')

@section('content')

<body>
    <br>
    <div class="content-wrapper">
        <h1 class="text-center mt-5">Tambah Data Pegawai</h1>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertdata" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputNama" />
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tgllahir" class="form-control" id="exampleInputNama" />
                                    @error('tgllahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">Agama</label>
                                    <select name="id_religions" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Agama</option>
                                        @foreach ($dataagama as $data )
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">No Telepon</label>
                                    <input type="number" name="telp" class="form-control" id="exampleInputTelp" />
                                    @error('telp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">Masukkan Foto</label>
                                    <input type="file" name="foto" class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Simpan Data
                                </button>
                                <a href="/pegawai" class="kembali" style="float: right">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
@endsection