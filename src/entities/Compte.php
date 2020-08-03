<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="compte")
 **/
class Compte{
  /** @Id @Column(type="string") **/
  private $numero;
  /**
   * Many comptes have one personne. This is the owning side.
   * @ManyToOne(targetEntity="Personne", inversedBy="comptes")
   * @JoinColumn(name="personne_matricule", referencedColumnName="matricule")
   */
  private $matricule;
  /**
   * Many comptes have one entreprise. This is the owning side.
   * @ManyToOne(targetEntity="Entreprise", inversedBy="comptes")
   * @JoinColumn(name="entreprise", referencedColumnName="id")
   */
  private $id;
  /**
   *@Column(type="string")
   */
  private $rib;
  /**
   *@Column(type="decimal")
   */
  private $solde;
  /**
   *@Column(type="date")
   */
  private $dateOuverture;
  /**
   *@Column(type="string")
   */
  private $raisonSocial;
  /**
   *@Column(type="decimal")
   */
  private $salaire;
  /**
   *@Column(type="string")
   */
  private $nomEmpl;
  /**
    *@Column(type="string")
    */
  private $telEmpl;
  /**
    *@Column(type="string")
    */
  private $numeroIdentification;
  /**
    *@Column(type="string")
    */
  private $agios;
  /**
    *@Column(type="integer")
    */
  private $fraisOuverture;
  /**
    *@Column(type="integer")
    */
  private $remuneration;
  /**
    *@Column(type="date")
    */
  private $dateDebut;
  /**
    *@Column(type="date")
    */
  private $dateFin;
  /**
    *@Column(type="string")
    */
  private $typeCompte;

  public function __construct()
  {
    
  }
  public function getNumero()
  {
    return $this->numero;
  }
  public function setNumero($numero)
  {
    $this->numero = $numero;

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
  public function getSolde()
  {
    return $this->solde;
  }
  public function setSolde($solde)
  {
    $this->solde = $solde;

    return $this;
  }
  public function getDateOuverture()
  {
    return $this->dateOuverture;
  }
  public function setDateOuverture($dateOuverture)
  {
    $this->dateOuverture = $dateOuverture;

    return $this;
  }
  public function getRaisonSocial()
  {
    return $this->raisonSocial;
  }
  public function setRaisonSocial($raisonSocial)
  {
    $this->raisonSocial = $raisonSocial;

    return $this;
  }
  public function getSalaire()
  {
    return $this->salaire;
  }
  public function setSalaire($salaire)
  {
    $this->salaire = $salaire;

    return $this;
  }
  public function getNomEmpl()
  {
    return $this->nomEmpl;
  }
  public function setNomEmpl($nomEmpl)
  {
    $this->nomEmpl = $nomEmpl;

    return $this;
  }
  public function getTelEmpl()
  {
    return $this->telEmpl;
  }
  public function setTelEmpl($telEmpl)
  {
    $this->telEmpl = $telEmpl;

    return $this;
  }
  public function getNumeroIdentification()
  {
    return $this->numeroIdentification;
  }
  public function setNumeroIdentification($numeroIdentification)
  {
    $this->numeroIdentification = $numeroIdentification;

    return $this;
  }
  public function getAgios()
  {
    return $this->agios;
  }
  public function setAgios($agios)
  {
    $this->agios = $agios;

    return $this;
  }
  public function getFraisOuverture()
  {
    return $this->fraisOuverture;
  }
  public function setFraisOuverture($fraisOuverture)
  {
    $this->fraisOuverture = $fraisOuverture;

    return $this;
  }
  public function getRemuneration()
  {
    return $this->remuneration;
  }
  public function setRemuneration($remuneration)
  {
    $this->remuneration = $remuneration;

    return $this;
  }
  public function getDateDebut()
  {
    return $this->dateDebut;
  }
  public function setDateDebut($dateDebut)
  {
    $this->dateDebut = $dateDebut;

    return $this;
  }
  public function getDateFin()
  {
    return $this->dateFin;
  }

  public function setDateFin($dateFin)
  {
    $this->dateFin = $dateFin;

    return $this;
  }

  public function getTypeCompte()
  {
    return $this->typeCompte;
  }

  public function setTypeCompte($typeCompte)
  {
    $this->typeCompte = $typeCompte;

    return $this;
  }

  public function getRib()
  {
    return $this->rib;
  }

  public function setRib($rib)
  {
    $this->rib = $rib;

    return $this;
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
}
?>