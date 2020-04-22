<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Check Barang di Toko</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('js/app.js') }}"> 
    </head>
    <body>     
        <div class="name container">
            <h2> Silahkan Isi </h2>
        <form action="{{ route('barang.toko') }}" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group" >
                <lable for="id"> ID Toko: </lable>
                <input type="number" class="form-control" id="id_toko" placeholder="Enter ID" name="id_toko">
            </div>
            <div class="form-group" >
                <lable for="name"> Nama Barang: </lable>
                <input type="text" class="form-control" id="nama_barang" placeholder="Enter Nama Barang" name="nama_barang">
            </div>
            <div class="form-group" >
                <lable for="jenis"> Jenis Barang: </lable>
                <input type="text" class="form-control" id="jenis_barang" placeholder="Enter Jenis Barang" name="jenis_barang">
            </div>
            <div class="form-group" >
                <lable for="jumlah"> Jumlah Barang: </lable>
                <input type="text" class="form-control" id="jumlah_barang" placeholder="Enter jumlah barang" name="jumlah_barang">
            </div>
        <input type="submit" class="btn btn-primary">
        </div>
    </body>
</html>