  <footer id="footer">
    <p class="copyright">© <?php echo date("Y"); ?> Kenta Kodashima</p>
  </footer>
  <script src="/js/common.js"></script>
  <?php
    $http_or_https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
    $request_uri = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $base_uri = $http_or_https . $request_uri;
    
    if (isset($load_script) && $load_script) :
  ?>
    <script src="<?php echo $base_uri .'js/function.js' ?>"></script>
  <?php endif; ?>
</body>
</html>