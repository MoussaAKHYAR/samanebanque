<?php

use libs\system\Controller;

class LoginController extends Controller{

  public function __construct()
  {
    parent::__construct();
  }
  /**
     * url pattern for this method
     * localhost/mesprojets/samaneBanque/login
     */

    public function seConnecter(){
      extract($_POST);
      var_dump($_POST);
      
      return $this->view->redirect("ClientCompte/index");
  }
}
?>