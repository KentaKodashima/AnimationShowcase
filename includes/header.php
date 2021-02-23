<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animation Showcase</title>
  <link rel="stylesheet" href="/css/sanitize.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- <script src="./js/function.js"></script> -->
</head>
<body>
  <header id="header">
    <div class="container">
      <nav id="nav">
        <h1 class="logo"><a href="/">Animation Showcase</a></h1>

        <button class='menu-button'>
          <span class='menu-bar'></span>
        </button>

        <ul class="nav-list-mobile">
          <li class="nav-list-item-mobile">
            <div class="menu-title">
              <a href="#">JS</a>
              <span class='plus-bar'></span>
            </div>
            <ul class="dropdown">
              <li class="dropdown-item"><a href="/js-animations/scroll/">Scroll animations</a></li>
            </ul>
          </li>
          <li class="nav-list-item-mobile">
            <div class="menu-title">
              <a href="#">CSS</a>
              <span class='plus-bar'></span>
            </div>
            <ul class="dropdown">
              <li class="dropdown-item"><a href="/css-animations/scroll/">Scroll animations</a></li>
              <li class="dropdown-item"><a href="/css-animations/hover/">Hover Effects</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav-list">
          <li class="nav-list-item">
            <a href="">JS</a>
            <ul class="dropdown">
              <li class="dropdown-item"><a href="/js-animations/scroll/">Scroll animations</a></li>
            </ul>
          </li>
          <li class="nav-list-item">
            <a href="">CSS</a>
            <ul class="dropdown">
              <li class="dropdown-item"><a href="/css-animations/scroll/">Scroll animations</a></li>
              <li class="dropdown-item"><a href="/css-animations/hover/">Hover Effects</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>