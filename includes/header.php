<header>

  <a class="content_logo transition" href="./">
    <img class="logo transition" src="./img/logo-iconic-header.png" alt="logo small iconic">
  </a>

  <i id="hamburger" class="fas fa-bars transition"></i>

  <nav id="menu" class="transition">
    <ul>

      <li class="item_header" id="content_active_submenu">
        <?php $resMenuHeader = $menu == 'inventory' ? 'active' : '';  ?>
        <button 
          class="transition inventory <?= $resMenuHeader ?>" 
          onclick="activeSubMenu()">Inventory
          <i id="arrow" class="transition fa-solid fa-angle-down"></i>
        </button>

        <ul id="submenu" class="transition">

          <li>
            <?php $resSubMenuHeader = $submenu == 'ssk' ? 'active' : '';  ?>
            <a 
              class="transition <?= $resSubMenuHeader ?>" 
              href="./mercedes-benz-ssk-recreation.php" 
              onclick="menuToggle()">Mercedes Benz Comte Trossi
            </a>
          </li>

          <li>
            <?php $resSubMenuHeader = $submenu == 'monza' ? 'active' : '';  ?>
            <a class="transition <?= $resSubMenuHeader ?>" 
              href="./alfa-romeo-monza-brianza.php" 
              onclick="menuToggle()">Alfa Romeo Monza Brianza
            </a>
          </li>

          <li>
            <?php $resSubMenuHeader = $submenu == 'fianchi' ? 'active' : '';  ?>
            <a 
              class="transition <?= $resSubMenuHeader ?>" 
              href="./alfa-romeo-fianchi-stretti.php" 
              onclick="menuToggle()">Alfa Romeo Fianchi Stretti
            </a>
          </li>

        </ul>

      </li>

      <li class="item_header">
        <a 
        class="transition legacy" 
        href="./#legacy" 
        onclick="menuToggle()">Legacy</a>
      </li>

      <li class="item_header">
        <a 
          class="transition history" 
          href="./#history" 
          onclick="menuToggle()">Our Story</a>
      </li>

      <li class="item_header">
        <a 
          class="transition" 
          href="#" 
          data-bs-toggle="modal" 
          data-bs-target="#contactModal">Contact
        </a>
      </li>
    </ul>
  </nav>

</header>