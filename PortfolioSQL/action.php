
  <?php

    $type = $_POST['type'];
    $nom = $_POST['nom'];
    $modification = $_POST['modification'];
    $taille = $_POST['taille'];

  if(empty($type) OR empty($nom) OR empty($modification) OR empty($taille))
  {
    echo 'Cannot stay empty !';
  }
  else{

    $sql = "INSERT INTO table_pf (id, type, nom, modification, taille) VALUES('','$type','$nom','$modification','$taille')";


    echo 'Information sent succesfully';
  }

 ?>
