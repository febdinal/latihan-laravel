<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Check Toko Sebelah</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('js/app.js') }}"> 
    </head>
    <body>
	<<div class="name container">     
        <h2> Silahkan Isi </h2>
        <form action="/Barang/Update" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group" >
                <lable for="nama"> Nama Barang: </lable>
                <input type="text" class="form-control" required="required" name="nama_barang" value="{{ $satubarang->nama_barang }}">
            </div>
            <div class="form-group" >
                <lable for="nama"> Jenis Barang: </lable>
                <input type="text" class="form-control" required="required" name="jenis_barang" value="{{ $satubarang->jenis_barang }}">
            </div>
            <div class="form-group" >
                <lable for="nama"> Jumlah Barang : </lable>
                <input type="text" class="form-control" required="required" name="jumlah_barang" value="{{ $satubarang->jumlah_barang }}">
            </div>
             <input type="submit" class="btn btn-primary">
	</form>
    </body>
</html>