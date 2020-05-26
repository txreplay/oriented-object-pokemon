<?php 

namespace Model;

class Pikachu extends Pokemon
{
	function __construct()
	{
		$this->_setName('PikachuZor');
		$this->_setType('Foudre');
		$this->_setLevel(9001);
		$this->_setGender('female');
		$this->_setMaxHealthPoints('100');
		$this->_setHealthPoints($this->_setMaxHealthPoint('100'));
	}
}