  <footer id="footer">
    <p class="copyright">© <?php echo date("Y"); ?> Kenta Kodashima</p>
  </footer>
  <script src="/js/common.js"></script>
  <script src="<?php echo isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'js/function.js' ?>"></script>
</body>
</html>