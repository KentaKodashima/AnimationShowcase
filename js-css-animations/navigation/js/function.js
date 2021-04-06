/**
 * Nav animations
*/
// Hamburger menu toggle
let dropdownNavElelemt = document.getElementById('dropdown-on-hover-nav')
let dropdownHamburgerButton = document.getElementById('dropdown-on-hover-nav').getElementsByClassName('menu-button')[0]

dropdownHamburgerButton.addEventListener('click', function() {
  dropdownNavElelemt.classList.toggle('is-opened')
})

// Detect clicks on mobile menu
document.querySelectorAll('.dropdown-nav-list-item-mobile').forEach(listItem => {
  listItem.addEventListener('click', e => {
    listItem.classList.toggle('is-opened')
  })
})
/**
 * ===== Nav animations end =====
*/