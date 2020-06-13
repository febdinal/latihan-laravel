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
    <form action="{{route('tambah.barang')}}" method="POST"> 
            {{ csrf_field() }}
            <input type="hidden" name="id_toko" value="{{ $toko->id }}">
            <div class="form-group" >
                <lable for="nama"> Nama Barang: </lable>
                <input type="text" class="form-control" required="required" name="nama_barang">
            </div>
            <div class="form-group" >
                <lable for="nama"> Jenis Barang: </lable>
                <input type="text" class="form-control" required="required" name="jenis_barang">
            </div>
            <div class="form-group" >
                <lable for="nama"> Jumlah Barang : </lable>
                <input type="text" class="form-control" required="required" name="jumlah_barang">
            </div>
             <a> <input type="submit" class="btn btn-primary"> </a>
             <td> <a class="btn btn-primary" href="/Barang/baru/{{ $toko->id }}"> Lihat Barang </a></td>
             <td> <a class="btn btn-primary" href=" {{ route('tampil.toko') }}"> Kembali </a></td>
	</form>
    </body>
</html>