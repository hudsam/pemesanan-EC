$(document).ready(function(){
    $('#tanggal').val('2022-01-03'); // Tahun-Tanggal-Bulan
    $('#jam').val('08:00:00');

    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-start',
        showConfirmButton: false,
        timer: 5000,
        width: '30rem',
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });

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

    $('label[for="ruangan-kamar"]').on('click', function() {
        var ruangan = $(this).data('ruangan');
        var harga = $(this).data('harga');
        $('#pilih-ruangan').html(ruangan);
        $('#harga-ruangan').html(harga);
    });

    $('label[for="ruangan-kamarmandi"]').on('click', function() {
        var ruangan = $(this).data('ruangan');
        var harga = $(this).data('harga');
        $('#pilih-ruangan').html(ruangan);
        $('#harga-ruangan').html(harga);
    });

    $('label[for="ruangan-ruangtengah"]').on('click', function() {
        var ruangan = $(this).data('ruangan');
        var harga = $(this).data('harga');
        $('#pilih-ruangan').html(ruangan);
        $('#harga-ruangan').html(harga);
    });

    $('label[for="ruangan-tidakada"]').on('click', function() {
        var ruangan = $(this).data('ruangan');
        var harga = $(this).data('harga');
        $('#pilih-ruangan').html(ruangan);
        $('#harga-ruangan').html(harga);
    });

    $('label[for="ekstra-dapur"]').on('click', function() {
        var ekstra = $(this).data('ekstra');
        var harga = $(this).data('harga');
        $('#pilih-ekstra').html(ekstra);
        $('#harga-ekstra').html(harga);
    });

    $('label[for="ekstra-kulkas"]').on('click', function() {
        var ekstra = $(this).data('ekstra');
        var harga = $(this).data('harga');
        $('#pilih-ekstra').html(ekstra);
        $('#harga-ekstra').html(harga);
    });

    $('label[for="ekstra-pindahkos"]').on('click', function() {
        var ekstra = $(this).data('ekstra');
        var harga = $(this).data('harga');
        $('#pilih-ekstra').html(ekstra);
        $('#harga-ekstra').html(harga);
    });

    $('label[for="ekstra-ecoenzyme"]').on('click', function() {
        var ekstra = $(this).data('ekstra');
        var harga = $(this).data('harga');
        $('#pilih-ekstra').html(ekstra);
        $('#harga-ekstra').html(harga);
    });

    $('label[for="ekstra-tidakada"]').on('click', function() {
        var ekstra = $(this).data('ekstra');
        var harga = $(this).data('harga');
        $('#pilih-ekstra').html(ekstra);
        $('#harga-ekstra').html(harga);
    });

    // Aksi 'button next' pada tahap: Layanan
    $('#nextLayanan').on('click', function() {
        if (
            ($('#pilih-layanan').text() !== '' & $('#harga-layanan').text() !== '')
            & ($('#pilih-ruangan').text() !== '' & $('#harga-ruangan').text() !== '')
            & ($('#pilih-ekstra').text() !== '' & $('#harga-ekstra').text() !== '')
        )
        {
            $('#nextLayanan').addClass('btn-next');
            totalBiayaPesanan();
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
        var ruangan = $('#harga-ruangan').text().replace('Rp ', '');
        var ekstra = $('#harga-ekstra').text().replace('Rp ', '');

        var total = parseInt(layanan) + parseInt(ruangan) + parseInt(ekstra);
        $('.total-tagihan').text('Rp ' + total + '.000');
    }

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
