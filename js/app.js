const header = document.getElementsByTagName("header")[0]
const toggle = document.getElementById('hamburger')
const menu = document.getElementById('menu')
const submenu = document.getElementById('submenu')
const submenuFooter = document.getElementById('submenu_footer')
const arrow = document.getElementById('arrow')
const itemsHeader = document.getElementsByClassName('item_header')
const itemsFooter = document.getElementsByClassName('item')

var hash = window.location.hash
cleanHash = hash.replace("#", ""); //remove the #

if (cleanHash !== '' && cleanHash !== 'msg_contacto' && cleanHash !== 'errors') {
  var itemMenu = document.getElementsByClassName(cleanHash)
  itemMenu[0].classList.add('active')
}

function menuToggle() {

	menu.classList.toggle('active')
	toggle.classList.toggle('active')
	
	if (toggle.classList.contains("fa-bars")) {

		toggle.classList.remove('fa-bars')
		toggle.classList.add('fa-times')

	} else {

		toggle.classList.add('fa-bars')
		toggle.classList.remove('fa-times')
		
	}

}

function activeSubMenu() {
  submenu.classList.toggle('active_submenu')

  if ( arrow.classList.contains('fa-angle-down') ) {
    arrow.classList.remove('fa-angle-down')
    arrow.classList.add('fa-angle-up')
  } else {
    arrow.classList.add('fa-angle-down')
    arrow.classList.remove('fa-angle-up')
  }

}

function activeSubMenuFooter() {
  submenuFooter.classList.toggle('active_submenu')
}

toggle.addEventListener('click', function(){
	menuToggle()
});

for (var i = 0; i < itemsHeader.length; i++) {

  itemsHeader[i].addEventListener('click', function(e){
    cleanMenuHeader(e)
  });

}

for (var i = 0; i < itemsFooter.length; i++) {

  itemsFooter[i].addEventListener('click', function(e){
    cleanMenuFooter(e)
  });

}

function cleanMenuHeader(e) {
  for (var i = 0; i < itemsHeader.length; i++) {
    itemsHeader[i].children[0].classList.remove('active')
  }

  e.target.classList.add('active')
}

function cleanMenuFooter(e) {
  for (var i = 0; i < itemsFooter.length; i++) {
    itemsFooter[i].children[0].classList.remove('active')
  }

  e.target.classList.add('active')
}

function showlHeader() {
  header.classList.add('header_small')
}

function hidelHeader() {
  header.classList.remove('header_small')
}

window.addEventListener('scroll', function() {

  if ( window.scrollY > 100) {
    showlHeader()
  } else {
    hidelHeader()
  }

});

AOS.init();

$('#send').click(function() { // validar formulario

  var errorsInFieldsFront = false

  // Validacion del Formulario
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var form = document.getElementById('form-contacto');
  
  if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    errorsInFieldsFront = true
  }
  form.classList.add('was-validated');

  if (!errorsInFieldsFront) {
    grecaptcha.ready(function() {
      grecaptcha.execute('6LflZIofAAAAAOuuw2MHK9vwm6RxVWo7c-v-tVIL', {
        action: 'validarFormulario'
        }).then(function(token) {
        $('#form-contacto').prepend('<input type="hidden" name="token" value="' + token + '" >');
        $('#form-contacto').prepend('<input type="hidden" name="action" value="validarFormulario" >');
        $('#form-contacto').submit();
      });
    });
  } 

});

