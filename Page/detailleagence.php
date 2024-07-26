<?php 
require_once("identifier.php");

require_once("connexion.php");

$idAg=isset($_GET['idA'])?$_GET['idA']:0;
$req="SELECT * FROM agence where ID_Agence=$idAg";
$resultat=$pdo->query($req);
$agence=$resultat->fetch();
$nomAg=$agence['Nom_Agence'];
$villeAg=$agence ['Ville_Agence']; 
$adresseAg=$agence['Adresse_Agence']; 



?>

<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Register</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><hr><h3 class= "text-primary">Modification de l'agence</h3></h1><hr>
                  </div>
                  <form  method="POST"action="Agence.php"  class="form">
                    <div class="form-group">
                        <label><h4>ID de l'agence : <?php echo $idAg ?></h4></label>
                        <input type="hidden"name="idA" class="form-control" id="exampleInputFirstName" value="<?php echo $idAg ?>">
                        </div>  
                    <div class="form-group  " >
                      <label><h4>Nom :                <?php echo $nomAg ?></h4></label>
                      <input type="hidden" name="nomA" class="form-control" id="exampleInputFirstName" placeholder="Entrez Nom svp ? "value="<?php echo $nomAg ?>">
                    </div>
                    <div class="form-group">
                      <label><h4 >Adresse mail :   <?php echo $adresseAg ?></h4></label>
                      <input type="hidden" class="form-control"   name="adresseA" placeholder="Entrez  Email Adresse svp ?"value="<?php echo $adresseAg ?>">
                    </div>
                    <div class="form-group">
                      <label><h4>Ville : <?php echo $villeAg ?></h4></label>
                      <input type="hidden" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="adresseA" placeholder="Entrez  Email Adresse svp ?"value="<?php echo $adresseAg ?>">
                    </div>
                    <div class="form-group">
                    <a href="<?php  echo $_SERVER['HTTP_REFERER'] ?>" ><h5>Retour >>>></h5></a>
                    </div>
            
                   
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>