const header = document.getElementsByTagName("header")[0];
const toggle = document.getElementById("hamburger");
const menu = document.getElementById("menu");
const submenu = document.getElementById("submenu");
const submenuAvailable = document.getElementById("submenu_available");
const submenuSold = document.getElementById("submenu_sold");
const arrow = document.getElementById("arrow");
const arrowAvailable = document.getElementById("arrow_available");
const arrowSold = document.getElementById("arrow_sold");
const submenuFooter = document.getElementById("submenu_footer");
const itemsHeader = document.getElementsByClassName("item_header");
const itemsFooter = document.getElementsByClassName("item");
const btnPrimaryInventory = document.getElementById("btn_primary_inventory");

var hash = window.location.hash;
cleanHash = hash.replace("#", ""); //remove the #

if (
  cleanHash !== "" &&
  cleanHash !== "msg_contacto" &&
  cleanHash !== "errors"
) {
  var itemMenu = document.getElementsByClassName(cleanHash);
  itemMenu[0].classList.add("active");
}

function menuToggle() {
  menu.classList.toggle("active");
  toggle.classList.toggle("active");

  if (toggle.classList.contains("fa-bars")) {
    toggle.classList.remove("fa-bars");
    toggle.classList.add("fa-times");
  } else {
    toggle.classList.add("fa-bars");
    toggle.classList.remove("fa-times");
  }
}

function activeSubMenu(currentItem, currentArrow) {
  let item;
  let flecha;

  switch (currentItem) {
    case "submenu":
      item = submenu;
      flecha = arrow;
      break;

    case "available":
      item = submenuAvailable;
      flecha = arrowAvailable;
      submenuSold.classList.remove("active_submenu");
      arrowSold.classList.add("fa-angle-down");
      arrowSold.classList.remove("fa-angle-up");
      break;

    case "sold":
      item = submenuSold;
      flecha = arrowSold;
      submenuAvailable.classList.remove("active_submenu");
      arrowAvailable.classList.add("fa-angle-down");
      arrowAvailable.classList.remove("fa-angle-up");
      break;
  }

  item.classList.toggle("active_submenu");

  if (flecha.classList.contains("fa-angle-down")) {
    flecha.classList.remove("fa-angle-down");
    flecha.classList.add("fa-angle-up");
  } else {
    flecha.classList.add("fa-angle-down");
    flecha.classList.remove("fa-angle-up");
  }
}

function activeSubMenuFooter() {
  submenuFooter.classList.toggle("active_submenu");
}

toggle.addEventListener("click", function () {
  menuToggle();
});

for (var i = 0; i < itemsHeader.length; i++) {
  itemsHeader[i].addEventListener("click", function (e) {
    cleanMenuHeader(e);
  });
}

for (var i = 0; i < itemsFooter.length; i++) {
  itemsFooter[i].addEventListener("click", function (e) {
    cleanMenuFooter(e);
  });
}

function cleanMenuHeader(e) {
  if (event.target.tagName === "I") {
    return;
  }

  for (var i = 0; i < itemsHeader.length; i++) {
    itemsHeader[i].children[0].classList.remove("active");
  }

  if (btnPrimaryInventory != e.target) {
    e.target.classList.add("active");
  } else {
    btnPrimaryInventory.classList.add("active");
  }

  if (e.target.classList.contains("inventory")) {
    btnPrimaryInventory.classList.add("active");
    submenuAvailable.classList.remove("active");
    submenuSold.classList.remove("active");
  }
}

function cleanMenuFooter(e) {
  for (var i = 0; i < itemsFooter.length; i++) {
    itemsFooter[i].children[0].classList.remove("active");
  }

  e.target.classList.add("active");
}

function showlHeader() {
  header.classList.add("header_small");
}

function hidelHeader() {
  header.classList.remove("header_small");
}

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    showlHeader();
  } else {
    hidelHeader();
  }
});

AOS.init();

// ============================================
// ANTI-SPAM: Gestión del Timestamp
// ============================================

function setFormTimestamp() {
  const timestampField = document.getElementById("form_timestamp");
  if (timestampField && !timestampField.value) {
    const timestamp = Math.floor(Date.now() / 1000);
    timestampField.value = timestamp;
  }
}

// Método 1: Cuando se muestra el modal (Bootstrap 5)
const contactModal = document.getElementById("contactModal");
if (contactModal) {
  contactModal.addEventListener("shown.bs.modal", function () {
    setFormTimestamp();
  });

  // Método 2: Cuando se oculta el modal, limpiar
  contactModal.addEventListener("hidden.bs.modal", function () {
    const timestampField = document.getElementById("form_timestamp");
    if (timestampField) {
      timestampField.value = "";
    }
  });
}

// Método 3: Establecer al cargar la página (fallback)
document.addEventListener("DOMContentLoaded", function () {
  // Si el modal está visible al cargar, establecer timestamp
  if (contactModal && contactModal.classList.contains("show")) {
    setFormTimestamp();
  }
});

// Método 4: Antes de enviar el formulario (último recurso)
$("#send").click(function (event) {
  // Asegurar que el timestamp esté establecido
  const timestampField = document.getElementById("form_timestamp");
  if (!timestampField || !timestampField.value) {
    console.warn("⚠️ Timestamp no establecido, configurando ahora...");
    setFormTimestamp();
  }

  var errorsInFieldsFront = false;

  // Validacion del Formulario
  var form = document.getElementById("form-contacto");

  if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    errorsInFieldsFront = true;
  }
  form.classList.add("was-validated");

  if (!errorsInFieldsFront) {
    // Verificar una última vez el timestamp antes de enviar
    const finalTimestamp = document.getElementById("form_timestamp").value;
    console.log("📤 Enviando formulario con timestamp:", finalTimestamp);

    grecaptcha.ready(function () {
      grecaptcha
        .execute("6Ld2854fAAAAALvYKuvvuEqNSyaAbqK4UnZUJXKW", {
          action: "validarFormulario",
        })
        .then(function (token) {
          $("#form-contacto").prepend(
            '<input type="hidden" name="token" value="' + token + '" >'
          );
          $("#form-contacto").prepend(
            '<input type="hidden" name="action" value="validarFormulario" >'
          );
          $("#form-contacto").submit();
        });
    });
  }
});
