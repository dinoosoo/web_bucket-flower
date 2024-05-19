<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Pembelian Bucket Flower </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: #f7fbff">

    <div class="section">
        <div class="container mt-5">
            <h1 class="text-center my-4" style="color: #47b5ff; font-weight: bolder">Pembelian Bucket Flower</h1>
            <h3 class="text-center my-4" style="color:#e91111; font-weight:bolder">Bouquet with artifical premium</h3>
            <h5 class="text-center my-4" style="color:#e91111; font-weight:bolder">Everyone will be celebrated with beautiful flowers</h5>
            <a href="/pembelian" class="btn btn-md btn-success mb-3">Data Pembelian Bucket Flower</a>
            <div style="background-color: white; padding: 10px auto">
                <div class="box">
                    <div class="row">
                        @forelse ($pembelians as $pembelian)
                            <?php
                            $biaya = $pembelian->biaya;
                            ?>
                            <div class="card text-center">
                                <p style="font-weight: bold"><a
                                        href="{{ route('pembelians.show', $pembelian->id) }}">{{ $pembelian->nama_produk }}</a>
                                </p>

                                <div class="description text-center">
                                    <div class="biaya">
                                        <p>ID Pembeli: {{ $pembelian->id_pembeli }}</p>
                                        <p>Jumlah Pembelian: {{ $pembelian->jumlah_pembelian }}</p>
                                        <p>Total Biaya: <?= 'Rp ' . number_format($biaya, 0, ',', '.') ?></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-danger">
                                Produk Tidak Tersedia.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
