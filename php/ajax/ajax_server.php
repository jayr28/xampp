<?php 

	$pikachu = [];
	$pikachu['name'] = 'pikachu';
	$pikachu['type'] = 'electric';
	$pikachu['moves'] = [];
	$pikachu['moves']['basic']='Thunderbolt';
	$pikachu['moves']['special']='Thundershock';
	/**/


	$charmander=[];
	$charmander['name'] = 'charmander';
	$charmander['type'] = 'fire';
	$charmander['moves'] = [];
	$charmander['moves']['basic']='tailwhip';
	$charmander['moves']['special']='flamethrower';

	$squirtle=[];
	$squirtle['name'] = 'squirtle';
	$squirtle['type'] = 'water';
	$squirtle['moves'] = [];
	$squirtle['moves']['basic']='tackle';
	$squirtle['moves']['special']='watergun';

	$pokemons = [
		'pikachu'=>$pikachu,
		'charmander'=>$charmander,
		'squirtle'=>$squirtle,
	];

	$key = $_GET['pokemon'];


	if(array_key_exists($key, $pokemons)){
		echo json_encode($pokemons[$key]);

	} else {
		echo " ";
	}



	




 ?>