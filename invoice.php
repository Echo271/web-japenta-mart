<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Invoice</title>
    </head>
    <body>
        <!-- Header -->
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark shadow">
                <div class="container">
                <a class="navbar-brand" href="#">Japenta-Mart</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disabled</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>

        <section>
            <div class="container w-75 p-3 mt-5 mb-5" style="background-color: white;">
                <div class="row text-center pt-3 pb-3">
                    <div class="col">
                        <h2>Invoice</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img src="img/plant1.jpg" alt="plant1" class="img-fluid">
                    </div>
                    <div class="col">
                        <hr>
                        <table class="border borderless">
                            <tr>
                                <td>Nama</td>
                                <td>Eko</td>
                            </tr>
                            <tr>
                                <td>Nomor Telepon</td>
                                <td>08xxxxxxxx</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>Samarinda</td>
                            </tr>
                            <tr>
                                <td>Pesanan</td>
                                <td>Mangga Arumanis</td>
                            </tr>
                            <tr>
                                <td>Jumlah Pesanan</td>
                                <td>1 Pohon</td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td>Rp 150.000,-</td>
                            </tr>
                        </table>
                        <hr>
                        <h4>Cara Bayar</h4>
                        <p>Pembayaran dilakukan melalui transaksi ATM, ebanking, atau mbanking ke nomor rekening ini:</p>
                        <h4 class="text-center text-success">146 0802 2922</h4>
                        <button class="btn btn-primary" type="button"><a href="https://wa.me/+6282253502695?text=How%20are%20you">Kirim Invoice</a></button>

                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="row text-center pt-3">
                <div class="col">
                    <h3>japente-mart</h3>
                </div>
                <div class="col">
                <ul class="foot-bar">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disabled</a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p>@Copyright by Japenta - 2022</p>
                </div>
            </div>
        </footer>
        <script src="js/bootstrap.js"></script>
    </body>
</html>