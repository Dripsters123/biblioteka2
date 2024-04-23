<?php require "../views/components/head.php" ?>
<h1 class="login-h1">Are you sure you want to logout?</h1>

<div>
    <form class="auth-link" action="/logout" method="POST">
        <button class="btn-lout">Logout</button>
    </form>

    <a class="a-lout" href="/books" >Return</a>
</div>
<?php require "../views/components/footer.php" ?>
