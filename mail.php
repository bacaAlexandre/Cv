<?php



// header('Content-type: application/json');
if(empty($_POST['nom'])){
  echo json_encode(array(
    "success" => false,
    "erreur" => "Veiller renseigner un nom",
  ));
}else{
  if(empty($_POST['email'])){
    echo json_encode(array(
      "success" => false,
      "erreur" => "Veiller renseigner un email",
    ));
  }else {
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
        $subject = $_POST['objet'];
        $message = "Email envoyer par ".$_POST['nom']."  ".$_POST['prenom']."\r\n";
        $message .= "Adress email pour repondre : ".$_POST['email']."\r\n";
        $message .= $_POST['message'];
        var_dump($message);

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        mail("Alexandre76b@aol.com", $subject, $message, $headers);

        echo json_encode(array(
          "success" => true,
        ));
      }
    }
  }
}
