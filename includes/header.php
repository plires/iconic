<header>

  <a class="content_logo transition" href="./">
    <img class="logo transition" src="./img/logo-iconic-header.png" alt="logo small iconic">
  </a>

  <i id="hamburger" class="fas fa-bars transition"></i>

  <nav id="menu" class="transition">
    <ul>

      <li>
        <a class="transition" href="#" onclick="activeSubMenu()">Inventory</a>

        <ul id="submenu" class="transition">
          <li><a class="transition" href="#" onclick="menuToggle()">available</a></li>
          <li><a class="transition" href="#" onclick="menuToggle()">sold</a></li>
        </ul>

      </li>

      <li><a class="transition" href="#" onclick="menuToggle()">Legacy</a></li>
      <li><a class="transition" href="#" onclick="menuToggle()">Our Story</a></li>
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