<?php



header('Content-type: application/json');

if(empty($_POST['nom'])){
  echo json_encode(array(
    "success" => false,
    "erreur" => "Veiller renseigner un nom",
  ));
}else{
  if(empty($_POST['objet'])){
    echo json_encode(array(
      "success" => false,
      "erreur" => "Veiller renseigner un objet",
    ));
  }else {
    if(empty($_POST['message'])){
      echo json_encode(array(
        "success" => false,
        "erreur" => "Veiller renseigner un message",
      ));
    }else{
      echo json_encode(array(
        "success" => true,
      ));

    }
  }
}
