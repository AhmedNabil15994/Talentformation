<!-- Javascript -->
<script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-validate.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/numinate.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-isotope.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/toastr.min.js') }}"></script>

<script>
    const currentLoction = location.href;
    const menuItem = document.querySelectorAll('nav ul li a');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLoction) {
            menuItem[i].className = "active"
        }
    }
</script>

@stack('js')