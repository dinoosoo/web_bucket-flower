<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pembelian Bucket Flower | Detail</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Detail Pembelian
                    </div>
                    <div class="card-body">
                        <p><strong>Id Pembelian:</strong> {{ $pembelians->id }}</p>
                        <p><strong>Nama Produk:</strong> {{ $pembelians->nama_produk }}</p>
                        <p><strong>Tanggal Pembelian:</strong> {{ $pembelians->tanggal_pembelian }}</p>
                        <p><strong>Biaya:</strong> {{ $pembelians->biaya }}</p>
                        <p><strong>Jumlah Pembelian:</strong> {{ $pembelians->jumlah_pembelian }}</p>
                        <p><strong>ID Pengunjung:</strong> {{ $pembelians->id_pengunjung }}</p>
                        <p><strong>ID Petugas:</strong> {{ $pembelians->id_petugas }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/" class="btn btn-md btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
