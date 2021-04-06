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