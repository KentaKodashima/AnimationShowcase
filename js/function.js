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


/**
 * JS + CSS page
*/
// Hamburger buttons toggling
let humburgerToCrossBlock = document.getElementById('hamburger-buttons').getElementsByClassName('humburger-to-cross')[0]
let hamburgerToCross = document.getElementById('hamburger-buttons').getElementsByClassName('menu-button')[0]

hamburgerToCross.addEventListener('click', function() {
  humburgerToCrossBlock.classList.toggle('is-opened')
})
/**
 * =====  JS + CSS page end =====
*/


/**
 * JS page
*/
// Scroll animations
let textPath = document.querySelector('#text-path')
let path = document.querySelector(textPath.getAttribute('href'))
let pathLength = path.getTotalLength()
let textContainer = document.querySelector('#text-container')

function updateTextPathOffset(offset) {
  textPath.setAttribute('startOffset', offset)
}

updateTextPathOffset(-pathLength)

function onScroll() {
  requestAnimationFrame(function() {
    let rect = textContainer.getBoundingClientRect()
    let scrollPresent = rect.y / window.innerHeight
    updateTextPathOffset(scrollPresent * pathLength / 2)
  })
}
window.addEventListener('scroll', onScroll)
/**
 * ===== JS page end =====
*/