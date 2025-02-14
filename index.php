<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">
<!-- Mirrored from prium.github.io/phoenix/v1.15.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Apr 2024 11:43:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Candidature-BETA</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="FSTT-LOGO.png">
    <link rel="icon" type="image/png" sizes="32x32" href="FSTT-LOGO.png">
    <link rel="icon" type="image/png" sizes="16x16" href="FSTT-LOGO.png">
    <link rel="shortcut icon" type="image/x-icon" href="FSTT-LOGO.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="vendors/simplebar/simplebar.min.js"></script>
    <script src="assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
    <link href="vendors/choices/choices.min.css" rel="stylesheet" />
    <style>
        .navbar-vertical-content{
            min-height: 470px;
        }
    </style>
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
    <link href="vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
    <main class="main" id="top">
	  <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.php">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <img src="FSTT-LOGO.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                  <p class="logo-text ms-1 d-none d-sm-block fs-7">FST-TANGER</p>
                </div>
              </div>
            </a>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2">
                <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                  <span class="icon" data-feather="moon"></span>
                </label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                  <span class="icon" data-feather="sun"></span>
                </label>
              </div>
            </li>
          </ul>
        </div>
    </nav>
    <div class="content">
      <h2 class="mb-4">Candidature</h2> 
      <!--code-->
      <div id="responseMessage"></div>
      <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
        <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
          <ul class="nav justify-content-between nav-wizard nav-wizard-success">
            <li class="nav-item"><a class="nav-link active fw-semibold" href="#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="1">
                <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-envelope"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Email</span></div>
              </a></li>
              <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab5" data-bs-toggle="tab" data-wizard-step="5">
                <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-lock"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Validation</span></div>
              </a></li>
            <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="2">
                <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-user"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Personnel</span></div>
              </a></li>
              
            <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab3" data-bs-toggle="tab" data-wizard-step="3">
                <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-graduation-cap"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Filiere</span></div>
              </a></li>
            <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab4" data-bs-toggle="tab" data-wizard-step="4">
                <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-check"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Finalisation</span></div>
              </a></li>
          </ul>
        </div>
        <div class="card-body pt-4 pb-0">
          <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
            
              <form action="send_verification.php" method="post" class="needs-validation" id="wizardValidationForm1" novalidate="novalidate" data-wizard-form="1">
                <div class="mb-2">
                    <label class="form-label" for="bootstrap-wizard-validation-wizard-email">Email<strong style="color:red;">*</strong></label>
                    <input class="form-control" type="email" name="email" placeholder="Email" required="required" id="bootstrap-wizard-validation-wizard-email" />
                    <div class="invalid-feedback">Vous devez ajouter un email.</div>
                </div>
              </form>
            
            </div>
            <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab5" id="bootstrap-wizard-validation-tab5">
              <form action="verify.php" method="post" class="needs-validation" id="wizardValidationForm5" novalidate="novalidate" data-wizard-form="5">
              <div class="mb-2">   
                <label class="form-label" for="verification-code">Code de vérification<strong style="color:red;">*</strong></label>
                <input class="form-control" type="text" name="verification_code" id="verification-code" placeholder="Entrez le code de vérification" required="required"/>
                <div class="invalid-feedback">Vous devez entrer le code de vérification.</div>
              </div>
              </form>
            </div>
            <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
              <form class="needs-validation" method="post" action="traitement.php" id="wizardValidationForm2"  data-wizard-form="2" enctype="multipart/form-data">
                <div class="row g-4 mb-4" data-dropzone="data-dropzone" data-options='{"maxFiles":1}'>
                  <div class="col-2"><img class="rounded-circle avatar-placeholder" style="height:150px; width:150px; max-height:150px ;max-width: 150px;" id="photoPreview" src="avatar.png" alt="Photo de profil" /></div>
                  <div class="col-10">
                    <div id="uploadTrigger" class="dz-message dropzone-area px-2 py-3" data-dz-message="data-dz-message">
                      <div class="text-center text-body-emphasis">
                        <h5 class="mb-2">
                          <span class="fa-solid fa-upload me-2"></span>
                          <span  style="cursor: pointer;">Importer votre photo<strong style="color:red;">*</strong></span>
                        </h5>
                        <p class="mb-0 fs-9 text-body-tertiary text-opacity-85 lh-sm">
                          Importer une image 300x300 en format JPG avec une taille maximum de 400KB
                        </p>
                        <input type="file" accept="image/*" name="image" id="fileInput" class="d-none" />
                      </div>
                    </div>
                  </div>
                </div> 
                <script>
                  document.getElementById('uploadTrigger').addEventListener('click', function () {
                  document.getElementById('fileInput').click(); // Déclenche le clic sur l'input caché
                });

                document.getElementById('fileInput').addEventListener('change', function (event) {
                  const file = event.target.files[0];
                  if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                      // Met à jour l'image de prévisualisation à gauche
                      document.getElementById('photoPreview').src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                  }
                });
                </script>                
                
                <div class="row gx-3 gy-2">
                  <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-name">Prenom<strong style="color:red;">*</strong></label><input class="form-control"placeholder="Prenom"  name="prenom" type="text" id="bootstrap-wizard-validation-card-prenom" required="required" />
                    <div class="invalid-feedback">This field is required.</div>
                  </div>
                  <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-name">Nom<strong style="color:red;">*</strong></label><input class="form-control" placeholder="Nom" name="nom" type="text" id="bootstrap-wizard-validation-card-nom" required="required" />
                    <div class="invalid-feedback">This field is required.</div>
                  </div>
                  <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-gender">Sexe<strong style="color:red;">*</strong></label><select class="form-select" placeholder="Sexe" name="sexe" id="bootstrap-wizard-validation-gender" required="required">
                    <option value="">Selectionner ...</option>
                    <option value="homme">homme</option>
                    <option value="femme">femme</option>
                  </select>
                  <div class="invalid-feedback">This field is required.</div>
                </div>
                <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-name">Cin<strong style="color:red;">*</strong></label><input class="form-control" placeholder="Cin"  name="cin" type="text" id="bootstrap-wizard-validation-card-cin" required="required" />
                  <div class="invalid-feedback">This field is required.</div>
                </div>
                <div class="col-6"><label class="form-label" for="datepickerVal">Date de naissance<strong style="color:red;">*</strong></label><input class="form-control datetimepicker" name="date" id="datepickerVal" type="text" placeholder="d/m/y" required="required" data-options='{"disableMobile":true,"allowInput":true,"dateFormat":"d/m/Y"}' />
                  <div class="invalid-feedback">This field is required</div>
                </div>
                </div>
                </div>
                <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab3" id="bootstrap-wizard-validation-tab3">
                    <div class="mb-3">
                      <label for="organizerMultiple">Fichier<strong style="color:red;">*</strong></label>
                      <input class="form-control" id="customFile" name="fichier" type="file" />
                    </div>
                    <div class="row gx-3 gy-2">
                      <label for="organizerMultiple">Filiere<strong style="color:red;">*</strong></label>
                      <select class="form-select" name="filieres" id="organizerMultiple"  data-choices="data-choices" multiple>
                      <option value="" disabled>Selectionner ...</option>
                      <?php 
                      include('db.php');
                      $SQLcycles = "SELECT * FROM cycles";
                      $SQLfilieres = "SELECT * FROM filieres";
                      $cycles = mysqli_query($conn, $SQLcycles);
                      $filieres = mysqli_query($conn, $SQLfilieres);
                      
                      foreach($cycles as $cycle){
                          // Utilisation correcte de optgroup avec l'attribut label
                          echo "<optgroup label=-------" . htmlspecialchars($cycle['Nom']) . "------->";
                          
                          // Réinitialiser le pointeur de la requête filieres
                          mysqli_data_seek($filieres, 0);
                          
                          foreach($filieres as $filiere){
                              if($filiere['CycleID'] == $cycle['CycleID']) {
                                  // Ajout des guillemets pour la valeur et échappement des caractères spéciaux
                                  echo "<option value='" . htmlspecialchars($filiere['FiliereID']) . "'>" 
                                      . htmlspecialchars($filiere['Nom']) . "</option>";
                              }
                          }
                          echo "</optgroup>";
                      }
                      $conn->close();
                      ?>
                    </select>
                    </div>
              </form>
            </div>
            <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab4" id="bootstrap-wizard-validation-tab4">
            <a href="generateFiche.php" class="btn btn-primary mb-4" target="_blank">Recuperer la fiche d'inscription</a>
            </div>
          </div>
        </div>
        <div class="card-footer border-top-0" data-wizard-footer="data-wizard-footer">
          <div class="d-flex pager wizard list-inline mb-0"><button class="d-none btn btn-link ps-0" id="previewButton" type="button" data-wizard-prev-btn="data-wizard-prev-btn"><span class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span>Precedent</button>
            <div class="flex-1 text-end"><button class="btn btn-primary px-6 px-sm-6" id="nextButton" type="submit" data-wizard-next-btn="data-wizard-next-btn">Suivant<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span></button></div>
          </div>
        </div>
      </div>
    <script>
        // Récupérer les éléments nécessaires
        const previewButton = document.getElementById('previewButton');
        const nextButton = document.getElementById('nextButton');
        const tab1 = document.getElementById('bootstrap-wizard-validation-tab1');
        const tab2 = document.getElementById('bootstrap-wizard-validation-tab5');
        const tab3 = document.getElementById('bootstrap-wizard-validation-tab2');
        const tab4 = document.getElementById('bootstrap-wizard-validation-tab3');
        const tab5 = document.getElementById('bootstrap-wizard-validation-tab4');
        const form1 = document.getElementById('wizardValidationForm1');
        const form2 = document.getElementById('wizardValidationForm5');
        const form3 = document.getElementById('wizardValidationForm2');
        const emailInput = document.getElementById('bootstrap-wizard-validation-wizard-email');
        const codeInput = document.getElementById('verification-code');
        const responseMessage = document.getElementById('responseMessage');
        const select =document.getElementById('organizerMultiple');

        // Fonction pour afficher un message
        function showMessage(type, message) {
            responseMessage.innerHTML = `
                <div class="alert alert-subtle-${type} alert-dismissible fade show" role="alert">
                    ${message}
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
            responseMessage.style.display = 'block';
        }

        // Gestion du clic sur le bouton "Suivant"
        nextButton.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut

            if (tab1 && tab1.classList.contains('active')) {
                // Étape 1: Validation de l'email
                if (form1.checkValidity()) {
                    const email = emailInput.value;
                    if (!email) {
                        showMessage('danger', 'Veuillez entrer un email valide.');
                        return;
                    }

                    const formData = new URLSearchParams({ email });

                    fetch('send_verification.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'error') {
                            showMessage('danger', 'L\'email que vous avez saisi est déjà utilisé.');
                            tab2.classList.remove('active');
                            tab1.classList.add('active');
                        } else if (data.status === 'success') {
                            showMessage('success', data.message);
                            tab1.classList.remove('active');
                            tab2.classList.add('active');
                        }
                    })
                    .catch(() => showMessage('danger', 'Une erreur est survenue lors de l\'envoi.'));
                } else {
                    form1.classList.add('was-validated');
                    showMessage('danger', 'Veuillez corriger les erreurs du formulaire.');
                }
            } else if (tab2 && tab2.classList.contains('active')) {
                // Étape 2: Validation du code
                if (form2.checkValidity()) {
                    const code = codeInput.value;
                    if (!code) {
                        showMessage('danger', 'Veuillez entrer un code valide.');
                        return;
                    }

                    const formData2 = new URLSearchParams({ verification_code: code });

                    fetch('verify.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: formData2,
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'error') {
                            showMessage('danger', 'Le code que vous avez saisi est incorrect.');
                            tab3.classList.remove('active');
                            tab2.classList.add('active');
                        } else if (data.status === 'success') {
                            showMessage('success', data.message);
                            tab2.classList.remove('active');
                            tab3.classList.add('active');
                        }
                    })
                    .catch(() => showMessage('danger', 'Une erreur est survenue lors de l\'envoi.'));
                } else {
                    form2.classList.add('was-validated');
                    showMessage('danger', 'Veuillez corriger les erreurs du formulaire.');
                }
            } else
             if (tab4 && tab4.classList.contains('active')) {
              //ajouter l'ecouteur d'envenemnt 
                event.preventDefault(); // Empêche l'envoi par défaut
                const formData = new FormData(form3);

                // Extraire manuellement les filières sélectionnées
                const selectedFilieres = Array.from(select.selectedOptions).map(option => option.value);
                formData.append('filieres', JSON.stringify(selectedFilieres));

                // Debug des données envoyées
                for (let [key, value] of formData.entries()) {
                    console.log(key, value);
                }
                
                if (form3.checkValidity()) {
                    fetch('traitement.php', {
                        method: 'POST',
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            showMessage('success', data.message);
                            tab4.classList.remove('active');
                            tab5.classList.add('active');
                        } else {
                            showMessage('danger', data.message);
                            tab5.classList.remove('active');
                            tab4.classList.add('active');
                        }
                    })
                    .catch(() => showMessage('danger', 'Une erreur est survenue lors de l\'envoi.'));
                } else {
                    form3.classList.add('was-validated');
                    showMessage('danger', 'Veuillez corriger les erreurs du formulaire.');
                }
              } 
        });
    </script>
      <!--code-->      
    </div>
	
      
	  
     
	</main>
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/leaflet/leaflet.js"></script>
    <script src="vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="assets/js/ecommerce-dashboard.js"></script>
    <script src="vendors/flatpickr/flatpickr.min.js"></script>
    <script src="vendors/choices/choices.min.js"></script>
  </body>
</html>