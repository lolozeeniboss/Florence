<?php
if(isset($_POST["Mdp"])){
  if($_POST["Mdp"]== $_POST["Mdp2"]){
    $check->query("SELECT * FROM USER WHERE login=\"".$_POST["login"]."\";")
    if ($check->rowCount()==0){
      echo "COUCOU";
    }
    else {
      $error2=true;
    }
  }else{
    $error1=true;
  }
}
?>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="pages.css">
    <title>[Florence] Inscription</title>
  </head>
  <body id="inscription">
    <?php include('../../HeadAndFoot/headerStg2.php');?>
    <form class="" method="post">
      <div class="form-group">
        <div class="form-row">
          <div class="col">
            <input type="login" class="form-control" placeholder="Votre identifiant" name="login" required>
          </div>
          <div class="col">
            <input type="password" class="form-control" placeholder="Votre Mot de Passe" name="Mdp" required>
          </div>
          <div class="col">
            <input type="password" class="form-control" placeholder="Verifier Mot de Passe" name="Mdp2" required>
          </div>
        </div>
      </div>
      <button type="submit" name="button" class="btn btn-primary">Envoyer</button>
    </form>

    <?php include('../../HeadAndFoot/footerStg2.php');?>
  </body>
</html>
