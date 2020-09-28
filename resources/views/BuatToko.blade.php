<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Check Toko Sebelah</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('js/app.js') }}"> 
    </head>
    <body>     
        <div class="name container">
            <h2> Silahkan Isi </h2>
        <form action="{{ route('buat.toko') }}" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group" >
                <lable for="nama"> Nama Toko: </lable>
                <input type="text" class="form-control" id="nama_toko" placeholder="Enter Nama" name="nama_toko">
            </div>
            <div class="form-group" >
                <lable for="alamat"> Alamat: </lable>
                <input type="text" class="form-control" id="alamat_toko" placeholder="Enter Alamat" name="alamat_toko">
            </div>
            <div class="form-group" >
                <lable for="tlp"> No Telepon: </lable>
                <input type="number" class="form-control" id="tlp_toko" placeholder="Enter No.Tlp" name="tlp_toko">
            </div>
            <div class="form-group" >
                <lable for="pemilik"> Nama Pemilik: </lable>
                <input type="text" class="form-control" id="pemilik_toko" placeholder="Enter nama pemilik" name="pemilik_toko">
            </div>
        <input type="submit" class="btn btn-primary">
        </div>
        
    </body>
</html>