<?php
namespace src\model; 
use libs\system\Model;

class PersonneRepository extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function addClient($personne)
	{
		if($this->db != null)
		{
			$this->db->persist($personne);
			$this->db->flush();

			return $test->getId();
		}
	}
}
?>