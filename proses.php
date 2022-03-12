<?php
    $title = 'Proses Pemesanan';
    include 'template/header.php';
    // Referensi: https://www.ayongoding.com/membuat-form-wizard-bootstrap/
?>

<link href="./assets/wizard-style.css" type="text/css" rel="stylesheet" />
<div class="container">
    <div class="row">
        <div class="col-12 col-md">
            <form action="" method="post" class="f1 mb-5">
                <h1 class="display-6">Selesaikan proses pemesanan</h1>
                <font class="lead">Isi formulir di bawah ini hingga tahap akhir dan kami akan membantu kebutuhanmu.</font>
                <div class="f1-steps">
                    <div class="f1-progress">
                        <div class="f1-progress-line" data-now-value="20" data-number-of-steps="4" style="width: 20%;"></div>
                    </div>
                    <div class="f1-step active">
                        <div class="f1-step-icon"><i class="bi bi-box2-heart"></i></div>
                        <p class="d-none d-md-block d-lg-block">Layanan</p>
                    </div>
                    <div class="f1-step">
                        <div class="f1-step-icon"><i class="bi bi-calendar-week"></i></div>
                        <p class="d-none d-md-block d-lg-block">Jadwal</p>
                    </div>
                    <div class="f1-step">
                        <div class="f1-step-icon"><i class="bi bi-ui-checks"></i></div>
                        <p class="d-none d-md-block d-lg-block">Detail</p>
                    </div>
                    <div class="f1-step">
                        <div class="f1-step-icon"><i class="bi bi-wallet2"></i></div>
                        <p class="d-none d-md-block d-lg-block">Pembayaran</p>
                    </div>
                    <div class="f1-step">
                        <div class="f1-step-icon"><i class="bi bi-bag-check"></i></div>
                        <p class="d-none d-md-block d-lg-block">Selesai</p>
                    </div>
                </div>
                <hr class="dropdown-divider">
                <!-- step 1 -->
                <fieldset>
                    <div class="card">
                        <h5 class="card-header bg-white"></h5>
                        <div class="card-body">
                            <h4>Pilih Layanan</h4>
                            <small class="text-muted">Tentukan jenis pelayanan yang sesuai dengan ruangan atau lingkungan yang ingin dibersihkan</small>
                            <div class="row mt-3 mb-2">
                                <div class="btn-group col-md-9" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="jenis-layanan" id="area-rumah" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="area-rumah" data-layanan="Rumah" data-harga="?">
                                        <h4><i class="bi bi-house-door"></i></h4>
                                        <h6 class="card-title">Rumah</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="jenis-layanan" id="area-koskontrak" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="area-koskontrak" data-layanan="Kos/Kontrak" data-harga="?">
                                        <h4><i class="bi bi-house"></i></h4>
                                        <h6 class="card-title">Kos/Kontak</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="jenis-layanan" id="area-apartemen" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="area-apartemen" data-layanan="Apartemen" data-harga="?">
                                        <h4><i class="bi bi-building"></i></h4>
                                        <h6 class="card-title">Apartemen</h6>
                                    </label>
                                </div>
                            </div>
                            <h4>Atau Pilih Paket</h4>
                            <small class="text-muted">Opsi lainnya adalah kamu dapat menentukan jenis pelayanan komplit dengan harga hemat</small>
                            <div class="row mt-3 mb-4">
                                <div class="btn-group col-md-9" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="jenis-layanan" id="paket-basic" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3 col-sm-2" for="paket-basic" data-paket="Paket Basic" data-harga="Rp 25.000">
                                        <h6>Basic Plan</h6>
                                        <small class="d-none d-md-block d-lg-block card-title">25 Ribu/kunjungan</small>
                                        <hr class="d-none d-md-block d-lg-block dropdown-divider">
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> Eco Enzyme</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> Kamar Mandi</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-x-circle-fill text-danger ms-2 me-3"></i> Dapur dan Kulkas</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-x-circle-fill text-danger ms-2 me-3"></i> Ruang Tengah</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-x-circle-fill text-danger ms-2 me-3"></i> 2 Kamar</small>
                                    </label>
                                    <input type="radio" class="btn-check" name="jenis-layanan" id="paket-super" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3 col-sm-2" for="paket-super" data-paket="Paket Super" data-harga="Rp 100.000">
                                        <h6>Super Plan</h6>
                                        <small class="d-none d-md-block d-lg-block card-title">100 Ribu/kunjungan</small>
                                        <hr class="d-none d-md-block d-lg-block dropdown-divider">
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> Eco Enzyme</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> Kamar Mandi</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> Dapur dan Kulkas</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> Ruang Tengah</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> 2 Kamar</small>
                                    </label>
                                    <input type="radio" class="btn-check" name="jenis-layanan" id="paket-standard" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3 col-sm-2" for="paket-standard" data-paket="Paket Standard" data-harga="Rp 55.000">
                                        <h6>Standard Plan</h6>
                                        <small class="d-none d-md-block d-lg-block card-title">55 Ribu/kunjungan</small>
                                        <hr class="d-none d-md-block d-lg-block dropdown-divider">
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> Eco Enzyme</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-check-circle-fill text-success ms-2 me-3"></i> Dapur dan Kulkas</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-x-circle-fill text-danger ms-2 me-3"></i> Kamar Mandi</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-x-circle-fill text-danger ms-2 me-3"></i> Ruang Tengah</small>
                                        <small class="d-none d-md-block d-lg-block" style="text-align: left !important;"><i class="bi bi-x-circle-fill text-danger ms-2 me-3"></i> 2 Kamar</small>
                                    </label>
                                </div>
                            </div>
                            <h4>Pilih Tipe Ruangan</h4>
                            <small class="text-muted">Pilih jenis tempat yang akan dibersihkan</small>
                            <div class="row mt-3 mb-4">
                                <div class="btn-group-vertical col-md-5" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="jenis-ruangan" id="ruangan-kamar" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-1" for="ruangan-kamar" data-ruangan="1 Kamar" data-harga="Rp 15.000">
                                        <h6 class="card-title">1 Kamar Rp 15.000</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="jenis-ruangan" id="ruangan-kamarmandi" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-1" for="ruangan-kamarmandi" data-ruangan="1 Kamar Mandi" data-harga="Rp 25.000">
                                        <h6 class="card-title">1 Kamar Mandi Rp 25.000</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="jenis-ruangan" id="ruangan-ruangtengah" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-1" for="ruangan-ruangtengah" data-ruangan="1 Ruang Tengah" data-harga="Rp 15.000">
                                        <h6 class="card-title">1 Ruang Tengah Rp 15.000</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="jenis-ruangan" id="ruangan-tidakada" autocomplete="off">
                                    <label class="btn btn-outline-danger mb-1" for="ruangan-tidakada" data-ruangan="Tidak Ada" data-harga="Rp 0">
                                        <h6 class="card-title"><i class="bi bi-x-circle-fill"></i> Tidak Memilih</h6>
                                    </label>
                                </div>
                            </div>
                            <h4>Layanan Ekstra <font class="text-muted">(*) optional</font></h4>
                            <small class="text-muted">Kamu dapat menambahkan layanan tambahan jika dibutuhkan</small>
                            <div class="row mt-3 mb-2">
                                <div class="btn-group-vertical col-md-5" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="layanan-ekstra" id="ekstra-dapur" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-1" for="ekstra-dapur" data-ekstra="Dapur" data-harga="Rp 15.000">
                                        <h6 class="card-title">Dapur Rp 15.000</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="layanan-ekstra" id="ekstra-kulkas" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-1" for="ekstra-kulkas" data-ekstra="Kulkas" data-harga="Rp 15.000">
                                        <h6 class="card-title">Kulkas Rp 15.000</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="layanan-ekstra" id="ekstra-pidahkos" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-1" for="ekstra-pidahkos" data-ekstra="1 Kamar" data-harga="Rp 15.000">
                                        <h6 class="card-title">Pindahan tipe kos 1 kamar Rp 15.000</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="layanan-ekstra" id="ekstra-ecoenzyme" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-1" for="ekstra-ecoenzyme" data-ekstra="Eco Enzyme 250ml" data-harga="Rp 10.000">
                                        <h6 class="card-title">Eco Enzyme 250ml Rp 10.000</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="layanan-ekstra" id="ekstra-tidakada" autocomplete="off">
                                    <label class="btn btn-outline-danger mb-1" for="ekstra-tidakada" data-ekstra="Tidak Ada" data-harga="Rp 0">
                                        <h6 class="card-title"><i class="bi bi-x-circle-fill"></i> Tidak Memilih</h6>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary btn-md col-md-3" id="nextLayanan">Selanjutnya <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- step 2 -->
                <fieldset>
                    <div class="card">
                        <h5 class="card-header bg-white"></h5>
                        <div class="card-body">
                            <h4>Menentukan Waktu dan Lokasi</h4>
                            <small class="text-muted">Kamu perlu memberikan informasi waktu bersedia dibersihkan dan detail lokasinya</small>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">Waktu</label>
                                <div class="col-sm-5" id="">
                                    <div class="input-group">
                                        <input id="tanggal" type="date" class="form-control" name="" autocomplete="off" required>
                                        <input id="jam" type="time" class="form-control" name="" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">Alamat</label>
                                <div class="col-sm-7" id="">
                                    <input type="text" class="form-control" name="" autocomplete="off" placeholder="Jl. XYZ No. 123" value="Jl. XYZ No. 123" required>
                                </div>
                                <div class="col-sm-4" id="">
                                    <div class="input-group">
                                        <input type="number" class="form-control" min="0" name="" autocomplete="off" placeholder="RT" value="001" required>
                                        <input type="number" class="form-control" min="0" name="" autocomplete="off" placeholder="RW" value="002" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-2">
                                <label for="" class="col-sm-1 col-form-label"></label>
                                <div class="col-sm-5" id="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="" autocomplete="off" placeholder="Kota" value="ABC" required>
                                        <input type="text" class="form-control" name="" autocomplete="off" placeholder="Provinsi" value="DEFG" required>
                                    </div>
                                </div>
                                <div class="col-sm-2" id="">
                                    <input type="number" class="form-control" min="0" name="" autocomplete="off" placeholder="Kode Pos" value="12345" required>
                                </div>
                            </div>
                            <h4>Biodata Pemesan</h4>
                            <small class="text-muted">Silakan isi datamu dengan benar untuk kami dihubungi guna keperluan pemesanan</small>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">Nama</label>
                                <div class="col-sm-7" id="">
                                    <input type="text" class="form-control" name="" autocomplete="off" placeholder="John Doe" value="John Doe" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">Email</label>
                                <div class="col-sm-5" id="">
                                    <input type="email" class="form-control" name="" autocomplete="off" placeholder="johndoe@example.com" value="johndoe@example.com" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">No. HP</label>
                                <div class="col-sm-5" id="">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="">+62</span>
                                        <input type="text" class="form-control" name="" autocomplete="off" placeholder="8123456789" value="8123456789" for="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mb-2 form-check">
                                <input type="checkbox" class="form-check-input" id="check" checked>
                                <label class="form-check-label" for="check">Kirim pengingat terkait pemesanan via kontak yang dicantumkan</label>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-warning btn-md col-md-3 btn-previous"><i class="bi bi-arrow-left"></i> Sebelumnya</button>
                                <button type="button" class="btn btn-outline-secondary btn-md col-md-3 btn-next">Selanjutnya <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- step 3 -->
                <fieldset>
                    <div class="card">
                        <h5 class="card-header bg-white"></h5>
                        <div class="card-body">
                            <h4>Berikut detail pemesanan yang telah kamu pilih</h4>
                            <small class="text-muted"></small>
                            <div class="row mt-3 mb-2">
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-border table-hover" style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <th colspan="2" class="text-center table-active">Biodata Pemesan</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>John Doe</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td>Jl. XYZ No. 123 RT:001/RW:002</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Kota ABC, Provinsi DEFG, 12345</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center table-active">Kontak</th>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>johndoe@example.com</td>
                                                </tr>
                                                <tr>
                                                    <th>No. HP</th>
                                                    <td>+628123456789</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-border table-hover" style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <th colspan="2" class="text-center table-active">Biaya Pesanan</th>
                                                </tr>
                                                <tr>
                                                    <th>Layanan atau Paket <span class="badge bg-info"><small id="pilih-layanan"></small> | <i class="bi bi-eye-fill text-dark" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em>"></i></span></th>
                                                    <td style="text-align: right;" id="harga-layanan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Tipe Ruangan <span class="badge bg-info" id="pilih-ruangan"></span></th>
                                                    <td style="text-align: right;" id="harga-ruangan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Layanan Ekstra <span class="badge bg-info" id="pilih-ekstra"></span></th>
                                                    <td style="text-align: right;" id="harga-ekstra"></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center table-active">Total yang Harus Dibayar</th>
                                                </tr>
                                                <tr>
                                                    <th style="width: 65%;">Nominal</th>
                                                    <th style="text-align: right;" class="text-success total-tagihan"></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-warning btn-md col-md-3 btn-previous"><i class="bi bi-arrow-left"></i> Sebelumnya</button>
                                <button type="button" class="btn btn-outline-secondary btn-md col-md-3 btn-next">Selanjutnya <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- step 4 -->
                <fieldset>
                    <div class="card">
                        <h5 class="card-header bg-white"></h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="alert alert-info" role="alert">
                                        Total yang harus dibayar nantinya (tagihan): <font class="fw-bold total-tagihan"></font>
                                    </div>
                                </div>
                            </div>
                            <h4>Pilih Metode Pembayaran</h4>
                            <small class="text-muted">Kamu dapat memilih payment gateway yang telah kami sediakan</small>
                            <div class="row mt-3">
                                <div class="btn-group col-md-6" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-banktrsnsfer" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary me-3" for="metode-banktrsnsfer">
                                        <img src="./assets/images/pkwradlqdwtfv.png" class="bg-white" height="25px" alt="" title="">
                                        <h6 class="card-title">Bank Transfer</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-debit" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-debit">
                                        <img src="./assets/images/pkwradlqdwtfu.png" class="bg-white" height="25px" alt="" title="">
                                        <h6 class="card-title">Kartu Kredit</h6>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-3 mb-2">
                                <div class="btn-group col-md-6" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-gopay" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-gopay">
                                        <img src="./assets/images/pkwradlqdwtfs.png" class="bg-white" height="18px" alt="" title="">
                                        <h6 class="card-title">GoPay</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-ovo" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-ovo">
                                        <img src="./assets/images/pkwradlqdwtfr.png" class="bg-white" height="25px" alt="" title="">
                                        <h6 class="card-title">OVO</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-dana" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-dana">
                                        <img src="./assets/images/pkwradlqdwtft.png" class="bg-white" height="20px" alt="" title="">
                                        <h6 class="card-title">Dana</h6>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-warning btn-md col-md-3 btn-previous"><i class="bi bi-arrow-left"></i> Sebelumnya</button>
                                <button type="button" class="btn btn-outline-secondary btn-md col-md-3 btn-next">Selanjutnya <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- step 5 -->
                <fieldset>
                    <div class="card">
                        <h5 class="card-header bg-white"></h5>
                        <div class="card-body text-center">
                            <h2 class="text-success">Pemesanan Berhasil!</h2>
                            <h4 class="text-muted">Kode pesanan <span class="text-primary">#EC0103202200</span></h4>
                            <img src="./assets/images/pkwradlqdwtfw.png" alt="" title="" class="img-thumbnail mt-3 mb-2" width="350px" />
                            <p class="lead">Selamat! Pesananmu berhasil diterima oleh kami. <br>
                                Mohon tunggu mitra Eco-Clean menghubungi dan datang ke tempatmu untuk melakukan pembersihan. <br>
                                Kamu dapat melakukan pelacakan pesanan melalui Tracking Pesanan.</p>
                            <a href="tracking.php" class="btn btn-primary">Tracking Pesanan <i class="bi bi-boxes"></i></a>
                            <div class="row mt-3 mb-2">
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>
<script src="./assets/pemesanan.js" type="text/javascript" rel="script"></script>
