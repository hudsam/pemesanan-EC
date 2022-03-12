    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript" rel="script"></script>
    <script src="assets/vendors/bootstrap-5.1.3/js/bootstrap.bundle.min.js" type="text/javascript" rel="script"></script>
    <script rel="script" type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" rel="script">
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

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
    </script>
</body>
</html>
