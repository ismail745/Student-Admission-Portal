<?php
session_start();
include('db.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Définir l'en-tête pour retourner une réponse JSON
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];

    // Générer un code de vérification aléatoire
    $verification_code = rand(100000, 999999);
    $_SESSION['verification_code']=$verification_code;
    $_SESSION['email']=$email;

    // Vérifier si l'email existe déjà
    $stmt = $conn->prepare("SELECT * FROM etudiants WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Cet email est déjà utilisé.',
        ]);
        exit;
    }
        // Initialiser PHPMailer pour envoyer l'email
        $mail = new PHPMailer(true);
        try {            
            // Configuration SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ismailkchibal@gmail.com'; // Remplacez par votre email
            $mail->Password = 'fquy usry jxga dgko'; // Remplacez par votre mot de passe d'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Configurer les détails de l'email
            $mail->setFrom('KCHIBAL-TECH@gmail.com', 'KCHIBAL-TECH');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Verification de votre email';
            $mail->Body = 'Votre code de vérification est : <strong style="color:green;">' . $verification_code . '</strong>';

            $mail->send();
                        echo json_encode([
                'status' => 'success',
                'message' => 'Un code de vérification a été envoyé. Vérifiez votre boîte de réception.',
            ]);
            exit;
        } catch (Exception $e) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Erreur lors de l\'envoi de l\'email : ' . $mail->ErrorInfo,
            ]);
        }

    // Libérer les ressources
    $stmt->close();
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Méthode non autorisée ou email manquant.',
    ]);
    exit;
}

$conn->close();
?>