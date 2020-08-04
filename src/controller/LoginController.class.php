<?php

use libs\system\Controller;
use src\model\PersonneRepository;

class LoginController extends Controller{

  public function __construct()
  {
    parent::__construct();
  }
  /**
     * url pattern for this method
     * localhost/mesprojets/samaneBanque/login
     */

  public function seConnecter()
  {
    extract($_POST);
    // var_dump($_POST);
    $user = $nomUtilisateur;
    $pass = $password;

    $userModel = new PersonneRepository();

    $ok = $userModel->login($user,$pass);
    if ($ok) {
      return $this->view->redirect("ClientCompte/index");
    }
    else{
      //return $this->view->load("welcome/index");
      echo 1;
    }
  }
}
?>