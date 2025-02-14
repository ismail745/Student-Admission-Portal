<?php
session_start();
require('fpdf186/fpdf.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Charger PHPMailer via Composer

class FicheInscriptionPDF extends FPDF {
    function Header() {
        $this->Image('FSTT-LOGO.png', 10, 6, 30);
        $this->Image('UAE-LOGO.png', 170, 6, 30);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(80);
        $this->Cell(30, 10, 'Fiche de Candidature', 0, 0, 'C');
        $this->Ln(20);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

try {
    // Vérification des données de session
    $required_fields = ['email', 'prenom', 'nom', 'date', 'sexe', 'cin', 'filieres'];
    foreach ($required_fields as $field) {
        if (!isset($_SESSION[$field])) {
            throw new Exception("Champ manquant : $field");
        }
    }

    // Récupération des données
    $email = $_SESSION['email'];
    $prenom = $_SESSION['prenom'];
    $nom = $_SESSION['nom'];
    $date_naissance = $_SESSION['date'];
    $sexe = $_SESSION['sexe'];
    $cin = $_SESSION['cin'];
    $filieres = $_SESSION['filieres'];
    $image = isset($_SESSION['image']) ? $_SESSION['image'] : null;

    // Génération du fichier PDF
    $fileName = 'Fiche de Candidature_' . $nom . '_' . $prenom . '.pdf';

    $pdf = new FicheInscriptionPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    // Ajout de l'image
    if ($image && file_exists($image)) {
        $pdf->Image($image, 90, 40, 30);
    }


        // Espacement après l'image
    $pdf->Ln(60);

       // Fonction pour ajouter une ligne d'information
    function addInfoLine($pdf, $label, $value) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(50, 10, $label);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, utf8_decode($value), 0, 1);
    }

    // Ajout des informations
    addInfoLine($pdf, 'Nom :', $nom);
    addInfoLine($pdf, 'Prenom :', $prenom);
    addInfoLine($pdf, 'Date de Naissance :', $date_naissance);
    addInfoLine($pdf, 'Sexe :', $sexe);
    addInfoLine($pdf, 'CIN :', $cin);
    addInfoLine($pdf, 'Email :', $email);

    // Filières
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Filieres :');
    $pdf->SetFont('Arial', '', 12);

    $filieres=explode("$", $filieres);
    
    if (is_array($filieres)) {
        $c=0;
        foreach($filieres as $filiere)
        if($c==0){
        $c++;
        $pdf->Cell(0, 10, $filiere, 0, 1);
        }else{
            $pdf->Cell(50, 10, '');
            $pdf->Cell(0, 10, $filiere, 0, 1);
        }
    } else {
        $pdf->Cell(0, 10, utf8_decode($filieres), 0, 1);
    }

    // Espace signature
    $pdf->Ln(20);
    $pdf->SetFont('Arial', 'I', 11);
    $pdf->Cell(0, 10, 'Signature :', 0, 1);
    $pdf->Cell(0, 20, '', 1, 1);

    // Date de génération
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'I', 10);
    $pdf->Cell(0, 10, 'Document genere le ' . date('d/m/Y H:i'), 0, 1, 'R');

    // Sauvegarde du fichier PDF
    $pdf->Output('F', $fileName);
    
    $pdf->Output('D', $fileName);
    // Configuration de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ismailkchibal@gmail.com'; // Remplacez par votre email
        $mail->Password = 'fquy usry jxga dgko'; // Mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configurer l'email
        $mail->setFrom('KCHIBAL-TECH@gmail.com', 'KCHIBAL-TECH');
        $mail->addAddress($email);
        $mail->addAttachment($fileName);

        $mail->isHTML(true);
        $mail->Subject = 'Fiche d\'Inscription';
        $mail->Body = 'Veuillez trouver votre fiche d\'inscription en pièce jointe.';

        // Envoi de l'email
        $mail->send();

        // Suppression du fichier temporaire
        unlink($fileName);

        

        echo json_encode([
            'status' => 'success',
            'message' => 'Un email avec votre fiche d\'inscription a été envoyé.',
        ]);
        exit;

    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Erreur lors de l\'envoi de l\'email : ' . $mail->ErrorInfo,
        ]);
        exit;
    }

    $dir = 'uploads/' . $prenom . '_' . $nom . '_' . $cin;
    $uploadDir = $dir . '/';
    $destination= $uploadDir . $fileName;
    rename($fileName, $destination);

} catch (Exception $e) {
    error_log("Erreur : " . $e->getMessage());
    header('Location: error.php?message=' . urlencode($e->getMessage()));
    exit;
}
?>