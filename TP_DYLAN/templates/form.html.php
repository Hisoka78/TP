<?php

// Formulaires d'exemple

?>

<!-- <?php if (isset($_GET['id'])) : ?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="title">Nom du livre</label>
        <input type="text" name="title" value="<?= $book['title'] ?>">
        <label for="author">Auteur</label>
        <input type="text" name="author" value="<?= $book['author'] ?>">
        <label for="stock">Stock actuel</label>
        <input type="number" name="number" value="<?= $book['stock'] ?>">
        <input type="submit" value="Modifier">
    </form>
<?php else : ?>
    <form action="create.php" method="post">
        <input type="number" name="isbn" placeholder="ISBN">
        <input type="text" name="title" placeholder="Titre">
        <input type="text" name="author" placeholder="Auteur">
        <input type="number" name="stock" placeholder="Stock">
        <input type="submit" value="Ajouter">
    </form>
<?php endif; ?> -->

<?php if (isset($_GET['$id'])) : ?>
    <form action="emprunts.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="book">Livre emprunté</label>
        <input type="text" name="Livre emprunté" value="<?= $rental['idBook'] ?>">
        <label for="user">Emprunteur(euse)</label>
        <input type="text" name="Emprunteur(euse)" value="<?= $rental['idUser'] ?>">
        <label for="Date rental">Date d'emprunt</label>
        <input type="text" name='Date emprunt' value="<?= $rental['startDate'] ?>">
        <label for="Date return">Date de retour</label>
        <input type="text" name="Date de retour" value="<?= $rental['endDate'] ?>">
        <input type="submit" value="Modifier">
    </form>
<?php else : ?>
    <form action="emprunts.php" method="post">
        <input type="text" name="Livre emprunté" placeholder="Livre emprunté">
        <input type="text" name="Emprunteur(euse)" placeholder="Emprunteur(euse)">
        <input type="text" name="Date emprunt" placeholder="Date d'emprunt">
        <input type="text" name="Date de retour" placeholder="Date de retour">
        <input type="submit" value="Ajouter">
    </form>
<?php endif; ?>