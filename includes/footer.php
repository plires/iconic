<footer class="container-fluid">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="row">
        
        <div class="logo col-md-2">
          <img class="img-fluid" src="./img/logo-iconic-footer.png" alt="logo iconic footer">
        </div>

        <div class="data col-md-8">

          <ul class="menu_footer">

            <li class="item">
              <?php $resMenu = $menu == 'inventory' ? 'active' : '';  ?>
              <button class="transition <?= $resMenu ?>" onclick="activeSubMenuFooter()">Inventory
                <i class="transition fa-solid fa-angle-down"></i>
              </button>

              <ul id="submenu_footer" class="transition">

                <li>
                  <?php $res = $submenu == 'ssk' ? 'active' : '';  ?>
                  <a 
                    class="transition <?= $res ?>" 
                    href="./mercedes-benz-ssk-recreation.php">Mercedes Benz Comte Trossi</a>
                </li>

                <li>
                  <?php $res = $submenu == 'monza' ? 'active' : '';  ?>
                  <a 
                    class="transition <?= $res ?>" 
                    href="./alfa-romeo-monza-brianza.php">Alfa Romeo Monza Brianza</a>
                </li>

                <li>
                  <?php $res = $submenu == 'fianchi' ? 'active' : '';  ?>
                  <a 
                    class="transition <?= $res ?>" 
                    href="./alfa-romeo-fianchi-stretti.php">Alfa Romeo Fianchi Stretti
                  </a>
                </li>

              </ul>
            </li>

            <li class="item"><a class="transition" href="./#legacy">Legacy</a></li>
            <li class="item"><a class="transition" href="./#history">Our Story</a></li>
            <li class="item"><a class="transition" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a></li>
          </ul>

          <div class="copy">
            <p>All rights reserved &copy; <?= date('Y') ?>. Iconic Auto Sports. | 
              <a class="transition" rel="noopener" target="_blank" href="mailto:info@iconicautosports.com">info@iconicautosports.com</a>
          </div>
        </div>

        <div class="col-md-2 rrss">
          <ul>
            <li>
              <a class="transition" href="<?= RRSS_FACEBOOK ?>" rel="noopener" target="_blank">
                <i class="fa-brands fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="transition" href="<?= RRSS_INSTAGRAM ?>" rel="noopener" target="_blank">
                <i class="fa-brands fa-instagram-square"></i>
              </a>
            </li>
            <li>
              <a class="transition" href="<?= RRSS_LINKEDIN ?>" rel="noopener" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
  
      </div>
    </div>
  </div>
</footer>