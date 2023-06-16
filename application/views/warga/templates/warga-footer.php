  <footer class="bg-light text-center text-lg-start">
    <div class="text-white text-center p-3" style="background-color: #434343;">
      Copyright © 2023 SISKAMLING All Rights Reserved
    </div>
  </footer>

  <script>

    const dropdownMenu = document.querySelector('.dropdown-menu-item');
    const dropdownItem = document.querySelector('.dropdown-nav-menu');

    dropdownMenu.addEventListener('click', function () {
        dropdownItem.classList.toggle('hidden-nav');
    });

    // JS Blog Section Start
    var splide = new Splide('.splide-news', {
        rewind: true,
        perPage: 1,
        gap: 30,
    });

    // Ganti perPage menjadi 3 ketika ukuran layar mencapai 768px
    if (window.matchMedia('(min-width: 768px)').matches) {
        var splide = new Splide('.splide-news', {
        rewind: true,
        perPage: 3,
        gap: 30,
        });
    }

    splide.mount();

    var splide = new Splide('.splide-blog', {
        rewind: true,
        perPage: 1,
        gap: 30,
    });

    // Ganti perPage menjadi 3 ketika ukuran layar mencapai 768px
    if (window.matchMedia('(min-width: 768px)').matches) {
        var splide = new Splide('.splide-blog', {
        rewind: true,
        perPage: 3,
        gap: 30,
        });
    }

    splide.mount();
    // JS Blog Section End
  </script>
  <script src="<?php echo base_url('assets/'); ?>js/script.js"></script>
  <script src="<?php echo base_url('assets/'); ?>bootstrap-5.3.0/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>bootstrap-5.3.0/bootstrap.min.js"></script>
<!-- Export File  -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>