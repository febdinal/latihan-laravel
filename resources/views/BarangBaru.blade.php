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
                        <td>Nama Barang</td>
                        <td>Jenis Barang</td>
                        <td>Jumlah Barang </td>
                        <td colspan="3"><center> Option </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tambahbarang as $BarBaru)
                        {{ csrf_field() }}
                        <tr>
                            <td> {{ $BarBaru->nama_barang }} </td>
                            <td> {{ $BarBaru->jenis_barang }} </td>
                            <td> {{ $BarBaru->jumlah_barang }} </td>
                            <td> <a class="btn btn-primary" href="/Toko/BarangBaru/Edit/{{ $BarBaru->id }}">Edit</a></td>
                            <td> <a class="btn btn-primary" href="{{URL::previous()}}"> Kembali </a></td>
                            <td> <a class="btn btn-danger" href="/Toko/BarangBaru/hapus/{{ $BarBaru->id }}">Hapus</a></td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </body>
</html>
