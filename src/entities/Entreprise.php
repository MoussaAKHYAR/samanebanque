<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="entreprise")
 */
class Entreprise{

  /**
  *@Id
  *@Column(type="integer")
  *@GeneratedValue
  */
  private $id;
  /**
    *@Column(type="string")
    */
  private $nom;
  /**
    *@Column(type="string")
    */
  private $tel;
  /**
    * @Column(type="string")
    */
  private $email;
  /**
    * @Column(type="string")
    */
  private $login;
  /**
    *@Column(type="string")
    */
  private $password;
  /**
    *@Column(type="string")
    */
  private $adrEntreprise;
  /**
   *One entreprise has many comptes. This is the inverse side.
   *@OneToMany(targetEntity="Compte", mappedBy="id")
  */
  private $comptes;

  public function __construct()
  {
    $this->comptes = new ArrayCollection();
  }
  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;

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
  public function getTel()
  {
    return $this->tel;
  }
  public function setTel($tel)
  {
    $this->tel = $tel;

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
  public function getLogin()
  {
    return $this->login;
  }
  public function setLogin($login)
  {
    $this->login = $login;

    return $this;
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
  public function getAdrEntreprise()
  {
    return $this->adrEntreprise;
  }
  public function setAdrEntreprise($adrEntreprise)
  {
    $this->adrEntreprise = $adrEntreprise;

    return $this;
  }
  public function getComptes()
  {
    return $this->comptes;
  }
  public function setComptes($comptes)
  {
    $this->comptes = $comptes;

    return $this;
  }
}

?>