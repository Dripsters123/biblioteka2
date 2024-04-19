<header>
    <nav>
        <a class="nav-a" href="/books">Galvena lapa</a>
        <?php if ($_SESSION["role"] == "admin") { ?>
            <a class="nav-a" href="/create">Create a book</a>
        <?php } ?>
        <a class="nav-a" href="/logout">Logout</a>
    </nav>
</header>
