function setelahTransaksi() {
    let timerInterval
    Swal.fire({
        title: 'Skenario Transaksi Pembayaran',
        html: 'Elemen akan ke tahap selanjutnya pada <b></b> ms.',
        timer: 5000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('Pop-up penilaian muncul #' + Math.random())
            // $('#modalPenilaian').modal({ show: true});
            $('#modalPenilaian').modal('show');
        }
    })
}

$(function() {
    $(document).on({
        mouseover: function(event) {
            $(this).find('.far').addClass('star-over');
            $(this).prevAll().find('.far').addClass('star-over');
        },
        mouseleave: function(event) {
            $(this).find('.far').removeClass('star-over');
            $(this).prevAll().find('.far').removeClass('star-over');
        }
    }, '.rate');
    $(document).on('click', '.rate', function() {
        if ( !$(this).find('.star').hasClass('rate-active') ) {
            $(this).siblings().find('.star').addClass('far').removeClass('fas rate-active');
            $(this).find('.star').addClass('rate-active fas').removeClass('far star-over');
            $(this).prevAll().find('.star').addClass('fas').removeClass('far star-over');
        } /*else {
            console.log('has');
        }*/
    });
});
