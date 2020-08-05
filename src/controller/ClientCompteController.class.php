<?php

use libs\system\Controller;
use src\model\CompteRepository;
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
    if(isset($_POST['valider'])){
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
          // $personneObject->setLogin(null);
          // $personneObject->setPassword(null);
          //var_dump($personneObject);
          // $ok = $personneRepository->addClient($personneObject);
          // var_dump($ok);
          if (1) {
            $compte = new Compte();
              $comptedb = new CompteRepository();
              $compte->setNumero(codeAleatoire(8));
              $compte->setPersonne($personneObject);
              $compte->setRib(15);
              $compte->setDateOuverture(date("Y-m-d"));
              $compte->setFraisOuverture(2500);
              $compte->setRemuneration(1000);
              $compte->setTypeCompte(2);
              //var_dump($compte);

              $ok2 = $comptedb->addCompteSimple($compte);
              //var_dump($compte->getDateOuverture());

              //var_dump($ok2);
              if ($ok2) {
                $data['ok'] = $ok2;
                return $this->view->redirect("ClientCompte/index",$data);;
              }
            }
          }else if($choix_compte == 'courant'){
            
          }
        }
      }
    }

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