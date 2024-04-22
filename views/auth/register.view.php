<?php require "views/components/head.php" ?>
<div class="auth-container">
  <h1 class="login-h1">Register</h1>
  <div class="border-container">
    <form class="auth-form" method="POST">
      <label>
        E-mail:
        <input name="email" type="email" class="auth-input" />
      </label>
      <?php if (isset($errors["email"])) { ?>
        <p><?= $errors["email"] ?></p>
      <?php } ?>
      <label>
        Password:
        <input name="password" type="password" class="auth-input" />
        <span class="explanation">(Must be 8 characters, 1 uppercase, 1 lowercase, 1 special symbol and 1 number)</span>
      </label>
      <?php if (isset($errors["password"])) { ?>
        <p><?= $errors["password"] ?></p>
      <?php } ?>
      <button>Register</button>
    </form>
  </div>
</div>
<?php require "views/components/footer.php" ?>

