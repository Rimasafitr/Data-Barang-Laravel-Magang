<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('barangs.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Barang</label>
                                <input type="text" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" value="{{ old('namabarang', $barang->namabarang) }}" placeholder="Masukkan nama barang">

                                <!-- error message untuk nama barang -->
                                @error('namabarang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kategori Barang</label>
                                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{ old('kategori', $barang->kategori->kategori) }}" placeholder="Masukkan kategori/jenis barang">

                                <!-- error message untuk kategori barang -->
                                @error('kategori')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Harga Barang</label>
                                <input type="text" class="form-control @error('hargabarang') is-invalid @enderror" name="hargabarang" value="{{ old('hargabarang', $barang->hargabarang) }}" placeholder="Masukkan harga barang/item">

                                <!-- error message untuk harga barang -->
                                @error('hargabarang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Stok</label>
                                <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok', $barang->stok) }}" placeholder="Masukkan jumlah stok">

                                <!-- error message untuk stok -->
                                @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Masuk</label>
                                <input type="date" class="form-control @error('tanggalmasuk') is-invalid @enderror" name="tanggalmasuk" value="{{ old('tanggalmasuk', $barang->tanggalmasuk) }}" placeholder="Masukkan tanggal masuk">

                                <!-- error message untuk tanggal masuk -->
                                @error('tanggalmasuk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Foto</label>
                                <input type="file" class="form-control" name="foto">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                </svg> Update</button>
                            <button type="reset" class="btn btn-md btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                </svg> Reset</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
{{-- <script>
    // CKEDITOR.replace( 'content' );
</script> --}}
</body>
</html>
