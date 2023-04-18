<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
    
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a  class="nav-link px-2 text-secondary">NewItProgger</a></li>    
          <li><a href="./index.php" class="nav-link px-2 text-white">Главная</a></li>
          <li><a href="./about.php" class="nav-link px-2 text-white">Контакты</a></li>
        </ul>
        <div class="text-end">
          <?php 
          if($_COOKIE['user'] == 'Yes'):
          ?>
           <a class="btn btn-outline-light me-2" href="./auth.php">Кабинет пользователья</a>
           <?php else:
            ?>
          <a class="btn btn-outline-light me-2" href="./auth.php">Войти</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </header>