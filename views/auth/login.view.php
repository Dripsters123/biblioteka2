<?php require "views/components/head.php" ?>
<div class="auth-container">
  <div class="header-bar">
    <h1 class="login-h1">Login</h1>
  </div>

  <div class="border-container">
    <form method="POST" class="auth-form">
      <label>
        E-mail:
        <input name="email" type="email" />
      </label>
      <?php if (isset($errors["email"])) { ?>
        <p><?= $errors["email"] ?></p>
      <?php } ?>
      <label>
        Password:
        <input name="password" type="password" />
      </label>
      <?php if (isset($errors["password"])) { ?>
        <p><?= $errors["password"] ?></p>
      <?php } ?>
      <button>Login</button>
    </form>

    <a href="/register" class="auth-link">Register</a>
  </div>

  <?php if (isset($_SESSION["flash"])) { ?>
    <p><?= $_SESSION["flash"] ?></p>
  <?php } ?>
</div>

<?php require "views/components/footer.php" ?>