<div class="footer-wrap pd-20 mb-20 card-box">
    Hospital Management System
</div>
</div>
<!-- js -->
<script src="{{url('AdminLinks')}}/vendors/scripts/core.js"></script>
<script src="{{url('AdminLinks')}}/vendors/scripts/script.min.js"></script>
<script src="{{url('AdminLinks')}}/vendors/scripts/process.js"></script>
<script src="{{url('AdminLinks')}}/vendors/scripts/layout-settings.js"></script>
<script src="{{url('AdminLinks')}}/src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="{{url('AdminLinks')}}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{url('AdminLinks')}}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('AdminLinks')}}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="{{url('AdminLinks')}}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('AdminLinks')}}/vendors/scripts/dashboard.js"></script>

<!-- add sweet alert js & css in footer -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{url('AdminLinks')}}/src/plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="{{url('AdminLinks')}}/src/plugins/sweetalert2/sweet-alert.init.js"></script>


<!-- Google Tag Manager (noscript) -->
<noscript
><iframe
    src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
    height="0"
    width="0"
    style="display: none; visibility: hidden"
></iframe
></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
const a = document.querySelectorAll('.select2.select2-container.select2-container--default');

for (let i = 0; i < a.length; i++) {
  if (i%2 !== 0) {
    a[i].style.display = "none";
  }
}
</script>
@stack('add_Doctor')
@stack('select_dropdown')

</body>
</html>
