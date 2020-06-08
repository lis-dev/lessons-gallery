<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">ITEA</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">Главная</a>
    <a class="p-2 text-dark" href="/contact.php">Связаться с нами</a>
  </nav>
  <?php if (isset($_COOKIE['auth'])): ?>
    <a class="btn btn-outline-primary" href="/auth.php?exit">Выход</a>
  <?php else: ?>
    <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
  <?php endif ?>
</div>