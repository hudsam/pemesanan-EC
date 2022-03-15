$(document).ready(function(){
    /*$('#tanggal').val('2022-01-03'); // Tahun-Tanggal-Bulan
    $('#jam').val('08:00:00');*/
    const tarifEcoEnzyme = 10000;
    const tarifKamar = tarifRuangTengah = tarifDapur = tarifKulkas = tarifKamarKos = 15000;
    const tarifKamarMandi = 25000;

    // Menentukan layanan atau paket
    $('label[for="area-rumah"]').on('click', function() {
        var layanan = $(this).data('layanan');
        var harga = $(this).data('harga');
        $('#pilih-layanan').html(layanan);
        $('#harga-layanan').html(harga);
    });

    $('label[for="area-koskontrak"]').on('click', function() {
        var layanan = $(this).data('layanan');
        var harga = $(this).data('harga');
        $('#pilih-layanan').html(layanan);
        $('#harga-layanan').html(harga);
    });

    $('label[for="area-apartemen"]').on('click', function() {
        var layanan = $(this).data('layanan');
        var harga = $(this).data('harga');
        $('#pilih-layanan').html(layanan);
        $('#harga-layanan').html(harga);
    });

    $('label[for="paket-basic"]').on('click', function() {
        var paket = $(this).data('paket');
        var harga = $(this).data('harga');
        $('#pilih-paket').html(paket);
        $('#harga-paket').html(harga);
    });

    $('label[for="paket-super"]').on('click', function() {
        var paket = $(this).data('paket');
        var harga = $(this).data('harga');
        $('#pilih-paket').html(paket);
        $('#harga-paket').html(harga);
    });

    $('label[for="paket-standard"]').on('click', function() {
        var paket = $(this).data('paket');
        var harga = $(this).data('harga');
        $('#pilih-paket').html(paket);
        $('#harga-paket').html(harga);
    });

    // Aksi 'button next' pada tahap: Layanan
    $('#nextLayanan').on('click', function() {
        var jumlahKamar = parseInt($('#jumlah-kamar').val());
        var jumlahKamarMandi = parseInt($('#jumlah-kamarmandi').val());
        var jumlahRuangTengah = parseInt($('#jumlah-ruangtengah').val());

        if (jumlahKamar >= 1 || jumlahKamarMandi >= 1 || jumlahRuangTengah >= 1) {
            $('#tipe-ruangan').removeClass('d-none');
        } else {
            $('#tipe-ruangan').addClass('d-none');
        }
        if (jumlahKamar >= 1) {
            $('tr[for="jumlah-kamar"]').removeClass('d-none');
            $('#satuan-kamar').html(jumlahKamar);
            $('td[for="harga-kamar"]').html(jumlahKamar * tarifKamar);
        } else {
            $('tr[for="jumlah-kamar"]').addClass('d-none');
            $('td[for="harga-kamar"]').html('0');
        }
        if (jumlahKamarMandi >= 1) {
            $('tr[for="jumlah-kamarmandi"]').removeClass('d-none');
            $('#satuan-kamarmandi').html(jumlahKamarMandi);
            $('td[for="harga-kamarmandi"]').html(jumlahKamarMandi * tarifKamarMandi);
        } else {
            $('tr[for="jumlah-kamarmandi"]').addClass('d-none');
            $('td[for="harga-kamarmandi"]').html('0');
        }
        if (jumlahRuangTengah >= 1) {
            $('tr[for="jumlah-ruangtengah"]').removeClass('d-none');
            $('#satuan-ruangtengah').html(jumlahRuangTengah);
            $('td[for="harga-ruangtengah"]').html(jumlahRuangTengah * tarifRuangTengah);
        } else {
            $('tr[for="jumlah-ruangtengah"]').addClass('d-none');
            $('td[for="harga-ruangtengah"]').html('0');
        }

        var jumlahDapur = parseInt($('#jumlah-dapur').val());
        var jumlahKulkas = parseInt($('#jumlah-kulkas').val());
        var jumlahKamarKos= parseInt($('#jumlah-kamarkos').val());
        var jumlahEcoEnzyme = parseInt($('#jumlah-ecoenzyme').val());

        if (jumlahDapur >= 1 || jumlahKulkas >= 1 || jumlahKamarKos >= 1 || jumlahEcoEnzyme >= 1) {
            $('#layanan-ekstra').removeClass('d-none')
        } else {
            $('#layanan-ekstra').addClass('d-none');
        }
        if (jumlahDapur >= 1) {
            $('tr[for="jumlah-dapur"]').removeClass('d-none');
            $('#satuan-dapur').html(jumlahDapur);
            $('td[for="harga-dapur"]').html(jumlahDapur * tarifDapur);
        } else {
            $('tr[for="jumlah-dapur"]').addClass('d-none');
            $('td[for="harga-dapur"]').html('0');
        }
        if (jumlahKulkas >= 1) {
            $('tr[for="jumlah-kulkas"]').removeClass('d-none');
            $('#satuan-kulkas').html(jumlahKulkas);
            $('td[for="harga-kulkas"]').html(jumlahKulkas * tarifKulkas);
        } else {
            $('tr[for="jumlah-kulkas"]').addClass('d-none');
            $('td[for="harga-kulkas"]').html('0');
        }
        if (jumlahKamarKos >= 1) {
            $('tr[for="jumlah-kamarkos"]').removeClass('d-none');
            $('#satuan-kamarkos').html(jumlahKamarKos);
            $('td[for="harga-kamarkos"]').html(jumlahKamarKos * tarifKamarKos);
        } else {
            $('tr[for="jumlah-kamarkos"]').addClass('d-none');
            $('td[for="harga-kamarkos"]').html('0');
        }
        if (jumlahEcoEnzyme >= 1) {
            $('tr[for="jumlah-ecoenzyme"]').removeClass('d-none');
            $('#satuan-ecoenzyme').html(jumlahEcoEnzyme);
            $('td[for="harga-ecoenzyme"]').html(jumlahEcoEnzyme * tarifEcoEnzyme);
        } else {
            $('tr[for="jumlah-ecoenzyme"]').addClass('d-none');
            $('td[for="harga-ecoenzyme"]').html('0');
        }

        if (
            $('#pilih-paket').text() !== '' & $('#harga-paket').text() !== ''
        )
        {
            $('#nextLayanan').addClass('btn-next');
            totalBiayaPesanan();
            setInterval(function() {$('#nextLayanan').removeClass('btn-next'); }, 1000);
        }
        else
        {
            Toast.fire({
                icon: 'warning',
                title: 'Kamu belum menentukan layanan.',
            });
        }
    });

    function totalBiayaPesanan() {
        var hargaPaket = parseInt($('#harga-paket').text());

        var hargaKamar = (parseInt($('#jumlah-kamar').val()) >= 1) ? parseInt($('td[for="harga-kamar"]').text()) : 0;
        var hargaKamarMandi = (parseInt($('#jumlah-kamarmandi').val()) >= 1) ? parseInt($('td[for="harga-kamarmandi"]').text()) : 0;
        var hargaRuangTengah = (parseInt($('#jumlah-ruangtengah').val()) >= 1) ? parseInt($('td[for="harga-ruangtengah"]').text()) : 0;

        var hargaDapur = (parseInt($('#jumlah-dapur').val()) >= 1) ? parseInt($('td[for="harga-dapur"]').text()) : 0;
        var hargaKulkas = (parseInt($('#jumlah-kulkas').val()) >= 1) ? parseInt($('td[for="harga-kulkas"]').text()) : 0;
        var hargaKamarKos = (parseInt($('#jumlah-kamarkos').val()) >= 1) ? parseInt($('td[for="harga-kamarkos"]').text()) : 0;
        var hargaEcoEnzyme = (parseInt($('#jumlah-ecoenzyme').val()) >= 1) ? parseInt($('td[for="harga-ecoenzyme"]').text()) : 0;

        var total = hargaPaket
                    + hargaKamar + hargaKamarMandi + hargaRuangTengah
                    + hargaDapur + hargaKulkas + hargaKamarKos + hargaEcoEnzyme;
        $('.total-tagihan').text(total);
    }

    // Referensi: codepen.io/anitaparmar26/pen/BaLYMeN
    function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    $('.btn-group').on('click', '.button-plus', function(e) {
        incrementValue(e);
    });

    $('.btn-group').on('click', '.button-minus', function(e) {
        decrementValue(e);
    });

    $('#nextJadwal').on('click', function() {
        var tanggal = $('input[for="tanggal"]').val();
        var jam = $('input[for="jam"]').val();
        var jalan = $('input[for="jalan"]').val();
        var rt = $('input[for="rt"]').val();
        var rw = $('input[for="rw"]').val();
        var kota = $('input[for="kota"]').val();
        var provinsi = $('input[for="provinsi"]').val();
        var kodepos = $('input[for="kodepos"]').val();
        var nama = $('input[for="nama"]').val();
        var surel = $('input[for="surel"]').val();
        var gawai = $('input[for="gawai"]').val();

        $('td[for="data-tanggal"]').text(tanggal);
        $('td[for="data-jam"]').text(jam);
        $('td[for="data-nama"]').text(nama);
        $('font[for="data-jalan"]').text(jalan);
        $('font[for="data-rt"]').text(rt);
        $('font[for="data-rw"]').text(rw);
        $('font[for="data-kota"]').text(kota);
        $('font[for="data-provinsi"]').text(provinsi);
        $('font[for="data-kodepos"]').text(kodepos);
        $('td[for="data-surel"]').text(surel);
        $('font[for="data-gawai"]').text(gawai);
    });

    function scroll_to_class(element_class, removed_height) {
        var scroll_to = $(element_class).offset().top - removed_height;
        if($(window).scrollTop() != scroll_to) {
            $('html, body').stop().animate({scrollTop: scroll_to}, 0);
        }
    }

    function bar_progress(progress_line_object, direction) {
        var number_of_steps = progress_line_object.data('number-of-steps');
        var now_value = progress_line_object.data('now-value');
        var new_value = 0;
        if(direction == 'right') {
            new_value = now_value + ( 100 / number_of_steps );
        }
        else if(direction == 'left') {
            new_value = now_value - ( 100 / number_of_steps );
        }
        progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
    }

    $(document).ready(function() {
        // Form
        $('.f1 fieldset:first').fadeIn('slow');

        $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea').on('focus', function() {
            $(this).removeClass('input-error');
        });

        // step selanjutnya (ketika klik tombol selanjutnya)

        $(document).on('click', '.f1 .btn-next', function() {
        // $('.f1 .btn-next').on('click', function() {
            var parent_fieldset = $(this).parents('fieldset');
            var next_step = true;
            // navigation steps / progress steps
            var current_active_step = $(this).parents('.f1').find('.f1-step.active');
            var progress_line = $(this).parents('.f1').find('.f1-progress-line');

            // validasi form
            parent_fieldset.find('input[type="text"], input[type="password"], textarea').each(function() {
                if( $(this).val() == "" ) {
                    $(this).addClass('input-error');
                    next_step = false;
                }
                else {
                    $(this).removeClass('input-error');
                }
            });

            if( next_step ) {
                parent_fieldset.fadeOut(400, function() {
                    // change icons
                    current_active_step.removeClass('active').addClass('activated').next().addClass('active');
                    // progress bar
                    bar_progress(progress_line, 'right');
                    // show next step
                    $(this).next().fadeIn();
                    // scroll window to beginning of the form
                    scroll_to_class( $('.f1'), 20 );
                });
            }
        });

        // step sbelumnya (ketika klik tombol sebelumnya)
        $('.f1 .btn-previous').on('click', function() {
            // navigation steps / progress steps
            var current_active_step = $(this).parents('.f1').find('.f1-step.active');
            var progress_line = $(this).parents('.f1').find('.f1-progress-line');

            $(this).parents('fieldset').fadeOut(400, function() {
                // change icons
                current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
                // progress bar
                bar_progress(progress_line, 'left');
                // show previous step
                $(this).prev().fadeIn();
                // scroll window to beginning of the form
                scroll_to_class( $('.f1'), 20 );
            });
        });

        // submit (ketika klik tombol submit diakhir wizard)
        $('.f1').on('submit', function(e) {
            // validasi form
            $(this).find('input[type="text"], input[type="password"], textarea').each(function() {
                if( $(this).val() == "" ) {
                    e.preventDefault();
                    $(this).addClass('input-error');
                }
                else {
                    $(this).removeClass('input-error');
                }
            });
        });
    });
});
