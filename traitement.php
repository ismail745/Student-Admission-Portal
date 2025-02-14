<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filieres = json_decode($_POST['filieres'], true); // Récupérer les filières sélectionnées
    $nomFilieres = []; // Tableau pour stocker les noms de filières
    
    foreach($filieres as $filiereID){
        $sql = "SELECT f.Nom,c.Nom as NomCycle FROM filieres f,cycles c WHERE f.CycleID = c.CycleID AND  FiliereID = " . mysqli_real_escape_string($conn, $filiereID);
        $result = mysqli_query($conn, $sql);
        $filiere = mysqli_fetch_assoc($result);
        $nomFilieres[] = $filiere['Nom']. ' (' . $filiere['NomCycle'] . ')'; // Ajouter le nom de la filière dans un nouveau tableau
    }
    
    $filiereslignes = implode("$", $nomFilieres); 
    
    $prenom = isset($_POST['prenom']) ? htmlspecialchars(trim($_POST['prenom'])) : '';
    $nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
    $sexe = isset($_POST['sexe']) ? htmlspecialchars(trim($_POST['sexe'])) : '';
    $cin = isset($_POST['cin']) ? htmlspecialchars(trim($_POST['cin'])) : '';
    $date = isset($_POST['date']) ? date('Y-m-d', strtotime(str_replace('/', '-', $_POST['date']))) : '';
    $email = $_SESSION['email'] ?? '';
    $_SESSION['prenom'] = $prenom;
    $_SESSION['nom'] = $nom;
    $_SESSION['sexe'] = $sexe;
    $_SESSION['cin'] = $cin;
    $_SESSION['date'] = $date;


    

    $_SESSION['filieres'] = $filiereslignes;

$dir = 'uploads/' . $prenom . '_' . $nom . '_' . $cin;

// Créer le répertoire si nécessaire
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

// Gestion de l'image
$target_file = "uploads/avatar.png"; // Valeur par défaut

// Vérifier si un fichier a été uploadé et qu'il n'y a pas d'erreur
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $imageTmp = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $imageSize = $_FILES['image']['size'];
    $imageType = mime_content_type($imageTmp);

    // Vérifier l'extension du fichier et récupérer l'extension correcte
    $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION); // Extrait l'extension du fichier

    // Créer un nom unique pour l'image
    $uniqueName = 'image' . '.' . $imageExtension;

    // Définir le répertoire de destination pour l'image
    $uploadDir = $dir . '/';
    $destination = $uploadDir . $uniqueName;

    // Déplacer l'image dans le répertoire cible
    if (move_uploaded_file($imageTmp, $destination)) {
        $target_file = $destination; // Le fichier est maintenant dans le répertoire créé
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Erreur lors du déplacement du fichier.']);
        exit;
    }
}

// Enregistrer l'URL de l'image dans la session
$_SESSION['image'] = $target_file;

// Vérifier si un fichier a été uploadé et qu'il n'y a pas d'erreur
if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] === UPLOAD_ERR_OK) {
    $imageTmp = $_FILES['fichier']['tmp_name'];
    $imageName = basename($_FILES['fichier']['name']);
    $imageSize = $_FILES['fichier']['size'];
    $imageType = mime_content_type($imageTmp);

    // Vérifier l'extension du fichier et récupérer l'extension correcte
    $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION); // Extrait l'extension du fichier

    // Créer un nom unique pour l'image
    $uniqueName = 'fichier' . '.' . $imageExtension;

    // Définir le répertoire de destination pour l'image
    $uploadDir = $dir . '/';
    $destination = $uploadDir . $uniqueName;

    // Déplacer l'image dans le répertoire cible
    if (move_uploaded_file($imageTmp, $destination)) {
        $target_file = $destination; // Le fichier est maintenant dans le répertoire créé
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Erreur lors du déplacement du fichier.']);
        exit;
    }
}




    // Requête SQL sécurisée pour insérer un étudiant
    $sql = "INSERT INTO etudiants (prenom, nom, sexe, cin, dateNaissance, email, image) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Associer les valeurs aux paramètres
        $stmt->bind_param("sssssss", $prenom, $nom, $sexe, $cin, $date, $email, $target_file);

        if ($stmt->execute()) {
            // Récupérer l'ID de l'étudiant inséré
            $etudiantID = $conn->insert_id;

            // Vérifier si des filières ont été sélectionnées
                // Préparer une requête pour insérer les candidatures
                $stmt1 = $conn->prepare("INSERT INTO candidatures (FiliereID, EtudiantID) VALUES (?, ?)");
                if ($stmt1) {
                    foreach ($filieres as $filiereID) {
                        $stmt1->bind_param("ii", $filiereID, $etudiantID); // i pour entier (int)
                        $stmt1->execute();
                    }
                    $stmt1->close();
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la préparation de la requête candidatures : ' . $conn->error]);
                }
            

            echo json_encode(['status' => 'success', 'message' => 'Votre candidature a été soumise avec succès.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erreur SQL : ' . $stmt->error]);
        }
        $stmt->close();
        
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la préparation de la requête : ' . $conn->error]);
    }
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Méthode non autorisée.']);
}
?>
