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
                            <h4>Pilih Area Pembersihan</h4>
                            <small class="text-muted">Tentukan jenis pelayanan yang sesuai dengan ruangan atau lingkungan yang ingin dibersihkan</small>
                            <div class="row mt-3 mb-2">
                                <div class="btn-group col-md-9" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="area-layanan" id="area-rumah" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="area-rumah" data-area="Rumah">
                                        <h4><i class="bi bi-house-door"></i></h4>
                                        <h6 class="card-title">Rumah</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="area-layanan" id="area-koskontrak" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="area-koskontrak" data-area="Kos/Kontrak">
                                        <h4><i class="bi bi-house"></i></h4>
                                        <h6 class="card-title">Kos/Kontak</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="area-layanan" id="area-apartemen" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="area-apartemen" data-area="Apartemen">
                                        <h4><i class="bi bi-building"></i></h4>
                                        <h6 class="card-title">Apartemen</h6>
                                    </label>
                                </div>
                            </div>
                            <h4>Tentukan Paket</h4>
                            <small class="text-muted">Kamu dapat menentukan jenis pelayanan komplit dengan harga hemat</small>
                            <div class="row mt-3 mb-4">
                                <div class="btn-group col-md-9" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="jenis-layanan" id="paket-basic" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3 col-sm-2" for="paket-basic" data-paket="Paket Basic" data-harga="25000">
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
                                    <label class="btn btn-outline-primary me-3 col-sm-2" for="paket-super" data-paket="Paket Super" data-harga="100000">
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
                                    <label class="btn btn-outline-primary me-3 col-sm-2" for="paket-standard" data-paket="Paket Standard" data-harga="55000">
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
                            <div class="row mt-1 mb-3">
                                <label for="" class="col-md-2 col-form-label fw-bold">Kamar</label>
                                <div class="col-md-4">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="button-minus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                        <input type="number" step="1" min="1" value="0" id="jumlah-kamar" name="quantity" class="form-control-plaintext border border-secondary text-center mx-1" readonly>
                                        <button type="button" class="button-plus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                    </div>
                                    <div id="" class="form-text">Per-kamar Rp 15.000</div>
                                </div>
                            </div>
                            <div class="row mt-1 mb-3">
                                <label for="" class="col-md-2 col-form-label fw-bold">Kamar Mandi</label>
                                <div class="col-md-4">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="button-minus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                        <input type="number" step="1" min="1" value="0" data-harga="25000" id="jumlah-kamarmandi" name="quantity" class="form-control-plaintext border border-secondary text-center mx-1" readonly>
                                        <button type="button" class="button-plus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                    </div>
                                    <div id="" class="form-text">Per-kamar mandi Rp 25.000</div>
                                </div>
                            </div>
                            <div class="row mt-1 mb-4">
                                <label for="" class="col-md-2 col-form-label fw-bold">Ruang Tengah</label>
                                <div class="col-md-4">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="button-minus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                        <input type="number" step="1" min="1" value="0" data-harga="15000" id="jumlah-ruangtengah" name="quantity" class="form-control-plaintext border border-secondary text-center mx-1" readonly>
                                        <button type="button" class="button-plus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                    </div>
                                    <div id="" class="form-text">Per-ruang tengah Rp 15.000</div>
                                </div>
                            </div>
                            <h4>Layanan Ekstra <font class="text-muted">(*) optional</font></h4>
                            <small class="text-muted">Kamu dapat menambahkan layanan tambahan jika dibutuhkan</small>
                            <div class="row mt-1 mb-3">
                                <label for="" class="col-md-2 col-form-label fw-bold">Dapur</label>
                                <div class="col-md-4">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="button-minus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                        <input type="number" step="1" min="1" value="0" data-harga="15000" id="jumlah-dapur" name="quantity" class="form-control-plaintext border border-secondary text-center mx-1" readonly>
                                        <button type="button" class="button-plus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                    </div>
                                    <div id="" class="form-text">Per-dapur Rp 15.000</div>
                                </div>
                            </div>
                            <div class="row mt-1 mb-3">
                                <label for="" class="col-md-2 col-form-label fw-bold">Kulkas</label>
                                <div class="col-md-4">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="button-minus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                        <input type="number" step="1" min="1" value="0" data-harga="15000" id="jumlah-kulkas" name="quantity" class="form-control-plaintext border border-secondary text-center mx-1" readonly>
                                        <button type="button" class="button-plus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                    </div>
                                    <div id="" class="form-text">Per-kulkas Rp 15.000</div>
                                </div>
                            </div>
                            <div class="row mt-1 mb-3">
                                <label for="" class="col-md-2 col-form-label fw-bold">Pindah Kos <i class="bi bi-info-circle text-dark" data-bs-toggle="tooltip" data-bs-html="true" title="Jumlah kamar yang akan dibersihkan"></i></label>
                                <div class="col-md-4">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="button-minus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                        <input type="number" step="1" min="1" value="0" data-harga="15000" id="jumlah-kamarkos" name="quantity" class="form-control-plaintext border border-secondary text-center mx-1" readonly>
                                        <button type="button" class="button-plus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                    </div>
                                    <div id="" class="form-text">Per-kamar Rp 15.000</div>
                                </div>
                            </div>
                            <div class="row mt-1 mb-4">
                                <label for="" class="col-md-2 col-form-label fw-bold">Eco Enzyme (250ml)</label>
                                <div class="col-md-4">
                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" class="button-minus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                        <input type="number" step="1" min="1" value="0" data-harga="10000" id="jumlah-ecoenzyme" name="quantity" class="form-control-plaintext border border-secondary text-center mx-1" readonly>
                                        <button type="button" class="button-plus btn btn-outline-secondary mx-1 fw-bolder" data-field="quantity">???</button>
                                    </div>
                                    <div id="" class="form-text">Per-botol Rp 10.000</div>
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
                                        <input for="tanggal" type="date" class="form-control" name="" autocomplete="off" required>
                                        <input for="jam" type="time" class="form-control" name="" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">Alamat</label>
                                <div class="col-sm-7" id="jalan">
                                    <input type="text" class="form-control" name="" autocomplete="off" placeholder="Jl. XYZ No. 123" value="" for="jalan" required>
                                </div>
                                <div class="col-sm-4" id="">
                                    <div class="input-group">
                                        <input type="number" class="form-control" min="0" name="" autocomplete="off" placeholder="RT" value="" for="rt" required>
                                        <input type="number" class="form-control" min="0" name="" autocomplete="off" placeholder="RW" value="" for="rw" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-2">
                                <label for="" class="col-sm-1 col-form-label"></label>
                                <div class="col-sm-5" id="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="" autocomplete="off" placeholder="Kota" value="" for="kota" required>
                                        <input type="text" class="form-control" name="" autocomplete="off" placeholder="Provinsi" value="" for="provinsi" required>
                                    </div>
                                </div>
                                <div class="col-sm-2" id="kodepos">
                                    <input type="number" class="form-control" min="0" name="" autocomplete="off" placeholder="Kode Pos" value="" for="kodepos" required>
                                </div>
                            </div>
                            <h4>Biodata Pemesan</h4>
                            <small class="text-muted">Silakan isi datamu dengan benar untuk kami dihubungi guna keperluan pemesanan</small>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">Nama</label>
                                <div class="col-sm-7" id="nama">
                                    <input type="text" class="form-control" name="" autocomplete="off" placeholder="John Doe" value="" for="nama" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">Email</label>
                                <div class="col-sm-5" id="surel">
                                    <input type="email" class="form-control" name="" autocomplete="off" placeholder="johndoe@example.com" value="" for="surel" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-sm-1 col-form-label">No. HP</label>
                                <div class="col-sm-5" id="">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="gawai">+62</span>
                                        <input type="text" class="form-control" name="" autocomplete="off" placeholder="8123456789" value="" for="gawai" required>
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
                                <button type="button" class="btn btn-outline-secondary btn-md col-md-3 btn-next" id="nextJadwal">Selanjutnya <i class="bi bi-arrow-right"></i></button>
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
                                                    <th colspan="2" class="text-center table-active">Waktu Pembersihan</th>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <td for="data-tanggal"></td>
                                                </tr>
                                                <tr>
                                                    <th>Jam</th>
                                                    <td for="data-jam"></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center table-active">Biodata Pemesan</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td for="data-nama"></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td><font for="data-jalan"></font> RT:<font for="data-rt"></font>/RW:<font for="data-rw"></font></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Kota <font for="data-kota"></font>, Provinsi <font for="data-provinsi"></font>, <font for="data-kodepos"></font></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center table-active">Kontak</th>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td for="data-surel"></td>
                                                </tr>
                                                <tr>
                                                    <th>No. HP</th>
                                                    <td>+62 <font for="data-gawai"></font></td>
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
                                                    <th colspan="2" class="text-center table-active">Rincian Biaya Pesanan</th>
                                                </tr>
                                                <tr>
                                                    <th>Area & Paket <span class="badge bg-info"><small id="pilih-area"></small> | <small id="pilih-paket"></small></span></th>
                                                    <td style="text-align: right;" id="harga-paket"></td>
                                                </tr>
                                                <tr id="tipe-ruangan" class="d-none">
                                                    <th colspan="2" class="table-active">Tipe Ruangan</th>
                                                </tr>
                                                <tr for="jumlah-kamar" class="d-none">
                                                    <th>Kamar <span class="badge bg-info"><font id="satuan-kamar"></font> x 15.000</span></th>
                                                    <td style="text-align: right;" for="harga-kamar"></td>
                                                </tr>
                                                <tr for="jumlah-kamarmandi" class="d-none">
                                                    <th>Kamar Mandi <span class="badge bg-info"><font id="satuan-kamarmandi"></font> x 25.000</span></th>
                                                    <td style="text-align: right;" for="harga-kamarmandi"></td>
                                                </tr>
                                                <tr for="jumlah-ruangtengah" class="d-none">
                                                    <th>Ruang Tengah <span class="badge bg-info"><font id="satuan-ruangtengah"></font> x 15.000</span></th>
                                                    <td style="text-align: right;" for="harga-ruangtengah"></td>
                                                </tr>
                                                <tr id="layanan-ekstra" class="d-none">
                                                    <th colspan="2" class="table-active">Layanan Ekstra</th>
                                                </tr>
                                                <tr for="jumlah-dapur" class="d-none">
                                                    <th>Dapur <span class="badge bg-info"><font id="satuan-dapur"></font> x 15.000</span></th>
                                                    <td style="text-align: right;" for="harga-dapur"></td>
                                                </tr>
                                                <tr for="jumlah-kulkas" class="d-none">
                                                    <th>Kulkas <span class="badge bg-info"><font id="satuan-kulkas"></font> x 15.000</span></th>
                                                    <td style="text-align: right;" for="harga-kulkas"></td>
                                                </tr>
                                                <tr for="jumlah-kamarkos" class="d-none">
                                                    <th>Pindah Kos <span class="badge bg-info"><font id="satuan-kamarkos"></font> x 15.000</span></th>
                                                    <td style="text-align: right;" for="harga-kamarkos"></td>
                                                </tr>
                                                <tr for="jumlah-ecoenzyme" class="d-none">
                                                    <th>Eco Enzyme (250ml) <span class="badge bg-info"><font id="satuan-ecoenzyme"></font> x 10.000</span></th>
                                                    <td style="text-align: right;" for="harga-ecoenzyme"></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-center table-primary">Total yang Harus Dibayar</th>
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
                                <div class="col-sm-7">
                                    <div class="alert alert-info" role="alert">
                                        Total yang harus dibayar nantinya (tagihan): <font class="fw-bold total-tagihan"></font>
                                    </div>
                                </div>
                            </div>
                            <h4>Pilih Metode Pembayaran</h4>
                            <small class="text-muted">Kamu dapat memilih payment gateway yang telah kami sediakan</small>
                            <div class="row mt-3">
                                <div class="btn-group col-md-7" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-bayarcleaner" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-bayarcleaner">
                                        <img src="//icons.getbootstrap.com/assets/icons/cash-stack.svg" class="bg-white" height="25px" alt="" title="">
                                        <h6 class="card-title d-none d-md-block d-lg-block">Bayar dengan Cleaner</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-banktransfer" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-banktransfer">
                                        <img src="./assets/images/pkwradlqdwtfv.png" class="bg-white" height="25px" alt="" title="">
                                        <h6 class="card-title d-none d-md-block d-lg-block">Bank Transfer</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-debit" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-debit">
                                        <img src="./assets/images/pkwradlqdwtfu.png" class="bg-white" height="25px" alt="" title="">
                                        <h6 class="card-title d-none d-md-block d-lg-block">Kartu Kredit</h6>
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-3 mb-2">
                                <div class="btn-group col-md-7" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-gopay" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-gopay">
                                        <img src="./assets/images/pkwradlqdwtfs.png" class="bg-white" height="18px" alt="" title="">
                                        <h6 class="card-title d-none d-md-block d-lg-block">GoPay</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-ovo" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-ovo">
                                        <img src="./assets/images/pkwradlqdwtfr.png" class="bg-white" height="25px" alt="" title="">
                                        <h6 class="card-title d-none d-md-block d-lg-block">OVO</h6>
                                    </label>
                                    <input type="radio" class="btn-check" name="metode-pembayaran" id="metode-dana" autocomplete="off">
                                    <label class="btn btn-outline-primary me-3" for="metode-dana">
                                        <img src="./assets/images/pkwradlqdwtft.png" class="bg-white" height="20px" alt="" title="">
                                        <h6 class="card-title d-none d-md-block d-lg-block">Dana</h6>
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
