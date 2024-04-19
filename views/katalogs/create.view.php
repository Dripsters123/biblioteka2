
<form method="POST">
    <?php require "views/components/head.php" ?>
    <?php require "views/components/navbar.php" ?>
    <h1>Pievieno jaunu grāmatu</h1>

    <label>Nosaukums:
        <input name="nosaukums" />
        <?php if (isset($errors["nosaukums"])) { ?>
            <p class="invalid-data"><?= $errors["nosaukums"] ?></p>
        <?php } ?>
    </label>
    <label>Autors:
        <input name="autors" />
        <?php if (isset($errors["autors"])) { ?>
            <p class="invalid-data"><?= $errors["autors"] ?></p>
        <?php } ?>
    </label>
    <label>Izdota:
        <input name="izdosana" type="date" />
        <?php if (isset($errors["izdosana"])) { ?>
            <p class="invalid-data"><?= $errors["izdosana"] ?></p>
        <?php } ?>
    </label>
    <label>Piejamība:
        <input name="available" type="checkbox" />
        <?php if (isset($errors["available"])) { ?>
            <p class="invalid-data"><?= $errors["available"] ?></p>
        <?php } ?>
    </label>


    <button>Pievienot</button>
</form>
<?php require "views/components/footer.php" ?>