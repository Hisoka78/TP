<?php

require_once('./classes/Rental.php');

$rentals = Rental::getrentals($id);

foreach ($rentals as $rental) : ?>
<tr>
    <td>
        <?= $rental['idBook'] ?>
    </td>
    <td>
        <?= $rental['idUser'] ?>
    </td>
    <td>
        <?= $rental['startDate'] ?>
    </td>
    <td>
        <?= $rental['endDate'] ?>
    </td>
    <td>
        <?= $rental['id'] ?>
    </td>
</tr>
<?php endforeach; ?>