<?php 

include 'Sistema.php';

$player1 = post('p1');
$cp_player1 = ''; 
$player2 = post('p2');
$cp_player2 = '';

if (logado()) {
	$pokemons = [];
	
	$pokemons = file(POKEMONFILE);
	
	function explodir($ar){
		$pokemonData = explode(',' , $ar);
		return [
			'nome' => $pokemonData[0],
			'poder' => $pokemonData[1],
			'tipo' => $pokemonData[2],
			'cp' => $pokemonData[3],
			'treinador' => $pokemonData[4]
		];
	}
	$pokemon = array_map('explodir', $pokemons);


	foreach ($pokemon as $pokemons) {
		if(trim($pokemons['nome']) == $player1){
			$cp_player1 = $pokemons['cp'];

		}
		if(trim($pokemons['nome']) == $player2){
			$cp_player2 = $pokemons['cp'];
		}
	}
	var_dump($cp_player1);
	var_dump($cp_player2);
}

 ?>