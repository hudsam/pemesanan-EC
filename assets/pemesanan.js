$(document).ready(function(){
    $('#tanggal').val('2022-01-03'); // Tahun-Tanggal-Bulan
    $('#jam').val('08:00:00');

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
        $('#pilih-layanan').html(paket);
        $('#harga-layanan').html(harga);
    });

    $('label[for="paket-super"]').on('click', function() {
        var paket = $(this).data('paket');
        var harga = $(this).data('harga');
        $('#pilih-layanan').html(paket);
        $('#harga-layanan').html(harga);
    });

    $('label[for="paket-standard"]').on('click', function() {
        var paket = $(this).data('paket');
        var harga = $(this).data('harga');
        $('#pilih-layanan').html(paket);
        $('#harga-layanan').html(harga);
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
            $('td[for="harga-kamar"]').html(jumlahKamar * 15000);
        } else {
            $('tr[for="jumlah-kamar"]').addClass('d-none');
        }
        if (jumlahKamarMandi >= 1) {
            $('tr[for="jumlah-kamarmandi"]').removeClass('d-none');
            $('#satuan-kamarmandi').html(jumlahKamarMandi);
            $('td[for="harga-kamarmandi"]').html(jumlahKamarMandi * 25000);
        } else {
            $('tr[for="jumlah-kamarmandi"]').addClass('d-none');
        }
        if (jumlahRuangTengah >= 1) {
            $('tr[for="jumlah-ruangtengah"]').removeClass('d-none');
            $('#satuan-ruangtengah').html(jumlahRuangTengah);
            $('td[for="harga-ruangtengah"]').html(jumlahRuangTengah * 15000);
        } else {
            $('tr[for="jumlah-ruangtengah"]').addClass('d-none');
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
            $('td[for="harga-dapur"]').html(jumlahDapur * 15000);
        } else {
            $('tr[for="jumlah-dapur"]').addClass('d-none');
        }
        if (jumlahKulkas >= 1) {
            $('tr[for="jumlah-kulkas"]').removeClass('d-none');
            $('#satuan-kulkas').html(jumlahKulkas);
            $('td[for="harga-kulkas"]').html(jumlahKulkas * 15000);
        } else {
            $('tr[for="jumlah-kulkas"]').addClass('d-none');
        }
        if (jumlahKamarKos >= 1) {
            $('tr[for="jumlah-kamarkos"]').removeClass('d-none');
            $('#satuan-kamarkos').html(jumlahKamarKos);
            $('td[for="harga-kamarkos"]').html(jumlahKamarKos * 15000);
        } else {
            $('tr[for="jumlah-kamarkos"]').addClass('d-none');
        }
        if (jumlahEcoEnzyme >= 1) {
            $('tr[for="jumlah-ecoenzyme"]').removeClass('d-none');
            $('#satuan-ecoenzyme').html(jumlahEcoEnzyme);
            $('td[for="harga-ecoenzyme"]').html(jumlahEcoEnzyme * 10000);
        } else {
            $('tr[for="jumlah-ecoenzyme"]').addClass('d-none');
        }

        if (
            $('#pilih-layanan').text() !== '' & $('#harga-layanan').text() !== ''
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
        var layanan = $('#harga-layanan').text().replace('Rp ', '');
        var ruangan = 0;
        var ekstra = 0;

        var total = parseInt(layanan) + parseInt(ruangan) + parseInt(ekstra);
        $('.total-tagihan').text('Rp ' + total + '.000');
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
