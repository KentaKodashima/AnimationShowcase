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
  <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/nav-items.php'); ?>
  <header id="header">
    <div class="container">
      <nav id="nav">
        <h1 class="logo"><a href="/">Animation Showcase</a></h1>

        <button class='menu-button'>
          <span class='menu-bar'></span>
        </button>

        <ul class="nav-list-mobile">
          <?php foreach ($mainNavItems as $item) : ?>
            <li class="nav-list-item-mobile">
              <div class="menu-title">
                <?php echo "<a href=\"{$item->slug}\">{$item->title}</a>" ?>
                <span class='plus-bar'></span>
              </div>
              <ul class="dropdown">
                <?php foreach ($item->subItems as $menu) : ?>
                  <?php echo "<li class=\"dropdown-item\"><a href=\"{$menu['slug']}\">{$menu['title']}</a></li>"; ?>
                <?php endforeach ?>
              </ul>
            </li>
          <?php endforeach ?>
        </ul>

        <ul class="nav-list">
          <?php foreach ($mainNavItems as $item) : ?>
            <li class="nav-list-item">
              <?php echo "<a href=\"{$item->slug}\">{$item->title}</a>"; ?>
              <ul class="dropdown">
                <?php foreach ($item->subItems as $menu) : ?>
                  <?php echo "<li class=\"dropdown-item\"><a href=\"{$menu['slug']}\">{$menu['title']}</a></li>"; ?>
                <?php endforeach ?>
              </ul>
            </li>
          <?php endforeach ?>
        </ul>
      </nav>
    </div>
  </header>