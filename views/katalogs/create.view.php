<?php require "../views/components/head.php" ?>
<?php require "../views/components/navbar.php" ?>

<div class="book-form-container">
    <form method="POST" class="book-form">
        <h1 class="login-h1">Create a new book</h1>

        <label>Name:
            <input name="nosaukums" class="book-form-input" />
            <?php if (isset($errors["nosaukums"])) { ?>
                <p class="invalid-data"><?= $errors["nosaukums"] ?></p>
            <?php } ?>
        </label>
        <label>Author:
            <input name="autors" class="book-form-input" />
            <?php if (isset($errors["autors"])) { ?>
                <p class="invalid-data"><?= $errors["autors"] ?></p>
            <?php } ?>
        </label>
        <label>Release date:
            <input name="izdosana" type="date" class="book-form-input" />
            <?php if (isset($errors["izdosana"])) { ?>
                <p class="invalid-data"><?= $errors["izdosana"] ?></p>
            <?php } ?>
        </label>
        <label>Availability:
            <input name="available" type="checkbox" class="book-form-input" />
            <?php if (isset($errors["available"])) { ?>
                <p class="invalid-data"><?= $errors["available"] ?></p>
            <?php } ?>
        </label>

        <button class="book-form-button">Add</button>
    </form>
</div>

<?php require "../views/components/footer.php" ?>
