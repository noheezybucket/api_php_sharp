<?php
include('./db.php');

$sql = "SELECT * FROM utilisateurs";
$stmt = $db->query($sql); // Use PDO's query method
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as an associative array
?>

<div class="container mt-4">
    <div class="col-md-8 offset-2 mt-5">
        <div class="card-header text-center bg-warning">
            Liste Personnes
        </div>
        <table class="table table-bordered mt-4">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">AGE</th>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['nom']) ?></td>
                        <td><?= htmlspecialchars($row['prenom']) ?></td>
                        <td><?= htmlspecialchars($row['age']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>