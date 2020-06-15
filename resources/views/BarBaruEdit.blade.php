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
        <form action="/Toko/BarangBaru/Update" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group" >
                <input type="hidden" class="form-control" required="required" name="id_toko" value="{{ $BarBaru->id }}">
            </div>
            <div class="form-group" >
                <lable for="nama"> Nama Barang: </lable>
                <input type="text" class="form-control" required="required" name="nama_barang" value="{{ $BarBaru->nama_barang }}">
            </div>
            <div class="form-group" >
                <lable for="nama"> Jenis Barang: </lable>
                <input type="text" class="form-control" required="required" name="jenis_barang" value="{{ $BarBaru->jenis_barang }}">
            </div>
            <div class="form-group" >
                <lable for="nama"> Jumlah Barang : </lable>
                <input type="text" class="form-control" required="required" name="jumlah_barang" value="{{ $BarBaru->jumlah_barang }}">
            </div>
             <input type="submit" class="btn btn-primary">
	</form>
    </body>
</html>