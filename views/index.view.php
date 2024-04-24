<?php require "../views/components/head.php" ?>
<div class="logout-container">
  <div class="header-bar">
    <h1 class="logout-h1">Are you sure you want to logout?</h1>
  </div>

  <div>
    <div class="logout-style">
      <form action="/logout" method="POST" class="logout-form">
        <button>Logout</button>
      </form>

      <a href="/books" class="logout-link">Return</a>
    </div>
  </div>
</div>
<?php require "../views/components/footer.php" ?>
