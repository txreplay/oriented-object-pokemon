<?php 

namespace Model;

class PokemonRepository
{
	function __construct( \PDO &$db ) 
	{
		$this->db = $db;
	}

	function hydrate() 
	{
		if (is_array($id)) {
			$idList = "IN (" . implode(',', $id) . ")";
		} elseif (is_int($id)) {
			$idList = " = " . (int) $id;
		} else {
			return false;
		}

		$sql = "SELECT
					`id`,
					`name`,
					`type`,
					`level`,
					`gender`,
					`maxHealthPoints`,
					`HealthPoints`,
					`class`,
				FROM
					`pokemon`
				WHERE
					`id` $idList
				;";

		$stmt = $this->db->query($sql);
		$collection = new \SplFixedArray($stmt->rowCount());
		$inc = 0;
		while( $row = $stmt-> fetch( \PDO::FETCH_ASSOC )) {
			$class = $row['class'];
			$collection[$inc] = new $class();
			$collection[$inc]->_setName($row['name']);
			$collection[$inc]->_setLevel($row['level']);
			$collection[$inc]->_setHealthPoints($row['healthPoints']);
			$collection[$inc]->_setMaxHealthPoints($row['maxHealthPoints']);
			$inc++;
		}

		return $collection;
	}
}













