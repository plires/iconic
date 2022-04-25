<header>

  <a class="content_logo transition" href="./">
    <img class="logo transition" src="./img/logo-iconic-header.png" alt="logo small iconic">
  </a>

  <i id="hamburger" class="fas fa-bars transition"></i>

  <nav id="menu" class="transition">
    <ul>

      <li id="content_active_submenu">
        <button class="transition" onclick="activeSubMenu()">Inventory
          <i id="arrow" class="transition fa-solid fa-angle-down"></i>
        </button>

        <ul id="submenu" class="transition">

          <li><a class="transition" href="./mercedes-benz-ssk-recreation.php" onclick="menuToggle()">Mercedes Benz Comte Trossi</a></li>
          <li><a class="transition" href="./alfa-romeo-monza-brianza.php" onclick="menuToggle()">Alfa Romeo Monza Brianza</a></li>
          <li><a class="transition" href="./alfa-romeo-fianchi-stretti.php" onclick="menuToggle()">Alfa Romeo Fianchi Stretti</a></li>
        </ul>

      </li>

      <li><a class="transition" href="#legacy" onclick="menuToggle()">Legacy</a></li>
      <li><a class="transition" href="#history" onclick="menuToggle()">Our Story</a></li>
      <li>
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