<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
<!--Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>


.logo img {
    max-height: 80px;
    margin-right: 6px;
}
.logo {
    line-height: 1;
}
</style>
<body>
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto" style="text-decoration: none;">
                  <img src="/edutasker/images/logo.png" style="width:100%;">
                 
                </a>
              </div><!-- End Logo -->


              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connectez-vous </h5>
                    <p class="text-center small">Entrez votre nom d’utilisateur et votre mot de passe pour vous connecter</p>
                  </div>

                  <form class="row g-3" action="authenticate.php" method="post">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nom d'utilisateur</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="login" class="form-control" id="yourUsername" required="">
                        <div class="invalid-feedback">Veuillez entrer votre nom d'utilisateur.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="psw" class="form-control" id="yourPassword" required="">
                      <div class="invalid-feedback">Veuillez entrer votre mot de passe!</div>
                    </div>

                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Entrez</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous n'avez pas de compte ? 
                        <a href="https://wa.me/212661178988" class="whatsapp_float" target="_blank">Contactez-nous...</a></p>
                    </div>
                  </form>

                </div>
              </div>

              

            </div>
          </div>
    </div>
    <?php
    // Affichage du message d'erreur si nécessaire
    if (isset($_GET['error'])) {
        echo "<p style='color: red;'>Email ou mot de passe incorrect</p>";
    }
    ?>
</body>
</html>