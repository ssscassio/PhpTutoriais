<?php
/*
Iniciando o trabalho com leitura de json em php
Exemplo Um, decodificando uma string json simples e a transformano em um objeto php. Imprimindo as variáveis para teste
*/
$json_string = '{"nome":"Pedro Neri", "idade":19, "Jogos":"League of Legends, Hearthstone, GTAV"}'; // Cria uma string json

$phpObject = json_decode($json_string); // Usa a função decode e a associa a variável phpObject

echo "nome : $phpObject->nome"; // Imprime o valor das variáveis
print '</br>'; // Quebra de linha
echo "idade: $phpObject->idade";
print '</br>';
echo "jogos: $phpObject->Jogos";
print '</br>';
print '</br>';

/*
Exemplo dois, trabalhando com uma array do json em php
*/

$json_array = '{"funcionarios" : ' . // Cria um objeto JSon um pouco mais complexo
					'[{"nome" : "Pedro Neri", "idade" : 19, "sexo" : "Masculino"}, ' .
					'{"nome" : "Cassio Santos", "idade" : 18, "sexo" : "Masculino"}, '.
					'{"nome" : "Mulher qualquer", "idade": 40, "sexo": "Feminino"} '.
					']}';

$phpObjectArray = json_decode($json_array); // Faz o decode para php e associa o objeto criado a um objeto do php
$funcionarios = $phpObjectArray->funcionarios; // Capturamos o vetor

foreach ($funcionarios as $f) // Percorremos e imprimimos o vetor capturado
{
	echo "nome : $f->nome - idade: $f->idade - sexo: $f->sexo<br>";	
}

/*
######################### LINK COM EXEMPLOS ##################

http://www.devmedia.com.br/trabalhando-com-json-em-php/26716

#############################################################
*/