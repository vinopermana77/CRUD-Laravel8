<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    {{-- CSS Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CRUD - Laravel 8</title>
</head>

<body>
    <h1 class="text-center mt-4 mb-4">Form Data Pegawai</h1>
    <div class="container">
        <a href="/tambahpegawai" class="btn btn-success mb-3">+ Tambah Data</a>
        <form action="/pegawai" method="GET" class="row g-3">
            <div class="col-auto">
                <input type="search" class="form-control" id="search" name="search" placeholder="Cari">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Cari</button>
                <a href="/exportpdf" class="btn btn-info mb-3">+ Export PDF</a>
            </div>
        </form>
        <div class="row g-3 align-items-center">
            {{-- @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif --}}
            <table class="table" style="vertical-align: middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <img src="{{ asset('fotopegawai/' . $row->foto) }}" width="70" alt="">
                        </td>
                        <td>{{ $row->jk }}</td>
                        <td>0{{ $row->telp }}</td>
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                            <a href="#" {{ $row->id }}" class="delete btn btn-danger" data-id="{{$row->id}}"
                                data-nama="{{$row->nama}}">Delete</a>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<script>
    $('.delete').click(function()
    {
        var idPegawai = $(this).attr('data-id');
        var namaPegawai = $(this).attr('data-nama');

        swal({
            title: "Yakin ingin menghapus data?",
            text: "Menghapus data dengan nama "+namaPegawai+" ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
            if (willDelete) {
                window.location = "/deletedata/"+idPegawai+""
                swal("Data berhasil dihapus", {
                icon: "success",
                });
            } else {
                swal("Gagal menghapus data!");
            }
        });
    })

</script>

<script>
    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
</script>

</html>