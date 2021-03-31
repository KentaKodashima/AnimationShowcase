// Hamburger buttons toggling
let humburgerToCrossBlock = document.getElementById('hamburger-buttons').getElementsByClassName('humburger-to-cross')[0]
let hamburgerToCross = document.getElementById('hamburger-buttons').getElementsByClassName('menu-button')[0]

hamburgerToCross.addEventListener('click', function() {
  humburgerToCrossBlock.classList.toggle('is-opened')
})