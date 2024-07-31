<?php

$id = (int) $_POST['id'];

$stmt = $db->prepare("SELECT nom,prenom,age FROM utilisateurs WHERE ID = ?");
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(['result' => $result]);
