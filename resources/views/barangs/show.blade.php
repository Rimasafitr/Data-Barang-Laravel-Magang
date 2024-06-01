<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <hr>
                        <h3 class="text-center">{{ $barang->namabarang }}</h3>
                        <h6>Kategori Barang: {{ $barang->kategori->kategori }}</h6>
                        <h6>Harga Barang: Rp. {{ $barang->hargabarang }}</h6>
                        <h6>Stok: {{ $barang->stok }}</h6>
                        <h6>Tanggal Masuk Barang: {{ $barang->tanggalmasuk }}</h6>
                        <img src="{{ asset('storage/barangs/'.$barang->foto) }}" class="w-100 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
