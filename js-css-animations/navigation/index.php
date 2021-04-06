<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php') ?>
<main id="main">
  <section id="dropdown-menu">
    <div class="container">
      <h2 class="section-title">Dropdown Menu on Hover</h2>
      <div class="content">
        <div class="codepen-button top">
          <a href="https://codepen.io/KentaKodashima/pen/qBRXgGw">
            View on CodePen
          </a>
        </div>
        <header id="dropdown-on-hover-header">
          <div class="nav-container">
            <nav id="dropdown-on-hover-nav" class="nav">
              <h3 class="logo"><a href="/">Animation Showcase</a></h3>

              <button class='menu-button'>
                <span class='menu-bar'></span>
              </button>

              <ul class="nav-list-mobile">
                <?php foreach ($mainNavItems as $item) : ?>
                  <li class="dropdown-nav-list-item-mobile">
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
      </div>
    </div>
  </section>
</main>
<?php
  $load_script = true;
  include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php')
?>