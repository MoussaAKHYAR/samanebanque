<?php

use libs\system\Controller;
use src\model\PersonneRepository;

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
  
  /**
    * use: localhost/mesprojets/samaneBanque/clientCompte/add
    */
  public function add()
  {
    extract($_POST);
    if ($choix_client == 'nouveau') {
      if ($choix_type_client == 'physique') {
        if ($choix_compte == 'simple') {
          $personneRepository = new PersonneRepository();
          $data['ok'] = 0;
          $personneObject = new Personne();
          $personneObject->setMatricule(codeAleatoire(8));
          $personneObject->setCin($cni);
          $personneObject->setNom($nom);
          $personneObject->setPrenom($prenom);
          $personneObject->setSexe($sexe);
          $personneObject->setDateNaiss($dateNaiss);
          $personneObject->setTelephone($telephoneP);
          $personneObject->setAdrPersonne($adrPersonne);
          $personneObject->setEmail($emailP);
          $personneObject->setLogin(null);
          $personneObject->setPassword(null);
          //var_dump($personneObject);
          $ok = $personneRepository->addClient($personneObject);
          //var_dump($ok);
          $data['ok'] = $ok;

          var_dump($data);


        }
      }
    }
    
    // $data['ok'] = 0;
    // $personneObject = new Personne();
    // $personneObject->setMatricule(codeAleatoire(8));
    // $personneObject->setCin($cni);
    // $personneObject->setNom($nom);
    // $personneObject->setPrenom($prenom);
    // $personneObject->setSexe($sexe);
    // $personneObject->setDateNaiss($dateNaiss);
    // $personneObject->setTelephone($telephone);
    // $personneObject->setAdrPersonne($adrPersonne);
    // $personneObject->setEmail($email);
    // $personneObject->setLogin(null);
    // $personneObject->setPassword(null);

    // $ok = $personneRepository->addClient($personneObject);
    // $data['ok'] = $ok;

    // var_dump($data);
    //return $this->view->load("test/add", $data);
    //   else{
    //         return $this->view->load("test/add");
    // }
  }
}
  function codeAleatoire($car)
  {
    $string = "";
    $chaine = "2643789ABDCEFGHJKMNPRTUVW";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++)
    {
        $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
  }
?>