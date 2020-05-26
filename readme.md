#POKEMON

##Attributs
1. Nom
2. Level
3. Type(s)
4. Genre
5. ID Pokédex
6. Points de vie
7. Pokemon parent

##Methodes
1. Dire son nom
2. Attaques

##Requetes
###SELECT
```
SELECT
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
```