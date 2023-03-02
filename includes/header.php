<?php
  if (!isset($submenuItem)) {
    $submenuItem = '';
  }
?>

<header>

  <a class="content_logo transition" href="./">
    <img class="logo transition" src="./img/logo-iconic-header.png" alt="logo small iconic">
  </a>

  <i id="hamburger" class="fas fa-bars transition"></i>

  <nav id="menu" class="transition">
    <ul>

      <li class="item_header" id="content_active_submenu">
        <?php $resMenuHeader = $menu == 'inventory' ? 'active' : '';  ?>
        <button id="btn_primary_inventory" class="transition btn_primary_inventory <?= $resMenuHeader ?>" 
          onclick="activeSubMenu('submenu', 'arrow')">Inventory
          <i id="arrow" class="transition fa-solid fa-angle-down"></i>
        </button>

        <ul id="submenu" class="transition">

          <li>
            <?php $resMenuSubmenuHeader = $submenu == 'available' ? 'active' : '';  ?>
            <button 
              class="transition inventory <?= $resMenuSubmenuHeader ?>" 
              onclick="activeSubMenu('available', 'arrow_available')">Available
              <i id="arrow_available" class="transition fa-solid fa-angle-down"></i>
            </button>

            <ul id="submenu_available" class="transition">
              <li>
                <?php $resSubMenuItemsHeader = $submenuItem == 'mercedes_003' ? ' active' : '';  ?>
                <a class="transition item_small<?= $resSubMenuItemsHeader ?>" 
                  href="./mercedes-benz-ssk-recreation-003.php" 
                  onclick="menuToggle()">Mercedes benz comte trossi - BN003
                </a>
              </li>

              <li>
                <?php $resSubMenuItemsHeader = $submenuItem == 'monza_001' ? ' active' : '';  ?>
                <a class="transition item_small<?= $resSubMenuItemsHeader ?>" 
                  href="./alfa-romeo-monza-brianza-001.php" 
                  onclick="menuToggle()">alfa romeo monza brianza - BN001
                </a>
              </li>

              <li>
                <?php $resSubMenuItemsHeader = $submenuItem == 'fianchi_011' ? ' active' : '';  ?>
                <a class="transition item_small<?= $resSubMenuItemsHeader ?>" 
                  href="./alfa-romeo-fianchi-stretti-011.php" 
                  onclick="menuToggle()">alfa romeo fianchi stretti - BN011
                </a>
              </li>
            </ul>

          </li>

          <li>
            <?php $resMenuSubmenuHeader = $submenu == 'sold' ? 'active' : '';  ?>
            <button 
              class="transition inventory <?= $resMenuSubmenuHeader ?>" 
              onclick="activeSubMenu('sold', 'arrow_sold')">Sold
              <i id="arrow_sold" class="transition fa-solid fa-angle-down"></i>
            </button>

            <ul id="submenu_sold" class="transition">
              <li>
                <?php $resSubMenuItemsHeader = $submenuItem == 'mercedes_002' ? ' active' : '';  ?>
                <a class="transition item_small<?= $resSubMenuItemsHeader ?>" 
                  href="./mercedes-benz-ssk-recreation-002.php" 
                  onclick="menuToggle()">Mercedes benz comte trossi - BN002
                </a>
              </li>

              <li>
                <?php $resSubMenuItemsHeader = $submenuItem == 'fianchi_005' ? ' active' : '';  ?>
                <a class="transition item_small<?= $resSubMenuItemsHeader ?>" 
                  href="./alfa-romeo-fianchi-stretti-005.php" 
                  onclick="menuToggle()">alfa romeo fianchi stretti - BN005
                </a>
              </li>
            </ul>

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