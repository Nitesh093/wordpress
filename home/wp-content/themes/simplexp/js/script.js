let simplexp_hamburger = document.querySelector(".hamburger-icon");
let simplexp_navbar = document.querySelector(".navbar");
let simplexp_menu = document.querySelector(".menu");



// Create menu closer anchor and li
let simplexp_mci = document.createElement('li');
let simplexp_mcl = document.createElement('a');
simplexp_mcl.textContent = 'Close Menu';
simplexp_mci.className = 'menu-item';
simplexp_mcl.href = '#';

// Add event listener to menu closer anchor
simplexp_mcl.addEventListener('click', function(event) {

  simplexp_menu.removeChild(simplexp_mci);
  simplexp_navbar.classList.toggle('open');
  simplexp_hamburger.classList.toggle('close');

});

simplexp_mci.appendChild(simplexp_mcl);

// Show menu on mobile and add menu closer to ul.menu
simplexp_hamburger.addEventListener("click", function() {

  simplexp_navbar.classList.toggle('open');
  simplexp_hamburger.classList.toggle('close');

  if(simplexp_menu.contains(simplexp_mci)) {
    simplexp_menu.removeChild(simplexp_mci);
  }else {
    simplexp_menu.appendChild(simplexp_mci);
  }

  // Add focus to first element inside ul.menu
  if(simplexp_navbar.classList.contains('open')) {
    setTimeout(function() {
        document.querySelector('.navbar .menu > li:first-child > a').focus();
    }, 100);
  }

});




/* FAQ Toggler */
let simplexp_faq_items = document.querySelectorAll('.faq .wp-block-column > h3');

simplexp_faq_items.forEach((item) => {
	item.addEventListener("click", function(e) {
		e.preventDefault();
		item.nextElementSibling.classList.toggle('show-group-block');
	});
});





// Menu Keyboard Navigation
simplexp_navbar.addEventListener('keydown', function(event) {
  
    var menuItems = simplexp_navbar.querySelectorAll('.menu-item > a');
    var firstMenuItem = menuItems[0];
    var lastMenuItem = menuItems[menuItems.length - 1];
    if (simplexp_navbar.classList.contains('open')) {
        if (event.key === 'Tab') {
            if (event.shiftKey) { // Shift + Tab
              console.log(document.activeElement.nextElementSibling);
                if(document.activeElement === firstMenuItem) {
                  event.preventDefault();
                  lastMenuItem.focus();
                }

            } else { // Tab
              if(document.activeElement === lastMenuItem) {
                event.preventDefault();
                firstMenuItem.focus();
              }
            }
        }
    }
});


