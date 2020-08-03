<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="personne")
 **/
class Personne
{
    /** @Id @Column(type="string") **/
    private $matricule;
    /** @Column(type="string") **/
    private $cin;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $prenom;
    /** @Column(type="string") **/
    private $sexe;
    /** @Column(type="string") **/
    private $dateNaiss;
    /** @Column(type="string") **/
    private $telephone;
    /** @Column(type="string") **/
    private $adrPersonne;
    /** @Column(type="string") **/
    private $email;
    /** @Column(type="string") **/
    private $login;
    /** @Column(type="string") **/
    private $password;
    /**
     * One personne has many comptes. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="personne")
     */
    private $comptes;
    
    public function __construct()
    {
        $this->comptes = new ArrayCollection();
    }

    public function getPassword()
    {
      return $this->password;
    }

    public function setPassword($password)
    {
      $this->password = $password;

      return $this;
    }

    public function getLogin()
    {
      return $this->login;
    }

    public function setLogin($login)
    {
      $this->login = $login;

      return $this;
    }

    public function getEmail()
    {
      return $this->email;
    }

    public function setEmail($email)
    {
      $this->email = $email;

      return $this;
    }

    public function getAdrPersonne()
    {
      return $this->adrPersonne;
    }

    public function setAdrPersonne($adrPersonne)
    {
      $this->adrPersonne = $adrPersonne;

      return $this;
    }

    public function getTelephone()
    {
      return $this->telephone;
    }

    public function setTelephone($telephone)
    {
      $this->telephone = $telephone;

      return $this;
    }

    public function getDateNaiss()
    {
      return $this->dateNaiss;
    }

    public function setDateNaiss($dateNaiss)
    {
      $this->dateNaiss = $dateNaiss;

      return $this;
    }

    public function getPrenom()
    {
      return $this->prenom;
    }

    public function setPrenom($prenom)
    {
      $this->prenom = $prenom;

      return $this;
    }

    public function getSexe()
    {
      return $this->sexe;
    }

    public function setSexe($sexe)
    {
      $this->sexe = $sexe;

      return $this;
    }

    public function getNom()
    {
      return $this->nom;
    }

    public function setNom($nom)
    {
      $this->nom = $nom;

      return $this;
    }

    public function getCin()
    {
      return $this->cin;
    }

    public function setCin($cin)
    {
      $this->cin = $cin;

      return $this;
    }

    public function getMatricule()
    {
      return $this->matricule;
    }

    public function setMatricule($matricule)
    {
      $this->matricule = $matricule;

      return $this;
    }
    public function getComptes()
    {
      return $this->comptes;
    }
    public function setComptes($comptes)
    {
      $this->comptes = $comptes;
    }
}

?>