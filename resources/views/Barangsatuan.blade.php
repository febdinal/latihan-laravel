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
                        <td>Id Toko</td>
                        <td>Nama Barang</td>
                        <td>Jenis Barang</td>
                        <td>Jumlah Barang </td>
                        <td>Option </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($BanyakBarang as $SatuBarang)
                        <tr>
                            <td> {{ $SatuBarang->id }} </td>
                            <td> {{ $SatuBarang->id_toko }} </td>
                            <td> {{ $SatuBarang->nama_barang }} </td>
                            <td> {{ $SatuBarang->jenis_barang }} </td>
                            <td> {{ $SatuBarang->jumlah_barang }} </td>
                            <td> <a class="btn btn-danger" href="/Barang/edit/{{ $SatuBarang->id }}">Edit</a></td>
                            <td><a class="btn btn-danger" href="/Barang/Banyak/Barang/hapus/{{ $SatuBarang->id }}">Hapus</a></td>
                        
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </body>
</html>
