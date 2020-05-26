<?php 

namespace Model;

abstract class Pokemon 
{
	protected $name;
	protected $level;
	protected $types;
	protected $gender;
	protected $pokedexNumber;
	protected $healthPoints;
	protected $maxHealthPoints;
	protected $parentPokemon;

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    private function _setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of level.
     *
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets the value of level.
     *
     * @param mixed $level the level
     *
     * @return self
     */
    private function _setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Gets the value of types.
     *
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Sets the value of types.
     *
     * @param mixed $types the types
     *
     * @return self
     */
    private function _setTypes($types)
    {
        $this->types = $types;

        return $this;
    }

    /**
     * Gets the value of gender.
     *
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets the value of gender.
     *
     * @param mixed $gender the gender
     *
     * @return self
     */
    private function _setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Gets the value of pokedexNumber.
     *
     * @return mixed
     */
    public function getPokedexNumber()
    {
        return $this->pokedexNumber;
    }

    /**
     * Sets the value of pokedexNumber.
     *
     * @param mixed $pokedexNumber the pokedex number
     *
     * @return self
     */
    private function _setPokedexNumber($pokedexNumber)
    {
        $this->pokedexNumber = $pokedexNumber;

        return $this;
    }

    /**
     * Gets the value of healthPoints.
     *
     * @return mixed
     */
    public function getHealthPoints()
    {
        return $this->healthPoints;
    }

    /**
     * Sets the value of healthPoints.
     *
     * @param mixed $healthPoints the health points
     *
     * @return self
     */
    private function _setHealthPoints($healthPoints)
    {
        $this->healthPoints = $healthPoints;

        return $this;
    }

    /**
     * Gets the value of maxHealthPoints.
     *
     * @return mixed
     */
    public function getMaxHealthPoints()
    {
        return $this->maxHealthPoints;
    }

    /**
     * Sets the value of maxHealthPoints.
     *
     * @param mixed $maxHealthPoints the max health points
     *
     * @return self
     */
    private function _setMaxHealthPoints($maxHealthPoints)
    {
        $this->maxHealthPoints = $maxHealthPoints;

        return $this;
    }

    /**
     * Gets the value of parentPokemon.
     *
     * @return mixed
     */
    public function getParentPokemon()
    {
        return $this->parentPokemon;
    }

    /**
     * Sets the value of parentPokemon.
     *
     * @param mixed $parentPokemon the parent pokemon
     *
     * @return self
     */
    private function _setParentPokemon($parentPokemon)
    {
        $this->parentPokemon = $parentPokemon;

        return $this;
    }
}