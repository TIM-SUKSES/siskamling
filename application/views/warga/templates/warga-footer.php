  <footer class="bg-light text-center text-lg-start">
    <div class="text-white text-center p-3" style="background-color: #434343;">
      Copyright © 2023 SISKAMLING All Rights Reserved
    </div>
  </footer>

  <script>
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
</body>
</html>