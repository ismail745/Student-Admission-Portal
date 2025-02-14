<?php
session_start();
include('db.php');

// Définir l'en-tête pour retourner une réponse JSON
header('Content-Type: application/json');

// Vérifier que la méthode est POST et que le code de vérification est présent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verification_code'])) {
    $verification_code = $_POST['verification_code'];

    // Vérifier si le code de vérification est un entier
    if (!is_numeric($verification_code)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Le code de vérification doit être un nombre entier.',
        ]);
        exit;
    }


    if($_SESSION['verification_code']==$_POST['verification_code']){
        echo json_encode([
                    'status' => 'success',
                    'message' => 'Votre email a été vérifié avec succès ! Vous pouvez maintenant continuer.',
                ]);
                exit;
    } else {
        // Code incorrect
        echo json_encode([
            'status' => 'error',
            'message' => 'Ce code est incorrect.',
        ]);
        exit;
    }

    // Libérer les ressources
    $stmt->close();
} else {
    // Méthode non autorisée ou email manquant
    echo json_encode([
        'status' => 'error',
        'message' => 'Méthode non autorisée ou code de vérification manquant.',
    ]);
    exit;
}

$conn->close();
?>

