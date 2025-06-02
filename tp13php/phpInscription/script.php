<?php
$login = trim($_POST['login']); 
$password = trim($_POST['pwd']);


$dsn =  'mysql:host=127.0.0.1;dbname=Inscription';
$userBDD = 'login4549';
$passwordBDD = 'EShQYpxfvORjMEO';

if (!preg_match('/^[a-zA-Z]+$/', $login)) { // Vérification du format du login
    echo "Le login ne peut contenir que des lettres.";
} elseif (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}$/', $password)) { // Vérification du format du mot de passe
  echo "Le mot de passe doit contenir au moins 12 caractères, une minuscule, une majuscule et un caractère spécial.";
} else {
  try {
    $unObjPDO = new PDO($dsn, $userBDD, $passwordBDD);
    $stmt = $unObjPDO->prepare("SELECT COUNT(*) FROM user WHERE login = :monLogin");
    $stmt->bindValue(':monLogin', $login);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    if ($count > 0) {
        echo "Le login est déjà utilisé.";
    } else {
      $passwordHash = password_hash($password, PASSWORD_BCRYPT);
      $monObjPdoStatement = $unObjPDO->prepare("INSERT INTO user VALUES(:monLogin,:monPwd)");
      $bvc1=$monObjPdoStatement->bindValue(':monLogin', $login);
      $bvc2=$monObjPdoStatement->bindValue(':monPwd', $passwordHash);
      $okExecution = $monObjPdoStatement -> execute();
      echo "nous avons bien pris en compte votre inscription";
    }
  } catch (PDOException $e) {
    echo 'Connexion échoué : '. $e->getMessage();
  }
}

?>