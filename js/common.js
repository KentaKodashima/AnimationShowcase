// $(window).scroll(function () {
//   /**
//    * Move text on scroll
//    * Refs:
//    *    - https://www.youtube.com/watch?v=tRve72dq4MU
//    *    - https://css-tricks.com/animate-text-on-scroll/
//   */
  
// })

/**
 * Nav animations
*/
// Hamburger menu toggle
let navElement = document.getElementById('nav')
let hamburgerButton = document.getElementById('nav').getElementsByClassName('menu-button')[0]

hamburgerButton.addEventListener('click', function() {
  navElement.classList.toggle('is-opened')
})

// Detect clicks on mobile menu
document.querySelectorAll('.nav-list-item-mobile').forEach(listItem => {
  listItem.addEventListener('click', e => {
    listItem.classList.toggle('is-opened')
  })
})
/**
 * ===== Nav animations end =====
*/