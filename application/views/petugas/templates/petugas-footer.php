  <footer class="bg-light text-center text-lg-start">
    <div class="text-white text-center p-3" style="background-color: #434343;">
      Copyright © 2023 SISKAMLING All Rights Reserved
    </div>
  </footer>

  <script>
    // Dropdown Menu
    const dropdownMenu = document.querySelector('.dropdown-menu-item');
    const dropdownItem = document.querySelector('.dropdown-nav-menu');

    dropdownMenu.addEventListener('click', function () {
        dropdownItem.classList.toggle('hidden-nav');
    });
    
    // JS Random Text Absen Petugas Start
    window.onload = function () {
      // Membuat array dari teks yang akan diacak
      var teks =
        [
          "Foto depan Pos Ronda",
          "Foto depan rumah RT",
          "Foto depan gapura desa",
          "Foto sambil senyum",
          "Foto dengan dua jari"
        ];

      // Menghasilkan indeks acak dari array teks
      var indeksAcak = Math.floor(Math.random() * teks.length);

      // Menampilkan hasil acakan di dalam input dengan tipe "text"
      document.getElementById("random-text").value = teks[indeksAcak];
    };
    // JS Random Text Absen Petugas End


    
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