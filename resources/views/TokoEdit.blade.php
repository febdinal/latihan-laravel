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
            <form action="/Toko/Update" method="POST">
                {{ csrf_field() }}
                <div class="form-group" >
                    <input type="hidden" class="form-control" required="required" name="id_toko" value="{{ $SatuToko->id }}">
                </div>
                <div class="form-group" >
                    <lable for="nama"> Nama Toko: </lable>
                    <input type="text" class="form-control" required="required" name="nama_toko" value="{{ $SatuToko->nama_toko }}">
                </div>
                <div class="form-group" >
                    <lable for="nama"> Alamat Toko: </lable>
                    <input type="text" class="form-control" required="required" name="alamat_toko" value="{{ $SatuToko->alamat_toko }}">
                </div>
                <div class="form-group" >
                    <lable for="nama"> Np.Telepon </lable>
                    <input type="text" class="form-control" required="required" name="tlp_toko" value="{{ $SatuToko->tlp_toko }}">
                </div>
                <div class="form-group" >
                    <lable for="nama"> Nama Pemilik : </lable>
                    <input type="text" class="form-control" required="required" name="pemilik_toko" value="{{ $SatuToko->pemilik_toko }}">
                </div>
                 <input type="submit" class="btn btn-primary">
            </form>                        
         
        </body>
</html>