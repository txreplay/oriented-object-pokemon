<?php 

	include('connexion.php');
	
	spl_autoload_register('AutoLoadezLesTous');

	function AutoLoadezLesTous($className) 
	{
		$className = str_replace('\\', '/', $className);
		require_once($className . '.php');
	}

	$pokeRep = new \Model\PokemonRepository($db);

	var_dump($pokeRep);