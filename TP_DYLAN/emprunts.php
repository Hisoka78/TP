<?php
// Inspirez-vous de livres.php

require_once('./classes/Rental.php');

?>

<?php include 'templates/header.html.php'; ?>

<main>
    <h2>Liste des emprunts</h2>
    <table>
        <thead>
            <tr>
                <th>Livre emprunté</th>
                <th>Emprunteur(euse)</th>
                <th>Date d'emprunt</th>
                <th>Date de retour</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'templates/rentals.html.php'; ?>
        </tbody>
    </table>
</main>

<?php include 'templates/footer.html.php'; ?>