<?php
    $title = 'Tracking Pesanan';
    include 'template/header.php';
?>

<link rel="stylesheet" type="text/css" href="./assets/tracking-all.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />

<div class="container">
    <div class="row">
        <div class="col-12 col-md">
            <div class="card mb-5">
                <h5 class="card-header bg-white">Tracking Pesanan #EC0103202200</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="tracking">
                                <div class="text-center tracking-status-intransit">
                                    <p class="tracking-status text-tight">Histori Pelaksanaan</p>
                                </div>
                                <div class="tracking-list" style="max-height: 500px; overflow-y: auto;">
                                    <div class="tracking-item">
                                        <div class="tracking-icon status-attemptfail">
                                            <i class="bi bi-gear-wide-connected" style="font-size: 25px;"></i>
                                        </div>
                                        <div class="tracking-date">01 Maret 2022<span>09.00 WITA</span></div>
                                        <div class="tracking-content">PENGERJAAN<span>Mitra Eco-Clean sedang dalam proses pengerjaan sesuai kebutuhan pelanggan</span></div>
                                    </div>
                                    <div class="tracking-item">
                                        <div class="tracking-icon status-deliveryoffice">
                                            <i class="bi bi-geo" style="font-size: 25px;"></i>
                                        </div>
                                        <div class="tracking-date">01 Maret 2022<span>09.00 WITA</span></div>
                                        <div class="tracking-content">KEHADIRAN<span>Posisi mitra Eco-Clean telah sesuai titik lokasi</span></div>
                                    </div>
                                    <div class="tracking-item">
                                        <div class="tracking-icon status-outfordelivery">
                                            <svg class="svg-inline--fa fa-shipping-fast fa-w-20" aria-hidden="true" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"></path>
                                            </svg>
                                        </div>
                                        <div class="tracking-date">01 Maret 2022<span>08.30 WITA</span></div>
                                        <div class="tracking-content">PERJALANAN<span>Mitra Eco-Clean sedang menuju ke lokasi yang pelanggan tentukan</span></div>
                                    </div>
                                    <div class="tracking-item">
                                        <div class="tracking-icon status-delivered">
                                            <i class="bi bi-person-check" style="font-size: 25px;"></i>
                                        </div>
                                        <div class="tracking-date">01 Maret 2022<span>08.15 WITA</span></div>
                                        <div class="tracking-content">KONFIRMASI<span>Terdapat mitra Eco-Clean yang merima pesanan pelanggan</span></div>
                                    </div>
                                    <div class="tracking-item">
                                        <div class="tracking-icon status-sponsored">
                                            <i class="bi bi-bag-check" style="font-size: 25px;"></i>
                                        </div>
                                        <div class="tracking-date">01 Maret 2022<span>08.00 WITA</span></div>
                                        <div class="tracking-content">PEMESANAN<span>Pelanggan telah menyelesaikan pesanan pada laman</span></div>
                                    </div>
                                    <div class="tracking-item d-none">
                                        <div class="tracking-icon status-exception">
                                            <i class="bi bi-info text-primary" style="font-size: 25px;"></i>
                                        </div>
                                        <div class="tracking-date">dd MM YYYY<span>hh.mm WITA</span></div>
                                        <div class="tracking-content">{status}<span>{keterangan}</span></div>
                                    </div>
                                    <div class="tracking-item d-none">
                                        <div class="tracking-icon status-inforeceived">
                                            <i class="bi bi-info text-primary" style="font-size: 25px;"></i>
                                        </div>
                                        <div class="tracking-date">dd MM YYYY<span>hh.mm WITA</span></div>
                                        <div class="tracking-content">{status}<span>{keterangan}</span></div>
                                    </div>
                                    <div class="tracking-item d-none">
                                        <div class="tracking-icon status-intransit">
                                            <i class="bi bi-info text-primary" style="font-size: 25px;"></i>
                                        </div>
                                        <div class="tracking-date">dd MM YYYY<span>hh.mm WITA</span></div>
                                        <div class="tracking-content">{status}<span>{keterangan}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="alert alert-success" role="alert">
                                <h6 class="alert-heading">
                                    <font class="spinner-grow text-primary" role="status" style="max-height: 20px; max-width: 20px;">
                                        <span class="visually-hidden">Loading...</span>
                                    </font>
                                    Sedang dalam tahap pengerjaan
                                </h6>
                                <small class="text-muted">Setelah kamu mendapat kenyamanan layanan kami, maka tahap terakhir yakni menyelesaikan transaksi tagihan pembayaran sesuai metode yang telah ditentukan sebelumnya.</small>
                                <hr>
                                <button type="button" class="btn btn-outline-primary btn-md" onclick="setelahTransaksi();"><i class="bi bi-wallet"></i> Tagihan Pembayaran</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalPenilaian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Bagaimana layanan kami?</h5>
                <button type="button" class="d-none btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="wrap">
                    <div class="stars">
                        <label class="rate">
                            <input type="radio" name="radio1" id="star1" value="star1">
                            <div class="face"></div>
                            <i class="far fa-star star one-star"></i>
                        </label>
                        <label class="rate">
                            <input type="radio" name="radio1" id="star2" value="star2">
                            <div class="face"></div>
                            <i class="far fa-star star two-star"></i>
                        </label>
                        <label class="rate">
                            <input type="radio" name="radio1" id="star3" value="star3">
                            <div class="face"></div>
                            <i class="far fa-star star three-star"></i>
                        </label>
                        <label class="rate">
                            <input type="radio" name="radio1" id="star4" value="star4">
                            <div class="face"></div>
                            <i class="far fa-star star four-star"></i>
                        </label>
                        <label class="rate">
                            <input type="radio" name="radio1" id="star5" value="star5">
                            <div class="face"></div>
                            <i class="far fa-star star five-star"></i>
                        </label>
                    </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Komentar" id="komentar" style="height: 100px; resize: none;"></textarea>
                    <label class="text-muted" for="komentar">Tinggalkan komentar di sini</label>
                </div>
                <button type="button" class="btn btn-primary mt-2" data-bs-dismiss="modal" aria-label="Close" id="kirim-penilaian">
                    <i class="bi bi-chat-dots"></i> Beri Penilaian
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="d-none btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php'; ?>
<script rel="script" type="text/javascript" src="./assets/penilaian.js"></script>
