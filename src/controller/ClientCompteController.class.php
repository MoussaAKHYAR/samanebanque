<?php

use libs\system\Controller;

class ClientCompteController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  /**
    * use: localhost/mesprojets/samaneBanque/clientCompte/add
    */
  public function index()
  {
    return $this->view->load("responsable/index");
  }
}
?>