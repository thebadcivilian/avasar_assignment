<footer class="footer border-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Mohammad Raiyan
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-primary btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>





<!-- JAVASCRIPT -->
<script src="{{ url('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('public/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ url('public/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ url('public/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ url('public/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ url('public/assets/js/plugins.js') }}"></script>
<script src="{{ url('public/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

<!-- apexcharts -->
<script src="{{ url('public/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ url('public/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ url('public/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ url('public/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ url('public/assets/js/pages/dashboard-crm.init.js') }}"></script>


<!-- App js -->
<script src="{{ url('public/assets/js/app.js') }}"></script>
<script src="{{ url('public/assets/js/pages/form-editor.init.js') }}"></script>
<script src="{{ url('public/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>


<script src="{{ url('public/assets/js/pages/datatables.init.js') }}"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function DeleteItems(page, action, id) {
        var where_to = confirm("Do you really want to Delete this??");
        if (where_to == true) {
            window.location.href = page + "/" + action + "/" + id;
        }
    }
</script>
<script>
    tinymce.init({
        selector: '.tinymce',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        branding: false,
    });
</script>
@yield('js_bottom')
</body>

</html>
