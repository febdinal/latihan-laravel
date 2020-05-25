<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Check Toko Sebelah</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('js/app.js') }}"> 
    </head>
    <body>     
        <div class="container">
        <h2> Tampil </h2>
            <table class="table">
                <thead>
                    <tr> 
                        <td>ID</td>
                        <td>Nama Toko</td>
                        <td>Alamat Toko</td>
                        <td>No Telepon</td>
                        <td>Pemilik Toko</td>
                        <td colspan="3" ><center>Pilihan </td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($BanyakToko as $SatuToko)
                    <form action="/Toko/Update" method="POST">
                        {{ csrf_field() }}
                        <tr>
                            <td> {{ $SatuToko->id }} </td>
                            <td> {{ $SatuToko->nama_toko }} </td>
                            <td> {{ $SatuToko->alamat_toko }} </td>
                            <td> {{ $SatuToko->tlp_toko }} </td>
                            <td> {{ $SatuToko->pemilik_toko }} </td>
                           <td> <a class="btn btn-danger" href="/Toko/edit/{{ $SatuToko->id }}">Edit</a></td>
                           <td> <a class="btn btn-danger" href="/Toko/lihat/{{ $SatuToko->id }}">Tambah Barang</a></td>
                           <td><a class="btn btn-danger" href="/Toko/Banyak/Toko/hapus/{{ $SatuToko->id }}">Hapus</a></td>
                        </tr>
                    </form>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </body>
</html>
